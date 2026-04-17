<?php

$heading = "My Note";

// dump_and_die($_GET['id']);

$note = $db->query("select * from notes where id = :id", ['id' => $_GET['id']])->fetch();

require "views/notes.view.php";