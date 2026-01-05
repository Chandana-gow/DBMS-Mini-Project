<?php

include 'db_connection.php';
if(isset($_POST['submit'])) {
$Dept_id = $_POST['Dept_id'];
$Dept_name= $_POST['Dept_name'];



$sql = "INSERT INTO Department (Dept_id,Dept_name) VALUES ('$Dept_id', '$Dept_name')";
$result=mysqli_query($conn,$sql);
if($result){
     echo "Data inserted successfully";
}
else{
    die(mysqli_error($conn));
}
}
?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <title>Add Department</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">

<div class="form-group">
    <label>Department id</label>
    <input type="text" class="form-control"
    placeholder="eg AC" name="Dept_id">
</div>
<div class="form-group">
    <label>Department name</label>
    <input type="text" class="form-control"
    placeholder="Department name" name="Dept_name">
</div>




    
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
        

    

    
  </body>
</html>