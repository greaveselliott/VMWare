<?php
$consumerKey        = '9C55GyeJF9x0BhJsjapPC6aY7';
$consumerSecret     = 'Q78XAttBN4KDqQKm6sr8zZSrSb3xD782Jg5ZUGxMb85VNXwz8C';
$accessToken        = '200343915-dRC0ClnQ0ETvxMMOQqjeUtxFXjUG3OK1ErmCpH6H';
$accessTokenSecret  = 'rlVLa1Ht369wZrDKvjjej5PAqdOyhltedNktHUUEbBFAE';

$twitter            = new \Abraham\TwitterOAuth\TwitterOAuth( $consumerKey,
                                        $consumerSecret,
                                        $accessToken,
                                        $accessTokenSecret  );

//$twitter_request    = '';
//$twitter_request    .= 'https://api.twitter.com/1.1/search/tweets.json?q=';
//$twitter_request    .= '%40vmware_uk';
//$twitter_request    .= 'since_id=24012619984051000&';
//$twitter_request    .= 'max_id=250126199840518145';

$tweets = $twitter -> get("search/tweets", array("q" => '#vcloudanywhere OR #vCloudanywhere OR #vCloudAnywhere OR @vcloud OR @vmware_uk', "count"=>5));