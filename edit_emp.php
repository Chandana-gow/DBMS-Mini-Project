<?php

include 'db_connection.php';

if(isset($_GET['Emp_id']) && !empty($_GET['Emp_id'])) {
    $Emp_id = $_GET['Emp_id']; 

    $sql = "DELETE FROM employee WHERE Emp_id = $Emp_id";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Employee deleted successfully";
    } else {
        echo "Error deleting employee: " . $conn->error;
    }
} else {
    echo "Employee ID is missing or empty";
}

?>