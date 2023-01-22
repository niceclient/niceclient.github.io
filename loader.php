<?php
session_start();
require_once 'connect.php';
// Initialize URL to the variable
$url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
$escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );

// contains its various components
$url_components = parse_url($escaped_url);

// Use parse_str() function to parse the
// string passed via URL
parse_str($url_components['query'], $params);
$hwid = $params['hwid'];

$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `hwid` = '$hwid'");
if (mysqli_num_rows($check_user) !== 0) {
  echo 'yes';
} else {
  echo 'no';
}
?>
