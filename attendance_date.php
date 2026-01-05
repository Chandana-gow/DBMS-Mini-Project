<?php
include 'db_connection.php';


$Attendance_date = '';
$attendance_records = array();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (!empty($_POST['Attendance_date'])) {
        $Attendance_date = $_POST['Attendance_date'];

        
        $sql = "SELECT * FROM attendance_record WHERE Attendance_date = '$Attendance_date'";
        $result = $conn->query($sql);

    
        if ($result->num_rows > 0) {
            
            while ($row = $result->fetch_assoc()) {
                $attendance_records[] = $row;
            }
        }
    } else {
        echo "Attendance Date is required.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Attendance Lookup</title>
</head>
<body>
    <h2>Attendance Lookup</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="Attendance_date">Attendance_date:</label>
        <input type="text" name="Attendance_date" required>
        <br><br>
        <input type="submit" value="Lookup Attendance">
    </form>

    <?php
    
    
        echo "<h2>Attendance details for Attendance Date $Attendance_date:</h2>";
        echo "<table border='1'>
        <table>
                <tr>
                    <th>Attendance Date</th>
                    <th>Employee ID</th>
                    <th>Attendance Status</th>
                    
                </tr>";
        foreach ($attendance_records as $record) {
            echo "<tr>";
            
            echo "<td>" . $record['Attendance_date'] . "</td>";
            echo "<td>" . $record['Emp_id'] . "</td>";
            echo "<td>" . $record['Attendance_status'] . "</td>";
        

            echo "</tr>";
        }
        echo "</table>";
    
    ?>
    <button class="bottom-button"><a href="view_attendance.php"
    class="text-light">Go back</a></button>
</body>
</html>
<style>
     table {
            border-collapse: collapse;
            width: 100%;
        }
         th,td {
            border: 1px solid #000000;
            text-align: left;
            padding: 8px;
            font-family: Georgia,serif;
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
        

