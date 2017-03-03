<?php

require_once __DIR__ . '/vendor/autoload.php';

use Mautic\Auth\ApiAuth;
use Mautic\MauticApi;

session_start();

$settings = json_decode(file_get_contents(__DIR__ . '/settings.json'), true);

$initAuth = new ApiAuth();
$auth = $initAuth->newAuth($settings);

if ($auth->validateAccessToken()) {
  if ($auth->accessTokenUpdated()) {
    $accessTokenData = $auth->getAccessTokenData();
    dump($accessTokenData);
  }
}
