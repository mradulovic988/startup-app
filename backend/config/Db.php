<?php
/**
 * Database connection
 *
 * @author Marko
 * @version 1.0
 */

$host = "localhost"; // Add Host server
$username = "root"; // Add DB Username
$password = ""; // Add DB Password
$dbname = "app"; // Add DB name

$connection = new mysqli($host, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}