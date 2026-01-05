<?php

include 'db_connection.php';
if(isset($_POST['submit'])) {
$Leave_date=$_POST['Leave_date'];
$Emp_id = $_POST['Emp_id'];
$Leave_reason = $_POST['Leave_reason'];

$sql = "INSERT INTO leave_record (Leave_date,Emp_id,Leave_reason) VALUES ('$Leave_date','$Emp_id','$Leave_reason')";
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

    <title>Add Leave Record</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">

<div class="form-group">
    <label>Leave Date</label>
    <input type="text" class="form-control"
    placeholder="e.g YYYY-MM-DD" name="Leave_date">
</div>
<div class="form-group">
    <label>Employee ID</label>
    <input type="text" class="form-control"
    placeholder="e.g 1" name="Emp_id">
</div>
<div class="form-group">
    <label>Leave Reason</label>
    <input type="text" class="form-control"
    placeholder="e.g 01" name="Leave_reason">
    
</div>

<br>

<button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
        

    

    
  </body>
</html>