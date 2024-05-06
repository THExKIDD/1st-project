<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Login </title>
    <link rel="stylesheet" href="css/style3.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Login</div>
    <div class="content">
      <form action="Login.php" method="post" name="f1">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" placeholder="Enter your email" name="email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" name="phno" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" name="pass" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Login" name="btn" >
        </div>
      </form>
    </div>
  </div>

</body>
</html>


<?php
session_start();
if(isset($_POST['btn'])){
    
    $email=$_POST['email'];
    $phno=$_POST['phno'];
    $pass=$_POST['pass'];

$conn = mysqli_connect('localhost', 'root', '', 'food','3308');

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// The SQL query to fetch a particular field (change 'your_table_name' and 'your_field_name' to your table and field names)
$sql = "SELECT Email FROM register WHERE Email='$email'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Fetch the data and store it in a variable
    $row = mysqli_fetch_assoc($result);
    $fieldValue = $row['Email'];

    // Output or use the $fieldValue as needed
    $opt1=1;
    echo "";
} else {
    echo "No records found.";
}





if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// The SQL query to fetch a particular field (change 'your_table_name' and 'your_field_name' to your table and field names)
$sql1 = "SELECT Password FROM register WHERE Email='$email'";

$result = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result) > 0) {
    // Fetch the data and store it in a variable
    $row = mysqli_fetch_assoc($result);
    $fieldValue1 = $row['Password'];

    // Output or use the $fieldValue as needed
    $opt2=1;
    echo "";
} else {
    echo "No records found.";
}


$conn = mysqli_connect('localhost', 'root', '', 'food','3308');

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// The SQL query to fetch a particular field (change 'your_table_name' and 'your_field_name' to your table and field names)
$sql = "SELECT Address FROM register WHERE Email='$email'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Fetch the data and store it in a variable
    $row = mysqli_fetch_assoc($result);
    $fieldValue2 = $row['Address'];

    // Output or use the $fieldValue as needed
    $opt3=1;
    echo "";
} else {
    echo "No records found.";
}





if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// The SQL query to fetch a particular field (change 'your_table_name' and 'your_field_name' to your table and field names)
$sql1 = "SELECT Phone FROM register WHERE Email='$email'";

$result = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result) > 0) {
    // Fetch the data and store it in a variable
    $row = mysqli_fetch_assoc($result);
    $fieldValue3 = $row['Phone'];

    // Output or use the $fieldValue as needed
    $opt4=1;
    echo "";
} else {
    echo "No records found.";
}


// Close the database connection
mysqli_close($conn);

?>


       
<?php
$_SESSION["gemail"]="$fieldValue";
$_SESSION["gpass"]="$fieldValue1";
$_SESSION["gaddress"]="$fieldValue2";
$_SESSION["gphone"]="$fieldValue3";


if ($opt1==1 and $opt2==1 and $opt3==1 and $opt4==1){
    ?>
    <script type="text/javascript">
window.location.href = "/Food Order/index1.php";
</script>
<?php
}
 }
?>

