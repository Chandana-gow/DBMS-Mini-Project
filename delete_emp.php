<?php

include 'db_connection.php';

if (isset($_POST['Emp_id']) && !empty($_POST['Emp_id'])) {
    $Emp_id = $_POST['Emp_id'];

    // Prepare a SQL statement to delete employee details
    $sql = "DELETE  FROM employee WHERE Emp_id = $Emp_id";

    if ($conn->query($sql) === TRUE) {
        echo "Employee details deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "Employee ID is not set or empty";
}


?>