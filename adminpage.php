<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-box {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 400px;
        }

        .form-box h2 {
            text-align: center;
            color: #333;
        }

        .form {
            margin-top: 20px;
        }

        .form label {
            display: block;
            font-weight: bold;
        }

        .form input[type="text"],
        .form input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        .form button:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h2>Order Management</h2>
            <form class="form" method="POST" action="adminpage.php">
                <button type="submit" name="show">Show Orders</button>
                <button type="submit" name="show1">Show IDs</button>
                <label for="n1">Order Done</label>
                <input type="text" id="n1" name="del">
                <button type="submit" name="delete">Delete</button>
            </form>
        </div>
    </div>
</body>
</html>


<?php
session_start();

if(isset($_POST['show']))
{

$conn = mysqli_connect("localhost", "root", "", "food",3308);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM orders";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Error: " . mysqli_error($conn));
}


echo '<table border="1">';
echo '<tr><th>SNO</th><th>Address</th><th>Phone no</th><th>Pizza QTY</th><th>Burger QTY</th><th>Momos QTY<th>Noodles QTY</th></th><th>TOTAL AMOUNT</th></tr>';

while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' . $row['SNO'] . '</td>';
    echo '<td>' . $row['Address'] . '</td>';
    echo '<td>' . $row['Phone no'] . '</td>';
    echo '<td>' . $row['pizza qty'] . '</td>';
    echo '<td>' . $row['burger qty'] . '</td>';
    echo '<td>' . $row['momos qty'] . '</td>';
    echo '<td>' . $row['noodles qty'] . '</td>';
    echo '<td>' . $row['total amount'] . '</td>';
    echo '</tr>';
}

echo '</table>';

mysqli_close($conn);
}


elseif(isset($_POST['show1']))
{

$conn = mysqli_connect("localhost", "root", "", "food",3308);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM register";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Error: " . mysqli_error($conn));
}


echo '<table border="1">';
echo '<tr><th>SNO</th><th>Full Name</th><th>Address</th><th>Email</th><th>Phone Number</th></tr>';

while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' . $row['SNO'] . '</td>';
    echo '<td>' . $row['Full Name'] . '</td>';
    echo '<td>' . $row['Address'] . '</td>';
    echo '<td>' . $row['Email'] . '</td>';
    echo '<td>' . $row['Phone'] . '</td>';
    echo '</tr>';
}

echo '</table>';
mysqli_close($conn);
}

elseif(isset($_POST['delete'])){
    $del=$_POST['del'];

$conn = mysqli_connect("localhost", "root", "", "food",3308);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// The SQL query to delete a row from the table (change 'your_table_name' and 'your_condition' to your table and deletion condition)
$sql = "DELETE FROM orders WHERE SNO='$del'";

if (mysqli_query($conn, $sql)) {
    echo "Row deleted successfully.";
} else {
    echo "Error deleting row: " . mysqli_error($conn);
}


mysqli_close($conn);
}

?>