<?php
session_start();
if(isset($_POST['btn']))
{ 
    $name=$_POST['name'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $phno=$_POST['phno'];
    $pass=$_POST['pass'];

    $con=mysqli_connect("localhost","root","","food","3308");

    if($con==true){
        $cmd1= "INSERT INTO register VALUES ('','$name','$address','$email','$phno','$pass')"; 

        if($con->query($cmd1)==true)
        {
            echo" Thank you for Registering";
        }
        else{
            echo"error";
        }
       }
       
       
?>
 <script type="text/javascript">
window.location.href = "/Food Order/login.php";
</script>
<?php
 }
?>








<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Registration Form </title>
    <link rel="stylesheet" href="css/style3.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="Register.php" method="post" name="f1">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name"  name="name"      required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" placeholder="Enter the delivery address" name="address" required>
          </div>
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
          <input type="submit" value="Register" name="btn" >
        </div>
      </form>
    </div>
  </div>

</body>
</html>

