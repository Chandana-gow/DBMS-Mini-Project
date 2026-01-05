<?php 
session_start(); 
include "db_connection.php";

if (isset($_POST['Admin_name']) && isset($_POST['Admin_passwd'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$Admin_name = validate($_POST['Admin_passwd']);
	$Admin_passwd = validate($_POST['Admin_passwd']);

	if (empty($Admin_name)) {
		header("Location: index.php?error=Admin Name is required");
	    exit();
	}else if(empty($Admin_passwd)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
        
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $Admin_name = $_POST['Admin_name'];
            $Admin_passwd = $_POST['Admin_passwd'];
        
            $Admin_name = mysqli_real_escape_string($conn, $Admin_name);
            $Admin_passwd = mysqli_real_escape_string($conn, $Admin_passwd);
    
            $query = "SELECT * FROM admin WHERE Admin_name = '$Admin_name' AND Admin_passwd = '$Admin_passwd'";
        
            $result = mysqli_query($conn, $query);
        
            if (mysqli_num_rows($result) == 1) {
                header("Location:dashboard.php");
                exit();
            } else {
                header("Location: index.php?error=Incorrect Admin name or password");
		        exit();
            }
        
            mysqli_free_result($result);
        }
        
	}
	
}else{
	header("Location: index.php");
	exit();
}