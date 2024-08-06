<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .carousel-item img {
            height: 400px;
            object-fit: cover;
        }

        .carousel-indicators li {
            background-color: #000;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgba(0, 0, 0, 0.5);
        }

        .form-group.text-center {
            text-align: center;
        }

        .order-info-box {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .order-info-heading {
            font-size: 1.5em;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }

        .order-info-form-group {
            margin-bottom: 15px;
        }

        .order-info-label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .order-info-input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .order-info-button-group {
            text-align: center;
            margin-top: 20px;
        }

        .cta-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .cta-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<?php
// Retrieve product details from the URL
$id = isset($_GET['id']) ? htmlspecialchars($_GET['id']) : '';
$name = isset($_GET['Name']) ? htmlspecialchars($_GET['Name']) : '';
$price = isset($_GET['Price']) ? htmlspecialchars($_GET['Price']) : '';
$size = isset($_GET['Size']) ? htmlspecialchars($_GET['Size']) : '';
$detail = isset($_GET['Detail']) ? htmlspecialchars($_GET['Detail']) : '';
$image1 = isset($_GET['Image-1']) ? htmlspecialchars($_GET['Image-1']) : 'default.jpg';
$image2 = isset($_GET['Image-2']) ? htmlspecialchars($_GET['Image-2']) : 'default.jpg';
$image3 = isset($_GET['Image-3']) ? htmlspecialchars($_GET['Image-3']) : 'default.jpg';
$image4 = isset($_GET['Image-4']) ? htmlspecialchars($_GET['Image-4']) : 'default.jpg';
?>

<div class="container-fluid space">
    <div class="row">
        <!-- Carousel Section -->
        <div id="carouselExampleControls" class="carousel slide col-md-8 col-12" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleControls" data-slide-to="1"></li>
                <li data-target="#carouselExampleControls" data-slide-to="2"></li>
                <li data-target="#carouselExampleControls" data-slide-to="3"></li>
            </ol>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo $image1; ?>" class="d-block w-100" alt="Image 1">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo $image2; ?>" class="d-block w-100" alt="Image 2">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo $image3; ?>" class="d-block w-100" alt="Image 3">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo $image4; ?>" class="d-block w-100" alt="Image 4">
                </div>
            </div>

            <!-- Controls -->
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- Order Information Section -->
        <div class="col-md-4 col-12 mt-3 mt-md-0">
            <div class="order-info-box">
                <h2 class="order-info-heading">Customer Information</h2>
                <form class="order-info-form" action="order_receive.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="hidden" name="name" value="<?php echo $name; ?>">
                    <input type="hidden" name="price" value="<?php echo $price; ?>">
                    <input type="hidden" name="size" value="<?php echo $size; ?>">
                    <input type="hidden" name="detail" value="<?php echo $detail; ?>">
                    <input type="hidden" name="image1" value="<?php echo $image1; ?>">
                    <input type="hidden" name="image2" value="<?php echo $image2; ?>">
                    <input type="hidden" name="image3" value="<?php echo $image3; ?>">
                    <input type="hidden" name="image4" value="<?php echo $image4; ?>">

                    <div class="order-info-form-group">
                        <label for="customer_name" class="order-info-label">Your Name</label>
                        <input type="text" id="customer_name" name="customer_name" class="order-info-input" placeholder="Enter your name" required>
                    </div>
                    <div class="order-info-form-group">
                        <label for="customer_address" class="order-info-label">Address</label>
                        <input type="text" id="customer_address" name="customer_address" class="order-info-input" placeholder="Enter your address" required>
                    </div>
                    <div class="order-info-form-group">
                        <label for="customer_phone" class="order-info-label">Phone Number</label>
                        <input type="tel" id="customer_phone" name="customer_phone" class="order-info-input" placeholder="Enter your phone number" required>
                    </div>
                    <div class="order-info-button-group">
                        <button type="submit" class="cta-button">Place Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php include 'footer.php'; ?>
</body>
</html>
