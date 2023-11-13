<?php

namespace Cornatul\Social\Http;

use Cornatul\Social\DTO\UserInformationDTO;
use Cornatul\Social\Managers\SocialSessionManager;
use Cornatul\Social\Repositories\SocialConfigurationRepository;
use Cornatul\Social\Repositories\SocialRepository;
use Cornatul\Social\LoginProviders\CustomLinkedInProvider;
use Cornatul\Social\LoginProviders\CustomTwitterProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use Illuminate\Routing\Controller;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Two\FacebookProvider;
use Laravel\Socialite\Two\GithubProvider;
use Laravel\Socialite\Two\GoogleProvider;
use RuntimeException;

class SocialLoginController extends Controller
{
    private SocialRepository $socialRepository;
    private SocialConfigurationRepository $socialConfigurationRepository;

    private SocialSessionManager $socialSessionManager;

    protected array $providers = [
        'github' => GithubProvider::class,
        'twitter' => CustomTwitterProvider::class,
        'linkedin' => CustomLinkedInProvider::class,
        'facebook' => FacebookProvider::class,
        'google' => GoogleProvider::class,
    ];

    public function __construct(
        SocialRepository $socialRepository,
        SocialConfigurationRepository $socialConfigurationRepository
    )
    {
        $this->socialRepository = $socialRepository;
        $this->socialConfigurationRepository = $socialConfigurationRepository;
        $this->socialSessionManager =  new SocialSessionManager();

    }

    /**
     * @throws \Exception
     */
    final public function login(int $account, string $provider): string
    {
        $this->socialSessionManager->destroySocialSessions();

        $this->socialSessionManager->setSocialSessions($account, $provider);

        //todo have a look here for the configuration
        $configuration = $this->socialConfigurationRepository->getAccountConfiguration($account, $provider);

        $providerClass = $this->providers[$provider] ?? "The selected '$provider' is not yet implemented";

        return Socialite::buildProvider($providerClass, (array) $configuration->configuration)
            ->scopes($providerClass->scopes ?? [])
            ->redirect();

    }


    /**
     *
     * @throws RuntimeException
     */
    final public function callback(Request $request): RedirectResponse
    {
        //get the sessions
        $account = $this->socialSessionManager->getSocialSession('account');

        $provider = $this->socialSessionManager->getSocialSession('provider');

        $providerClass = $this->providers[$provider] ?? "The selected '$provider' is not yet implemented";

        $configuration = $this->socialConfigurationRepository->getAccountConfiguration($account, $provider);

        //todo make here a base method on the abstract social provider that
        $user = Socialite::buildProvider($providerClass, (array) $configuration->configuration)
            ->scopes($providerClass->scopes ?? [])
            ->user();

        //todo move this to a repository method
        $data = UserInformationDTO::from([
            // OAuth 2.0 providers
            'token' => $user->token,
            'refreshToken' => $user->refreshToken,
            'expiresIn' => $user->expiresIn,

            // All providers
            'id' => $user->getId(),
            'nickname' => $user->getNickname(),
            'name' => $user->getName(),
            'email' => "",
            'avatar' => $user->getAvatar(),
        ]);

        $this->socialConfigurationRepository->saveAccountInformation($data);
        $this->socialSessionManager->destroySocialSessions();

        return redirect()->route('social.index')->with('success', "Account {$provider} connected successfully");

    }

}
