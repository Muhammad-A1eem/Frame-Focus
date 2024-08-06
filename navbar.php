<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Frame&Focus </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body class="container-fluid">
<?php

?>

    <nav class=" row navbar navbar-expand-md navbar-light bg-light">
        <a class="navbar-brand" href="index.php">FRAME & FOCUS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon">☰</span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="Glasses.php">Glasses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Sun-Glasses.php">Sun-Glasses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Comming soon.php">Accessories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Comming soon.php">Contact Lens</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Comming soon.php">Reviews</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Comming soon.php">Blogs</a>
                </li>
                <li class=" nav-item  cart-icon" onclick="viewCart()">
        <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart cartt "></i> </a>
        <span id="cart-count"><?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?></span>
</li>

            </ul>
            <div class="login-btn-wrapper ml-auto">
                    <a class="btn btn-outline-primary my-2 my-sm-0 login-btn" href="login.php" type="button">Login</a>
            </div>
        </div>
    </nav>
    <div class="light-effect"></div>
    <a href="#" class="btn btn-dark i1">
        <i class="fa fa-arrow-up"></i>
    </a>

   



