<?php
$mysqli = @new mysqli('localhost', 'root', '', 'mysql');

if ($mysqli->connect_errno) {
    die('Connect Error: ' . $mysqli->connect_errno);
}
else{
	echo OK;
}
?> 
