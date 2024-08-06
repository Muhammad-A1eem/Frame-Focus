<?php include 'navbar.php'; ?>

<style>
    .carousel-item img {
        height: 100%;
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

    .space {
        margin-top: 20px;
    }

    .img-thumbnail {
        max-width: 100px;
        height: auto;
    }

    .type {
        margin-left: 0;
        margin-right: 0;
        padding-left: 0;
        padding-right: 0;
    }
</style>

<div class="container-fluid space">
    <div class="row space">
        <a href="#men-glasses" class="btn btn-dark side col-2">Men-Glasses</a>
        <a href="#women-glasses" class="btn btn-dark side col-2">Women-Glasses</a>
        <a href="#kids-glasses" class="btn btn-dark side col-2">Kids-Glasses</a>
        <a href="#trendy-glasses" class="btn btn-dark side col-2">Trendy-Glasses</a>
    </div>

    <!-- Men Glasses Section -->
    <section id="men-glasses" class="container-fluid">
        <h3 class="text-center space type">Men-Glasses</h3>
        <div class="row justify-content-center center">
        <?php
        include "Connection.php";
        $sql = "SELECT * FROM `men-glasses` LIMIT 10";
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="card col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                    <img class="card-img-top" src="<?php echo htmlspecialchars($row['Image-1']); ?>" alt="Card image">
                    <div class="card-body">
                        <p class="article-detail"><strong>Name:</strong> <?php echo htmlspecialchars($row['Name']); ?></p>
                        <p class="article-detail"><strong>Price:</strong> PKR <?php echo htmlspecialchars($row['Price']); ?></p>
                        <a href="detail1.php?id=<?php echo urlencode($row['id']); ?>&Name=<?php echo urlencode($row['Name']); ?>&Size=<?php echo urlencode($row['Size']); ?>&Detail=<?php echo urlencode($row['Detail']); ?>&Price=<?php echo urlencode($row['Price']); ?>&Image-1=<?php echo urlencode($row['Image-1']); ?>&Image-2=<?php echo urlencode($row['Image-2']); ?>&Image-3=<?php echo urlencode($row['Image-3']); ?>&Image-4=<?php echo urlencode($row['Image-4']); ?>" class="btn btn-dark">Details</a>
                        <form method="post" action="add_to_cart.php" style="display:inline;">
                            <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>">
                            <input type="hidden" name="name" value="<?php echo htmlspecialchars($row['Name']); ?>">
                            <input type="hidden" name="price" value="<?php echo htmlspecialchars($row['Price']); ?>">
                            <input type="hidden" name="image" value="<?php echo htmlspecialchars($row['Image-1']); ?>">
                            <!-- Remove quantity input as it's not needed -->
                            <button type="submit" class="btn btn-dark">
                                <i class="fas fa-paper-plane"></i> Add to Cart
                            </button>
                        </form>
                    </div>
                </div>
            <?php }
        } else {
            echo "Data not found";
        }
        ?>
    </div>
    </section> 

    <!-- Repeat for other sections if needed -->
</div>
