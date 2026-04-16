<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "functions.php";
require "Database.php";

$config = require "config.php";
$db = new Database($config["database"]);

require "router.php";
