<?php
require_once 'db.php';

$id = 2;
$age = 20;

$query = $con->prepare("UPDATE users SET age = ? WHERE id = ?");
$query->bind_param("di", $age, $id);
$query->execute();

if ($query->error) {
    echo "Error: " . $query->error;
} else {
    echo "Success";
}
?>
