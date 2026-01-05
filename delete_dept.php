<?php

include 'db_connection.php';

$Dept_id = isset($_POST['Dept_id']) ? $_POST['Dept_id'] : '';


$Dept_id = $conn->real_escape_string($Dept_id);

$sql = "DELETE FROM department WHERE Dept_id = '$Dept_id'";


if ($conn->query($sql) === TRUE) {
    echo "Department deleted successfully";
} else {
    echo "Error deleting department: " . $conn->error;
}

?>