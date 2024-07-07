<?php

require_once 'vendor/autoload.php';

session_start();

// init configuration
$clientID = '526613851152-6qq6tr1c3cv6qgcubkedjfl4iue34u2e.apps.googleusercontent.com';
$clientSecret = '';
$redirectUri = 'https://ics.pnm.edu.ph/welcome.php';

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

// Connect to database
$hostname = "localhost";
$username = "cdmicto_gadmin";
$password = "YS0Q4Gbvp6aG";
$database = "cdmicto_google";

$conn = mysqli_connect($hostname, $username, $password, $database);
