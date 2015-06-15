<?php

function eemjii_twitter_inline_link ($twitter_account_name, $url_endpoint) {
    $string = '';
    $string .= '<a href="';
    $string .= 'https://twitter.com/' . $url_endpoint .  '"';
    $string .= "title=\"View\"" . $twitter_account_name . 's profile on Twitter">'.$twitter_account_name.'</a>';

    return $string;
}