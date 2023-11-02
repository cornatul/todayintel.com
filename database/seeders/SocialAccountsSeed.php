<?php

namespace Database\Seeders;

use Cornatul\Social\Models\SocialAccount;
use Cornatul\Social\Models\SocialAccountConfiguration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialAccountsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public final function run(): void
    {
        $user_id = 1;

        $account = SocialAccount::create([
            'user_id' => $user_id,
            'account' => 'Stefan',
        ]);

        SocialAccountConfiguration::create([
            'social_account_id' => $account->id,
            'type' => 'linkedin',
            'configuration' => json_encode([
                'client_id' => config('social.linkedin.client_id'),
                'client_secret' => config('social.linkedin.client_secret'),
                'redirect' => config('social.linkedin.redirect_uri'),
                'scopes' => config('social.linkedin.scopes'),
            ]),
        ]);


        SocialAccountConfiguration::create([
            'social_account_id' => $account->id,
            'type' => 'twitter',
            'configuration' => json_encode([
                'client_id' => config('social.twitter.client_id'),
                'client_secret' => config('social.twitter.client_secret'),
                'redirect' => config('social.twitter.redirect_uri'),
                'scopes' => config('social.twitter.scopes'),

            ]),
        ]);


        SocialAccountConfiguration::create([
            'social_account_id' => $account->id,
            'type' => 'facebook',
            'configuration' => json_encode([
                'client_id' => config('social.facebook.client_id'),
                'client_secret' => config('social.facebook.client_secret'),
                'redirect' => config('social.facebook.redirect_uri'),
                'scopes' => config('social.facebook.scopes'),
            ]),
        ]);


        SocialAccountConfiguration::create([
            'social_account_id' => $account->id,
            'type' => 'github',
            'configuration' => json_encode([
                'client_id' => config('social.github.client_id'),
                'client_secret' => config('social.github.client_secret'),
                'redirect' => config('social.github.redirect_uri'),
                'scopes' => config('social.github.scopes'),
            ]),
        ]);


        SocialAccountConfiguration::create([
            'social_account_id' => $account->id,
            'type' => 'google',
            'configuration' => json_encode([
                'client_id' => config('social.google.client_id'),
                'client_secret' => config('social.google.client_secret'),
                'redirect' => config('social.google.redirect_uri'),
                'scopes' => config('social.google.scopes'),
            ]),
        ]);

    }
}
