<?php
/**
 * Created by PhpStorm.
 * User: aleksey
 * Date: 03.08.18
 * Time: 14:49
 */

namespace App\TwitterOAuth;

use Abraham\TwitterOAuth\TwitterOAuth;

class TwitterConnection
{

    public function getTwits()
    {
        $connection = new TwitterOAuth(
            getenv('CONSUMER_KEY'),
            getenv('CONSUMER_SECRET'),
            getenv('ACCESS_TOKEN'),
            getenv('ACCESS_TOKEN_SECRET'));

        $content = $connection->get("account/verify_credentials");

       return getenv('DB_USER');
    }

}