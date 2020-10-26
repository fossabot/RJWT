<?php
//
// Auth API
// Writen by Zane Reick
//

error_reporting(0);

//Make sure to set these variables to the correct locations!!
//User set variables:
$secConfLoc = "./security_conf.ini.php";  //Security Configuration Location
$rjwtConf   = "./rjwt.ini.php";           //RJWT Configuration Location

header('Content-Type: application/json');
require_once 'rjwt_mod.php';

// Retreive recved values

$username  = protect($_POST["username"]);
$password  = protect($_POST["password"]);
$passkey   = protect($_POST["passkey"]);
$endClient = protect($_POST["endClient"]);

// Import security config

$fChk = fopen($secConfLoc, "r") or die("Invalid configuration location!\n");
fclose($fChk);

$securityConf = parse_ini_file($secConfLoc);
