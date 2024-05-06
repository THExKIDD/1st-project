<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        
        .menu {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        
        .menu-item {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            transition: transform 0.2s;
            cursor: pointer;
        }

        .menu-item:hover {
            transform: scale(1.05);
        }

        .menu-item img {
            max-width: 100%;
        }
        
        .menu-item-description {
            display: none;
        }

        .menu-item:hover .menu-item-description {
            display: block;
        }
    </style>
</head>
<body>
    <h1>Restaurant Menu</h1>
    <form action="menu.php" method="POST" name="f2">
    <div class="menu">
        <div class="menu-item">
            <img src="/food order/images/Pizza.jpg" alt="Dish 1">
            <h2>Pizza</h2>
            <p class="menu-item-description">Rs 150 (regular size)</p>
            <label for="pizza">Quantity</label>
            <input type="number" name="pizza" id="pizza" value=0>
        </div>
        <div class="menu-item">
            <img src="/food order/images/burger.jpg" alt="Dish 2">
            <h2>Burger</h2>
            <p class="menu-item-description"> Rs 40 per pc</p>
            <label for="burger">Quantity</label>
            <input type="number" name="burger" id="burger" value=0>
        </div>
        <div class="menu-item">
            <img src="/Food Order/images/momos.jpeg" alt="Dish 3">
            <h2>Momos</h2>
            <p class="menu-item-description"> Rs 60 per plate</p>
            <label for="momos">Quantity</label>
            <input type="number" name="momos" id="momos" value=0>
        </div>
        <div class="menu-item">
            <img src="/Food Order/images/noodles.jpg" alt="Dish 4">
            <h2>Noodles</h2>
            <p class="menu-item-description"> Rs 150 per plate</p>
            <label for="noodles">Quantity</label>
            <input type="number" name="noodles" id="noodles" value=0>
        </div>
        <input type="submit" name="btn1" value="ADD TO CART and GET TOTAL">
    </div>
    </form>

</body>
</html>


<?php
session_start();
if(isset($_POST['btn1']))
{
    $pizza=$_POST['pizza'];
    $pizzacost=$pizza*150;
    $burger=$_POST['burger'];
    $burgercost=$burger*40;
    $momos=$_POST['momos'];
    $momoscost=$momos*60;
    $noodles=$_POST['noodles'];
    $noodlescost=$noodles*150;
    $total=$pizzacost+$burgercost+$momoscost+$noodlescost;

    $con = mysqli_connect("localhost","root","","food",3308);

    if($con==true){
        $cmd1= "INSERT INTO orders VALUES ('','{$_SESSION['gaddress']}','{$_SESSION['gphone']}','$pizza','$burger','$momos','$noodles','$total')"; 

        if($con->query($cmd1)==true)
        {
            echo "<b> Thank you for Ordering please hand Rs".$total." to the delivery guy </b>";
        }
        else{
            echo"error";
        }
       }


}
?>