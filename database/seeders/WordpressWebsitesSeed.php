<?php

namespace Database\Seeders;

use Cornatul\Social\Models\SocialAccount;
use Cornatul\Social\Models\SocialAccountConfiguration;
use Cornatul\Wordpress\Models\WordpressWebsite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WordpressWebsitesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public final function run(): void
    {
        //create wordpress website id	database_host	database_user	database_pass	database_name	created_at	updated_at

        WordpressWebsite::create([
            'database_host' => 'blog.lzomedia.com',
            'database_user' => env('WORDPRESS_USER'),
            'database_pass' => env('WORDPRESS_PASSWORD'),
            'database_name' => 'blog.lzomedia.com',
        ]);


    }
}
