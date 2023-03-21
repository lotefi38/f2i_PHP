<?php
require("database.php");
require("verification.php");

$array = [];
$verif = new Verification();
$verif->Email($_GET['email']);

echo $verif -> getIndexError(0);

$db = new Database();
$db->connectDB();