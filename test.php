<?php include 'navbar.php'; ?>
<div class="row space">
    <a href="#men-glasses" class="btn btn-dark side col-2">Men-Glasses</a>
    <a href="#women-glasses" class="btn btn-dark side col-2">Women-Glasses</a>
    <a href="#kids-glasses" class="btn btn-dark side col-2">Kids-Glasses</a>
    <a href="#trendy-glasses" class="btn btn-dark side col-2">Trendy-Glasses</a>
</div>
<section class="container-fluid">
    <h3 id="men-glasses" class="text-center space type">Men-Glasses</h3>
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
                        <p class="article-detail"><strong>Price:</strong> <?php echo htmlspecialchars($row['Price']); ?></p>
                        <a href="detail1.php?id=<?php echo urlencode($row['id']); ?>&Name=<?php echo urlencode($row['Name']); ?>&Size=<?php echo urlencode($row['Size']); ?>&Detail=<?php echo urlencode($row['Detail']); ?>&Price=<?php echo urlencode($row['Price']); ?>&Image-1=<?php echo urlencode($row['Image-1']); ?>&Image-2=<?php echo urlencode($row['Image-2']); ?>&Image-3=<?php echo urlencode($row['Image-3']); ?>&Image-4=<?php echo urlencode($row['Image-4']); ?>" class="btn btn-dark">Details</a>
                        <button onclick="sendArticleDetails('<?php echo $row['id']; ?>', '<?php echo addslashes($row['Name']); ?>', '<?php echo $row['Price']; ?>', '<?php echo addslashes($row['Image-1']); ?>', '<?php echo addslashes($row['Image-2']); ?>', '<?php echo addslashes($row['Image-3']); ?>', '<?php echo addslashes($row['Image-4']); ?>')" class="btn btn-dark">
                            <i class="fas fa-paper-plane"></i> Add to Cart
                        </button>
                    </div>
                </div>
            <?php }
        } else {
            echo "Data not found";
        }
        ?>
    </div>

    <h3 id="women-glasses" class="text-center space type">Women-Glasses</h3>
    <div class="row justify-content-center center">
        <?php
        include "Connection.php";
        $sql = "SELECT * FROM `Women-glasses` LIMIT 10";
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="card col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                    <img class="card-img-top" src="<?php echo htmlspecialchars($row['Image-1']); ?>" alt="Card image">
                    <div class="card-body">
                        <p class="article-detail"><strong>Name:</strong> <?php echo htmlspecialchars($row['Name']); ?></p>
                        <p class="article-detail"><strong>Price:</strong> <?php echo htmlspecialchars($row['Price']); ?></p>
                        <a href="detail1.php?id=<?php echo urlencode($row['id']); ?>&Name=<?php echo urlencode($row['Name']); ?>&Size=<?php echo urlencode($row['Size']); ?>&Detail=<?php echo urlencode($row['Detail']); ?>&Price=<?php echo urlencode($row['Price']); ?>&Image-1=<?php echo urlencode($row['Image-1']); ?>&Image-2=<?php echo urlencode($row['Image-2']); ?>&Image-3=<?php echo urlencode($row['Image-3']); ?>&Image-4=<?php echo urlencode($row['Image-4']); ?>" class="btn btn-dark">Details</a>
                        <button onclick="sendArticleDetails('<?php echo $row['id']; ?>', '<?php echo addslashes($row['Name']); ?>', '<?php echo $row['Price']; ?>', '<?php echo addslashes($row['Image-1']); ?>', '<?php echo addslashes($row['Image-2']); ?>', '<?php echo addslashes($row['Image-3']); ?>', '<?php echo addslashes($row['Image-4']); ?>')" class="btn btn-dark">
                            <i class="fas fa-paper-plane"></i> Add to Cart
                        </button>
                    </div>
                </div>
            <?php }
        } else {
            echo "Data not found";
        }
        ?>
    </div>

    <h3 id="kid-glasses" class="text-center space type">Kid-Glasses</h3>
    <div class="row justify-content-center center">
        <?php
        include "Connection.php";
        $sql = "SELECT * FROM `kid-glasses` LIMIT 10";
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="card col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                    <img class="card-img-top" src="<?php echo htmlspecialchars($row['Image-1']); ?>" alt="Card image">
                    <div class="card-body">
                        <p class="article-detail"><strong>Name:</strong> <?php echo htmlspecialchars($row['Name']); ?></p>
                        <p class="article-detail"><strong>Price:</strong> <?php echo htmlspecialchars($row['Price']); ?></p>
                        <a href="detail1.php?id=<?php echo urlencode($row['id']); ?>&Name=<?php echo urlencode($row['Name']); ?>&Size=<?php echo urlencode($row['Size']); ?>&Detail=<?php echo urlencode($row['Detail']); ?>&Price=<?php echo urlencode($row['Price']); ?>&Image-1=<?php echo urlencode($row['Image-1']); ?>&Image-2=<?php echo urlencode($row['Image-2']); ?>&Image-3=<?php echo urlencode($row['Image-3']); ?>&Image-4=<?php echo urlencode($row['Image-4']); ?>" class="btn btn-dark">Details</a>
                        <button onclick="sendArticleDetails('<?php echo $row['id']; ?>', '<?php echo addslashes($row['Name']); ?>', '<?php echo $row['Price']; ?>', '<?php echo addslashes($row['Image-1']); ?>', '<?php echo addslashes($row['Image-2']); ?>', '<?php echo addslashes($row['Image-3']); ?>', '<?php echo addslashes($row['Image-4']); ?>')" class="btn btn-dark">
                            <i class="fas fa-paper-plane"></i> Add to Cart
                        </button>
                    </div>
                </div>
            <?php }
        } else {
            echo "Data not found";
        }
        ?>
    </div>

    <h3 id="trendy-glasses" class="text-center space type">Trendy-Glasses</h3>
    <div class="row justify-content-center center">
        <?php
        include "Connection.php";
        $sql = "SELECT * FROM `trendy-glasses` LIMIT 10";
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="card col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                    <img class="card-img-top" src="<?php echo htmlspecialchars($row['Image-1']); ?>" alt="Card image">
                    <div class="card-body">
                        <p class="article-detail"><strong>Name:</strong> <?php echo htmlspecialchars($row['Name']); ?></p>
                        <p class="article-detail"><strong>Price:</strong> <?php echo htmlspecialchars($row['Price']); ?></p>
                        <a href="detail1.php?id=<?php echo urlencode($row['id']); 
                        ?>&Name=<?php echo urlencode($row['Name']);
                         ?>&Size=<?php echo urlencode($row['Size']); 
                         ?>&Detail=<?php echo urlencode($row['Detail']);
                          ?>&Price=<?php echo urlencode($row['Price']); 
                          ?>&Image-1=<?php echo urlencode($row['Image-1']);
                           ?>&Image-2=<?php echo urlencode($row['Image-2']); 
                           ?>&Image-3=<?php echo urlencode($row['Image-3']);
                            ?>&Image-4=<?php echo urlencode($row['Image-4']); 
                            ?>" class="btn btn-dark">Details</a>
                        <button onclick="sendArticleDetails('<?php echo urlencode($row['id']); ?>',
                         '<?php echo addslashes($row['Name']); ?>', '<?php echo $row['Price']; ?>', 
                         '<?php echo addslashes($row['Image-1']); ?>', 
                         '<?php echo addslashes($row['Image-2']); ?>', 
                         '<?php echo addslashes($row['Image-3']); ?>', 
                         '<?php echo addslashes($row['Image-4']); ?>')" class="btn btn-dark">
                            <i class="fas fa-paper-plane"></i> Add to Cart
                        </button>
                    </div>
                </div>
            <?php }
        } else {
            echo "Data not found";
        }
        ?>
    </div>
</section>

<script>
function sendArticleDetails(id, name, price, image1, image2, image3, image4) {
    // Constructing the form data to send
    const formData = new FormData();
    formData.append('articleId', id);
    formData.append('articleName', name);
    formData.append('articlePrice', price);
    formData.append('articleImage1', image1);
    formData.append('articleImage2', image2);
    formData.append('articleImage3', image3);
    formData.append('articleImage4', image4);

    fetch('cart.php', {
        method: 'POST',
        body: formData,
    })
    .then(response => response.json())
    .then(data => {
        // Handle response and show a notification
        if (data.success) {
            alert('Article added to cart successfully!');
        } else {
            alert('Failed to add article to cart: ' + data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}
</script>
