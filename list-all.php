<?php

require_once __DIR__ . '/vendor/autoload.php';

use Mautic\Auth\ApiAuth;
use Mautic\MauticApi;

session_start();

$settings = json_decode(file_get_contents(__DIR__ . '/settings.json'), true);

$initAuth = new ApiAuth();
$auth = $initAuth->newAuth($settings);

if ($auth->validateAccessToken()) {
  $baseUrl = $settings['baseUrl'];

  $api = new MauticApi();
  $contactsApi = $api->newApi('contacts', $auth, "$baseUrl/api/");

  $response = $contactsApi->getList();
  dump($response);
}
