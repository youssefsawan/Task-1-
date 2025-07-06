<?php
require_once 'db.php';

$fname = 'Youssef';
$lname = 'Sawan';
$age = 21;

$query = $con->prepare("INSERT INTO users (fname, lname, age) VALUES (?, ?, ?)");
$query->bind_param("ssd", $fname, $lname, $age);
$query->execute();

if ($query->error) {
    echo "Error: " . $query->error;
} else {
    echo "Success";
}
?>
