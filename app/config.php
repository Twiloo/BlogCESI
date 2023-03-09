<?php

// Load the .env file

require_once 'envLoader.php';

$envLoader = new DotEnv(__DIR__.'/.env');
$envLoader->load();

// Informations about the site

define('DEV_NAME', 'Twiloo');
define('SITE_NAME', 'Blog de '.DEV_NAME);
define('SEPARATOR', ' | ');
define('HOME_URL', 'http://blog');

// Informations about the database

define('DB_HOST', 'localhost');
define('DB_NAME', 'blog');
define('DB_PASSWORD' ,getenv('DB_PASSWORD'));
define('DB_PORT', '3306');
define('DB_USER', 'root');

// Informations about HTML definition

define('DOCTYPE', 'html');
define('LANG', 'fr');
define('CHARSET', 'UTF-8');
define('HTTP_EQUIV', 'X-UA-Compatible');
define('CONTENT', 'IE=edge');
define('NAME_VIEWPORT', 'viewport');
define('CONTENT_VIEWPORT', 'width=device-width, initial-scale=1.0');

define('CONFIG_LOADED', true);

?>