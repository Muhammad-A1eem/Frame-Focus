<?php include 'navbar.php' ?>
<div class="row space">
<a href="#men-glasses" class="btn btn-dark side col-2">Men-Sun-glasses</a>
<a href="#women-glasses" class="btn btn-dark side col-2">Women-Sun-glasses</a>
<a href="#kids-glasses" class="btn btn-dark side col-2">Kids-Sun-glasses</a>
<a href="#trendy-glasses" class="btn btn-dark side col-2">Trendy-Sun-glasses</a>
</div>
<section class="container-fluid">
  <h3 id="men-sunglasses" class="text-center  space type">Men-Sunglasses</h3>
  <div class="row justify-content-center center">
  <?php
        include "Connection.php";
        $sql = "SELECT * FROM `men-sunglasses` LIMIT 10";
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="card col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                    <img class="card-img-top" src="<?php echo $row['Image-1']; ?>" alt="Card image">
                    <div class="card-body">
                        <p class="article-detail"><strong>Name:</strong> <?php echo $row['Name']; ?></p>
                        <p class="article-detail"><strong>Price:</strong> <?php echo $row['Price']; ?></p>
                        <a href="detail1.php?id=<?php echo $row['id']; ?>&Name=<?php echo $row['Name']; ?>&Size=<?php echo $row['Size']; ?>
                        &Detail=<?php echo $row['Detail']; ?>&Price=<?php echo $row['Price']; ?>&Image-1=<?php echo $row['Image-1']; ?>&Image-2=<?php echo $row['Image-2']; ?>&Image-3=<?php echo $row['Image-3']; ?>&Image-4=<?php echo $row['Image-4']; ?>" class="btn btn-dark">Details</a>
                        <button onclick="sendArticleDetails('<?php echo $row['id']; ?>',
                         '<?php echo $row['Name']; ?>', '<?php echo $row['Price']; ?>', '<?php echo $row['Image-1']; ?>')" class="btn btn-dark">
                            <i class="fas fa-paper-plane"></i> Add to Cart
                        </button>
                    </div>
                </div>
            <?php }
        } else {
            echo "data not found";
        }
        ?>
  </div>

  <h3 id="women-sunglasses" class="text-center space type">Women-Sunglasses</h3>
  <div class="row justify-content-center center">
  <?php
        include "Connection.php";
        $sql = "SELECT * FROM `women-sunglasses` LIMIT 10";
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="card col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                    <img class="card-img-top" src="<?php echo $row['Image-1']; ?>" alt="Card image">
                    <div class="card-body">
                        <p class="article-detail"><strong>Name:</strong> <?php echo $row['Name']; ?></p>
                        <p class="article-detail"><strong>Price:</strong> <?php echo $row['Price']; ?></p>
                        <a href="detail1.php?id=<?php echo $row['id']; ?>&Name=<?php echo $row['Name']; ?>&Size=<?php echo $row['Size']; ?>
                        &Detail=<?php echo $row['Detail']; ?>&Price=<?php echo $row['Price']; ?>&Image-1=<?php echo $row['Image-1']; ?>&Image-2=<?php echo $row['Image-2']; ?>&Image-3=<?php echo $row['Image-3']; ?>&Image-4=<?php echo $row['Image-4']; ?>" class="btn btn-dark">Details</a>
                        <button onclick="sendArticleDetails('<?php echo $row['id']; ?>',
                         '<?php echo $row['Name']; ?>', '<?php echo $row['Price']; ?>', '<?php echo $row['Image-1']; ?>')" class="btn btn-dark">
                            <i class="fas fa-paper-plane"></i> Add to Cart
                        </button>
                    </div>
                </div>
            <?php }
        } else {
            echo "data not found";
        }
        ?>
  </div>

  <h3 id="kid-sunglasses" class="text-center type space"> Kids-Sunglasses</h3>
  <div class="row justify-content-center center">
        <?php
        include "Connection.php";
        $sql = "SELECT * FROM `kid-sunglasses` LIMIT 10";
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="card col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                    <img class="card-img-top" src="<?php echo $row['Image-1']; ?>" alt="Card image">
                    <div class="card-body">
                        <p class="article-detail"><strong>Name:</strong> <?php echo $row['Name']; ?></p>
                        <p class="article-detail"><strong>Price:</strong> <?php echo $row['Price']; ?></p>
                        <a href="detail1.php?id=<?php echo $row['id']; ?>&Name=<?php echo $row['Name']; ?>&Size=<?php echo $row['Size']; ?>
                        &Detail=<?php echo $row['Detail']; ?>&Price=<?php echo $row['Price'];
                         ?>&Image-1=<?php echo $row['Image-1']; ?>&Image-2=<?php echo $row['Image-2']; 
                         ?>&Image-3=<?php echo $row['Image-3']; ?>&Image-4=<?php echo $row['Image-4']; ?>"
                          class="btn btn-dark">Details</a>
                        <button onclick="sendArticleDetails('<?php echo $row['id']; ?>',
                         '<?php echo $row['Name']; ?>', '<?php echo $row['Price']; ?>', '<?php echo $row['Image-1']; ?>')" class="btn btn-dark">
                            <i class="fas fa-paper-plane"></i> Add to Cart
                        </button>
                    </div>
                </div>
            <?php }
        } else {
            echo "data not found";
        }
        ?>
    </div>
  

  <h3 id="trendy-glasses" class="text-center type space"> Trendy-Sunglasses</h3>
  <div class="row justify-content-center center">
    <?php for ($a = 0; $a < 10; $a++) { ?>
      <div class="card col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
        <img class="card-img-top" src="img.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Metal Frame</h4>
          <a href="detail1.php" class="btn btn-dark">Details</a>
        </div>
      </div>
    <?php } ?>
  </div>
 
</section>

<?php include 'Footer.php' ?>
