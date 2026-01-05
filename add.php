<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Employee</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
         th,td {
            border: 1px solid #000000;
            text-align: left;
            padding: 8px;
            font-family: Times New Roman,serif;
        }
        th{
            color:	#b22222;
        }
        th {
            background-color:#fffacd;
        }
        h2{
            font-family: Times New Roman, serif;
            color:	#4b0082;

        }
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
</head>
<body>
    <h2>Employee Details</h2>

    <table>
        <tr>
            <th>Employee ID</th>
            <th>Fname</th>
            <th>Lname</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Salary</th>



        </tr>

        <?php
        // Database connection parameters
       include "db_connection.php";

        // SQL query to retrieve data from your table
        $sql = "SELECT Emp_id, Fname,Lname,Gender,DOB,Salary FROM employee";
        $result = $conn->query($sql);

        // Check if there are rows returned
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["Emp_id"] . "</td>";
                echo "<td>" . $row["Fname"] . "</td>";
                echo "<td>" . $row["Lname"] . "</td>";
                echo "<td>" . $row["Gender"] . "</td>";
                echo "<td>" . $row["DOB"] . "</td>";
                echo "<td>" . $row["Salary"] . "</td>";

                echo "</tr>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
        <button class="bottom-button"><a href="employee.php"
    class="text-light">Go back</a></button>

   

    </table>
</body>
</html>