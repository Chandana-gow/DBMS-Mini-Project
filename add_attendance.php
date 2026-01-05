<?php

include 'db_connection.php';
if(isset($_POST['submit'])) {
$Attendance_date= $_POST['Attendance_date'];
$Emp_id = $_POST['Emp_id'];
$Attendance_status = $_POST['Attendance_status'];

$sql = "INSERT INTO attendance_record (Attendance_date,Emp_id,Attendance_status) VALUES ('$Attendance_date','$Emp_id','$Attendance_status')";
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

    <title>Add Attendance</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">

<div class="form-group">
    <label>Attendance Date</label>
    <input type="text" class="form-control"
    placeholder="e.g YYYY-MM-DD" name="Attendance_date">
</div>
<div class="form-group">
    <label>Employee ID</label>
    <input type="text" class="form-control"
    placeholder="e.g 1" name="Emp_id">
</div>
<div class="form-group">
    <label>Attendance Status</label>
    <input type="text" class="form-control"
    placeholder="e.g Present" name="Attendance_status">
    
</div>

<br>

<button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
        

    

    
  </body>
</html>