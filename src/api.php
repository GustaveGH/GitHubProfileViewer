<?php

include "../vendor/autoload.php";

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

$username = $_POST['username'];

$client = new Client([
    'base_uri' => 'https://api.github.com'
]);

try{
    $res = $client->get('/users/' . $username);
    $reps = $client->get('/users/' . $username . '/repos');
} catch (ClientException $error) {
    die('User not found or you are temporary blocked by GitHub api.');
}


$user = json_decode($res->getBody(), true);
$repos = json_decode($reps->getBody(), true);

include 'profile.php';