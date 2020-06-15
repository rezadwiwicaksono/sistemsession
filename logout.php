<?php
//Author Robby Takdirillah 2018
//https://blogbugabagi.blogspot.com/
session_start();
$_SESSION = [];
session_unset();
session_destroy();

header("Location: login.php");
exit;

?>