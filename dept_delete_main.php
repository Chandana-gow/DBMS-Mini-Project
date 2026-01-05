<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Delete Department</title>
</head>
<body>
<div class="container">
    <h2>Delete Department</h2>
    <form action="delete_dept.php" method="post">
        <label for="Dept_id">Department ID:</label>
        <input type="text" id="Dept_id" name="Dept_id" required>
        <button type="submit">Delete</button>
    </form>
</div>
</body>
<style>
    body {
    font-family: Arial, sans-serif;
}

.container {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

label {
    display: block;
    margin-bottom: 10px;
}

input[type="text"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

    </style>
</html>