<?php 

require "functions.php";
require "Database.php";
// require "router.php";

$config = require "config.php";


$db = new Database($config["database"]);

$id = $_GET["id"];
$query = "select * from post";

$post = $db->query($query)->fetchAll(PDO::FETCH_ASSOC);


//get all posts fetchAll()
// $post = $db->query("select * from post where id = {$id}")->fetchAll(PDO::FETCH_ASSOC);

foreach ($post as $p){
    echo "<li>" . $p["title"] . "</li>";
}
