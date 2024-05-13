<?php

require 'vendor/autoload.php';

use Guzzle\Http\Client;
use Guzzle\Service\Client as ServiceClient;

// functions

function call_rss_list()
{
    $rss_list = new ServiceClient();

    $rss_list->get('http://podcast.adhari.com/list/rss')->send();

    return $rss_list;
}
