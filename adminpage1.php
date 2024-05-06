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
            <form class="form" method="POST" action="adminpage1.php">
                <label for="product_name"> Order Number </label>
                <input type="number" id="product_name" name="ORDER NUMBER" required>

                <label for="price"> Total Amount </label>
                <input type="number" id="price" name="total amount" required>

                <label for="pizza">Pizza Qty</label>
                <input type="number" name="pizza qty" id="pizza">
                <label for="burger">Burger Qty</label>
                <input type="number" name="burger qty" id="burger">
                <label for="momos">Momos Qty</label>
                <input type="number" name="momos qty" id="momos">
                <label for="noodles">Noodles Qty</label>
                <input type="number" name="noodles qty" id="noodles">

                <button type="submit" name="insert">Insert</button>
                <button type="submit" name="update">Update</button>
                <button type="submit" name="delete">Delete</button>
                <button type="submit" name="show">Show Orders</button>
            </form>
        </div>
    </div>
</body>
</html>


<?php

if(isset($_POST['show']))
{

$conn = mysqli_connect("localhost", "root", "", "food",3308);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve data from the database
$sql = "SELECT * FROM orders";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Error: " . mysqli_error($conn));
}

// Display the data in an HTML table
echo '<table border="1">';
echo '<tr><th>ORDER NUMBER</th><th>Noodles QTY</th><th>Pizza QTY</th><th>Burger QTY</th><th>Momos QTY</th><th>TOTAL AMOUNT</th></tr>';

while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' . $row['ORDER NUMBER'] . '</td>';
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


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['insert'])) {
    // Insert a new product
    $Orderno = $_POST['ORDER NUMBER'];
    $pizza = $_POST['pizza qty'];
    $burger = $_POST['burger qty'];
    $momos = $_POST['momos qty'];
    $noodles = $_POST['noodles qty'];
    $price = $_POST['total amount'];

    $sql = "INSERT INTO orders VALUES ('$Orderno', $pizza, '$burger','$momos','$noodles','$price')";

    if (mysqli_query($conn, $sql)) {
        echo "order inserted successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} elseif (isset($_POST['update'])) {
    // Update an existing product
    $Orderno = $_POST['ORDER NUMBER'];
    $pizza = $_POST['pizza qty'];
    $burger = $_POST['burger qty'];
    $momos = $_POST['momos qty'];
    $noodles = $_POST['noodles qty'];
    $price = $_POST['total amount'];
    

    $sql = "UPDATE orders SET total amount = $price, pizza qty = '$' WHERE ORDER NUMBER = '$Orderno'";

    if (mysqli_query($conn, $sql)) {
        echo "Product updated successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} elseif (isset($_POST['delete'])) {
    // Delete a product
    $Orderno = $_POST['ORDER NUMBER'];

    $sql = "DELETE FROM orders WHERE ORDER NUMBER = '$Orderno'";

    if (mysqli_query($conn, $sql)) {
        echo "Product deleted successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
