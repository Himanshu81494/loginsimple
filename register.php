<?php

/**
 * A simple, secure and clean PHP Login Script / MINIMAL VERSION
 * Uses PHP SESSIONS, modern password-hashing and salting and gives the basic functions a proper login system needs.
 */
//echo PHP_VERSION;
// checking for minimum PHP version

if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.5.0 !");
}
// below are included files in `orderly manner` 

// include the config files for database connection
require_once("config/db.php");

// load the registration class
require_once("classes/Registration.php");

// registration object created, it will do all registration stuff automatically
$registration = new Registration();

// register view from views folder (with the registration form, and messages/errors)
include("views/register.php");
