<?php

include 'db_connection.php';
if(isset($_POST['submit'])) {

$Fname = $_POST['Fname'];
$Lname= $_POST['Lname'];
$Gender = $_POST['Gender'];
$DOB = $_POST['DOB'];
$Salary = $_POST['Salary'];
$Dept_id=$_POST['Dept_id'];

$sql = "INSERT INTO employee (Fname,Lname,Gender,DOB,Salary,Dept_id) VALUES ('$Fname', '$Lname','$Gender','$DOB','$Salary','$Dept_id')";
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

    <title>Add Employee</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">

<div class="form-group">
    <label>Fname</label>
    <input type="text" class="form-control"
    placeholder="Fname" name="Fname">
</div>
<div class="form-group">
    <label>Lname</label>
    <input type="text" class="form-control"
    placeholder="Lname" name="Lname">
</div>
<div class="form-group">
    <label>Gender</label>
  
    <select name="Gender" id="Gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
</div>
<div class="form-group">
    <label>Date of Birth</label>
    <input type="text" class="form-control"
    placeholder="e.g YYYY-MM-DD" name="DOB">
</div>
<div class="form-group">
    <label>Salary</label>
    <input type="text" class="form-control"
    placeholder="Salary" name="Salary">
</div>
<div class="form-group">
    <label>Department Id</label>
    <input type="text" class="form-control"
    placeholder="e.g AC" name="Dept_id">
</div>


    
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
        

    

    
  </body>
</html>