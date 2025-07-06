<?php
require_once 'db.php';

$fname = 'John';
$lname = 'Doe';
$age = 30.25;

$query = $con->prepare("INSERT INTO users (fname, lname, age) VALUES (?, ?, ?)");
$query->bind_param("ssd", $fname, $lname, $age);
$query->execute();

if ($query->error) {
    echo "Error: " . $query->error;
} else {
    echo "Success";
}
?>