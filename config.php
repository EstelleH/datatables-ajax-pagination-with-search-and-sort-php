<?php

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = "root"; /* Password */
$dbname = "tutorial"; /* Database name */
$port = "8889"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname,$port);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}