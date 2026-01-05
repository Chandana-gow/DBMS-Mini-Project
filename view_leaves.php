<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Attendance</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
         th,td {
            border: 1px solid #000000;
            text-align: left;
            padding: 8px;
          
        }
        th{
            color:	#b22222;
            font-family: Georgia,serif;
        }
        td{
          font-family: Times New Roman, serif;
        }
        th {
            background-color:#fffacd;
        }
        h2{
            font-family: Times New Roman, serif;
            color:	#4b0082;

        }
        .button-container button {
            margin-left:10px;
            left: 20px; 
            padding: 10px 20px;
            background-color: #b0c4de; 
            color: #000000;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
      
        .button-container-hover{
            
            background-color: #b0c4de; 
        }

    </style>
</head>
<body>
    <h2>Leave Records</h2>

    <table>
        <tr>
            <th>Leave ID</th>
            <th>Leave Date</th>
            <th>Employee ID</th>
            <th>Leave Reason</th>
           

        </tr>

        <?php
        // Database connection parameters
       include "db_connection.php";

        // SQL query to retrieve data from your table
        $sql = "SELECT Leave_id, Leave_date,Emp_id,Leave_reason FROM leave_record";
        $result = $conn->query($sql);

        // Check if there are rows returned
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["Leave_id"] . "</td>";
                echo "<td>" . $row["Leave_date"] . "</td>";
                echo "<td>" . $row["Emp_id"] . "</td>";
                echo "<td>" . $row["Leave_reason"] . "</td>";
              
                
               

                echo "</tr>";
            }
        } else {
            echo "0 results";
        }
       
        $conn->close();
        ?>

    </table>
    <br>
    <div class="button-container">
        <button><a href="leave_id.php"class="text-light">Filter by Employee ID</a></button>
        <br>
        <br>
        <button><a href="leave_date.php"class="text-light">Filter by Date</a></button>
        </div>
</body>
</html>