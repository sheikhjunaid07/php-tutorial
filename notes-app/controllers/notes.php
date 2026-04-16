<?php

$heading = "Notes";

$notes = $db->query("select * from notes")->fetchAll();

require "views/notes.view.php";
