<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .carousel-item img {
            height: 100%;
        }

        .carousel-indicators li {
            background-color: #000;
        }

        .carousel-control-prev-icon, .carousel-control-next-icon {
            background-color: rgba(0, 0, 0, 0.5); 
        }

        .form-group.text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container-fluid space">
        <?php
        $id = htmlspecialchars($_GET['id']);
        $Name = htmlspecialchars($_GET['Name']);
        $Size = htmlspecialchars($_GET['Size']);
        $Price = htmlspecialchars($_GET['Price']);
        $Detail = htmlspecialchars($_GET['Detail']);
        $Image_1 = htmlspecialchars($_GET['Image-1']);
        $Image_2 = htmlspecialchars($_GET['Image-2']);
        $Image_3 = htmlspecialchars($_GET['Image-3']);
        $Image_4 = htmlspecialchars($_GET['Image-4']);
        ?>
        <div class="row">
            <!-- Carousel Section -->
            <div id="demo" class="carousel slide col-md-8 col-12" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <?php if ($Image_1): ?><li data-target="#demo" data-slide-to="0" class="active"></li><?php endif; ?>
                    <?php if ($Image_2): ?><li data-target="#demo" data-slide-to="1"></li><?php endif; ?>
                    <?php if ($Image_3): ?><li data-target="#demo" data-slide-to="2"></li><?php endif; ?>
                    <?php if ($Image_4): ?><li data-target="#demo" data-slide-to="3"></li><?php endif; ?>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <?php if ($Image_1): ?><div class="carousel-item active"><img src="<?php echo $Image_1; ?>" class="d-block w-100" alt="Image 1"></div><?php endif; ?>
                    <?php if ($Image_2): ?><div class="carousel-item"><img src="<?php echo $Image_2; ?>" class="d-block w-100" alt="Image 2"></div><?php endif; ?>
                    <?php if ($Image_3): ?><div class="carousel-item"><img src="<?php echo $Image_3; ?>" class="d-block w-100" alt="Image 3"></div><?php endif; ?>
                    <?php if ($Image_4): ?><div class="carousel-item"><img src="<?php echo $Image_4; ?>" class="d-block w-100" alt="Image 4"></div><?php endif; ?>
                </div>

                <!-- Controls -->
                <a class="carousel-control-prev" href="#demo" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#demo" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <!-- Details Box Section -->
            <div class="col-md-4 col-12 mt-3 mt-md-0">
                <div class="article-details-box">
                    <h2 class="article-heading">Discover Your Perfect Match</h2>
                    <div class="article-content">
                        <p class="article-detail"><strong>Name:</strong> <?php echo $Name; ?></p>
                        <p class="article-detail"><strong>Price:</strong> <?php echo $Price; ?> (Delivery cost not Included)</p>
                        <p class="article-detail"><strong>Size:</strong> <?php echo $Size; ?></p>
                        <p class="article-detail"><strong>Material:</strong> <?php echo $Detail; ?></p>
                    </div>
                    <div class="cta-section">
                        <!-- Updated Button to Transfer All Information -->
                        <a href="detail2.php?id=<?php echo urlencode($id); ?>&Name=<?php echo urlencode($Name); ?>&Size=<?php echo urlencode($Size); ?>&Detail=<?php echo urlencode($Detail); ?>&Price=<?php echo urlencode($Price); ?>&Image-1=<?php echo urlencode($Image_1); ?>&Image-2=<?php echo urlencode($Image_2); ?>&Image-3=<?php echo urlencode($Image_3); ?>&Image-4=<?php echo urlencode($Image_4); ?>" class="cta-button btn btn-dark">Order up</a>
                        <p class="cta-info">Click "Order up" to get yours today!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <?php include 'Footer.php'; ?>
</body>
</html>
