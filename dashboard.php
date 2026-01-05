<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="dashboard.css">
  </head>
  <body>
    <div class="grid-container">
      <!-- Sidebar -->
      <aside id="sidebar">
        <div class="sidebar-title">
          <div class="sidebar-brand">
            <span class="material-icons-outlined">inventory</span> Admin Dashboard
          </div>
          <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
        </div>

        <ul class="sidebar-list">
          <li class="sidebar-list-item">
            <a href="employee.php" target="_blank">
              <span class="material-icons-outlined">manage_accounts</span> Employee
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="department.php" target="_blank">
              <span class="material-icons-outlined">groups</span> Department
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="attendance.php" target="_blank">
              <span class="material-icons-outlined">fact_check</span> Attendance Records
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="leave.php" target="_blank">
              <span class="material-icons-outlined">receipt_long</span> Leave Records
            </a>
          </li>
          
        </ul>
      </aside>
      
      <!-- End Sidebar -->
      <main class="main-container">
        <div class="main-title">
          <p class="font-weight-bold">DASHBOARD</p>
        </div>

        <div class="main-cards">

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">EMPLOYEE</p>
              <span class="material-icons-outlined text-blue">manage_accounts</span>
            </div>
            <span> 
            <?php
            include 'db_connection.php'; // Include the database connection file
            
            // Retrieve total number of employees from the database
            $sql = "SELECT COUNT(*) AS total_employees FROM employee";
            $result = $conn->query($sql);
            $total_employees = 0;

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $total_employees = $row["total_employees"];
            }
            ?>
              <p><?php echo $total_employees; ?></p></span>
          </div>

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">DEPARTMENT</p>
              <span class="material-icons-outlined text-orange">groups</span>
            </div>
            <span>
            <?php
            include 'db_connection.php'; // Include the database connection file
            
            // Retrieve total number of employees from the database
            $sql = "SELECT COUNT(*) AS total_departments FROM department";
            $result = $conn->query($sql);
            $total_departments = 0;

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $total_departments = $row["total_departments"];
            }
            ?>
              <p><?php echo $total_departments; ?></p>

            </span>
          </div>

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">ATTENDANCE RECORD</p>
              <span class="material-icons-outlined text-green">fact_check</span>
            </div>
            <span>
            <?php
            include 'db_connection.php'; // Include the database connection file
            
            // Retrieve total number of employees from the database
            $sql = "SELECT COUNT(*) AS total_attendance FROM attendance_record";
            $result = $conn->query($sql);
            $total_attendance = 0;

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $total_attendance = $row["total_attendance"];
            }
            ?>
              <p><?php echo $total_attendance; ?></p>
            </span>
          </div>

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">LEAVE RECORD</p>
              <span class="material-icons-outlined text-red">receipt_long</span>
            </div>
            <span>
            <?php
            include 'db_connection.php'; // Include the database connection file
            
            // Retrieve total number of employees from the database
            $sql = "SELECT COUNT(*) AS total_leave FROM leave_record";
            $result = $conn->query($sql);
            $total_leave = 0;

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $total_leave = $row["total_leave"];
            }
            ?>
              <p><?php echo $total_leave; ?></p>
            </span>
          </div>

        </div>
      <!-- Main -->
      
      