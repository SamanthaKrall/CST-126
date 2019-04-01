<?php
// Samantha Krall
// Cst-126

session_start();
$_SESSION = array();
session_destroy();

echo "<h1 style='color: forestgreen'>You have successfully logged out!</h1><br><br><h2 style='color: green'>We hope to see you again soon!</h2>";

?>