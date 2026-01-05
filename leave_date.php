<?php
include 'db_connection.php';


$Leave_date = '';
$leave_records = array();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (!empty($_POST['Leave_date'])) {
        $Leave_date = $_POST['Leave_date'];

        
        $sql = "SELECT * FROM leave_record WHERE Leave_date = '$Leave_date'";
        $result = $conn->query($sql);

    
        if ($result->num_rows > 0) {
            
            while ($row = $result->fetch_assoc()) {
                $leave_records[] = $row;
            }
        }
    } else {
        echo "Leave Date is required.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Leave Lookup</title>
</head>
<body>
    <h2>Leave Lookup</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="Leave_date">Leave_date:</label>
        <input type="text" name="Leave_date" required>
        <br><br>
        <input type="submit" value="Lookup Leave">
    </form>

    <?php
    
    
        echo "<h2>Leave details for Leave Date $Leave_date:</h2>";
        echo "<table border='1'>
        <table>
                <tr>
                    <th>Leave Date</th>
                    <th>Employee ID</th>
                
                    
                </tr>";
        foreach ($leave_records as $record) {
            echo "<tr>";
            
            echo "<td>" . $record['Leave_date'] . "</td>";
            echo "<td>" . $record['Emp_id'] . "</td>";
        

            echo "</tr>";
        }
        echo "</table>";
    
    ?>
    <button class="bottom-button"><a href="view_leaves.php"
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
        

