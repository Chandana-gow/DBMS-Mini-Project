<?php
// Establish database connection
include "db_connection.php";

if(isset($_POST["submit"])){
// Receive form data
$Dept_name = $_POST['Dept_name'];
$Dept_id = $_POST['Dept_id'];

}

// Insert data into database
$query = "INSERT INTO department (Dept_id,Dept_name) VALUES ('$Dept_id','$Dept_name')";
mysqli_query($conn,$query);
if($query){
    echo "<script type='text/javascript'>alert('Successfully added')</script>";

}
else
{
    echo "<script type='text/javascript'>alert('Please enter some valid data')</script>";
    header("location:add.php");
}