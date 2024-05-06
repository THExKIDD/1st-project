<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        
        }

        .restaurant-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
        }

        .restaurant-card {
            width: 300px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s;
        }

        .restaurant-card:hover {
            transform: scale(1.05);
        }

        .restaurant-image {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .restaurant-info {
            padding: 15px;
        }

        .restaurant-name {
            font-size: 18px;
            font-weight: bold;
            margin: 0;
        }

        .restaurant-description {
            font-size: 14px;
        }
    </style>
</head>
<body>
    <h1>Our Restaurants</h1>
    <div class="restaurant-list">
        <div class="restaurant-card">
            <a href="/Food Order/menu.php">
            <img class="restaurant-image" src="/Food Order/images/snackbar.jpeg" alt="Restaurant 1"></a>
            <div class="restaurant-info">
                <h2 class="restaurant-name">Snack Bar</h2>
                <p class="restaurant-description">working hours : 10am to 9pm</p>
            </div>
        </div>
        <div class="restaurant-card">
        <a href="/Food Order/menu.php">
            <img class="restaurant-image" src="/Food Order/images/backbenchers.jpg" alt="Restaurant 2"></a>
            <div class="restaurant-info">
                <h2 class="restaurant-name">Backbenchers</h2>
                <p class="restaurant-description">working hours : 10am to 9pm</p>
            </div>
        </div>
        <div class="restaurant-card">
        <a href="/Food Order/menu.php">
            <img class="restaurant-image" src="/Food Order/images/cafe real.jpg" alt="Restaurant 3"></a>
            <div class="restaurant-info">
                <h2 class="restaurant-name">Cafe Real</h2>
                <p class="restaurant-description">working hours : 10am to 9pm</p>
            </div>
        </div>
        <div class="restaurant-card">
        <a href="/Food Order/menu.php">
            <img class="restaurant-image" src="/Food Order/images/le cavalier.jpg" alt="Restaurant 4"></a>
            <div class="restaurant-info">
                <h2 class="restaurant-name">le Cavalier</h2>
                <p class="restaurant-description">working hours : 10am to 9pm</p>
            </div>
        </div>
    </div>
</body>
</html>
