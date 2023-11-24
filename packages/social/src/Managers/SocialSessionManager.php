<?php

namespace Cornatul\Social\Managers;

final class SocialSessionManager
{
    final public function setSocialSessions(int $account, string $provider): self
    {
        session()->put('account', $account);
        session()->put('provider', $provider);
        return $this;
    }

    final public function destroySocialSessions(): self
    {
        session()->remove('account');
        session()->remove('provider');
        session()->remove('oauth2state');
        session()->remove('oauth2verifier');
        return $this;
    }

    final public function getSocialSession(string $sessionName): string
    {

        $sessions =  [
            'account' => session()->get('account'),
            'provider' => session()->get('provider'),
        ];

        return $sessions[$sessionName];
    }

}
