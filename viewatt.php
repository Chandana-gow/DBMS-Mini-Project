<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

<!-- Custom CSS -->
<link rel="stylesheet" href="dashboard.css"><main class="main-container">
        <div class="main-title">
          <p class="font-weight-bold"> DISPLAY ATTENDANCE</p>
        </div>
        <div class="main-cards">
          
              <?php
            echo '<a href="att.php" class="card">';
            echo '   FILTER BY DATE';
            echo '</a>';
            ?>
            
            </div>
          
           
          <div class="main-cards">
                <?php
                 echo '<a href="atd.php" class="card">';
                 echo ' FILTER BY EMPLOYEE ID';
                 echo '</a>';
                 ?>
                 <style>
                  .bottom-button{
            position: fixed;
            bottom: 20px; /* Adjust as per your requirement */
            right: 20px; /* Adjust as per your requirement */
            padding: 10px 20px;
            background-color: #b0c4de; /* Blue color, change as per your preference */
            color: #000000 /* White color for text */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
      
        .bottom-button-hover{
            
            background-color: #b0c4de; /* Darker blue on hover */
        }
        </style>
        

                 </div>
                 <button class="bottom-button"><a href="dashboard.php"
    class="text-light">Go back</a></button>

