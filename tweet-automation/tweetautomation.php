<?php

// ファイルの読み込み
require('twitteroauth/autoload.php');
require('APIkeys.php');
require_once('tweets.php');

use Abraham\TwitterOAuth\TwitterOAuth;

$twitterConnect = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);

$executeTweet = $twitterConnect->post('statuses/update', array('status' => $tweet));

?>