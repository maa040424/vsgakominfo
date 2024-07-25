<?php
$db = new mysqli('localhost', 'root', '', 'db_tokobuku');

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>