<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <main class="main-container">
        <div class="main-title">
            <p class="font-weight-bold">LEAVE RECORD</p>
        </div>
        <div class="main-cards">
            <a href="add_leave.php" class="card">ADD RECORD</a>
            <a href="view_leaves.php" class="card">VIEW RECORDS</a>
            
        </div>
        <button class="bottom-button"><a href="dashboard.php"
    class="text-light">Go back</a></button>

    </main>
</body>
</html>
<style>
.main-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height:100vh;
}

.main-title {
    margin-bottom: 0px;
}

.main-cards {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.card {
    display: block;
    width: 300px;
    height: 150px;
    background-color: #f0f0f0;
    margin-bottom: 10px;
    text-align: center;
    justify-content: center;
    line-height: 45px;
    text-decoration: none;
    color: black;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.card:hover {
    background-color: #e0e0e0;
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
 