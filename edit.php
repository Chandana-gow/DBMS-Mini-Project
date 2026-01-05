<?php

include 'db_connection.php';
$Dept_id = '';
$Dept_name = '';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_POST['Dept_id']) && !empty($_POST['Dept_name']) ) {
        $Dept_id = $_POST['Dept_id'];
        $Dept_name = $_POST['Dept_name'];

        $sql = "UPDATE department SET Dept_name = '$Dept_name', Dept_id = '$Dept_id' WHERE Dept_id = '$Dept_id'";

        if ($conn->query($sql) === TRUE) {
            echo "Employee details updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        echo "Department ID, Department name, and Employee Id  are required.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Department Details</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Edit Department Details</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="Dept_id">Department ID:</label>
        <input type="text" name="Dept_id" required>
        <br><br>
        <label for="Dept_name"> Department Name:</label>
        <input type="text" name="Dept_name" required>
        <br><br>
        <input type="submit" value="Update Details">
    </form>
</body>
</html>