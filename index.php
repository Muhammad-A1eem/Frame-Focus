<?php include 'navbar.php' ?>
<div id="demo" class="carousel slide row" data-ride="carousel">
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner ">
    <div class="carousel-item active">
      <img src="Flex.png" class="d-block w-100 h-100" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="Flex.png" class="d-block w-100 h-100" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="Flex.png" class="d-block w-100 h-100" alt="New York">
    </div>
  </div>
</div>

<section id="men-glasses">
        <h3 class="text-center space type">Glasses</h3>
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
  <div class="row justify-content-center">
  <a href="Glasses.php" class="btn btn-dark"> Explore More</a>
  </div>
  <section id="men-glasses">
        <h3 class="text-center space type">Glasses</h3>
        <div class="row justify-content-center center">
        <?php
        include "Connection.php";
        $sql = "SELECT * FROM `men-sunglasses` LIMIT 10";
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
  
  <div class="row justify-content-center">
  <a href="Sun-Glasses.php" class="btn btn-dark"> Explore More</a>
  </div>

  <h3 class="text-center type space">Reading-Glasses</h3>
  <div class="row justify-content-center center">
    <?php for ($a = 0; $a < 4; $a++) { ?>
      <div class="card col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
        <img class="card-img-top" src="img.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Metal Frame</h4>
          <a href="detail1.php" class="btn btn-dark">Details</a>
        </div>
      </div>
    <?php } ?>
  </div>
  <div class="row justify-content-center">
  <a href="Glasses.php" class="btn btn-dark"> Explore More</a>
  </div>

  <h3 class="text-center type space">Contact Lenses</h3>
  <div class="row justify-content-center center">
    <?php for ($a = 0; $a < 4; $a++) { ?>
      <div class="card col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
        <img class="card-img-top" src="img.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Metal Frame</h4>
          <a href="detail1.php" class="btn btn-dark">Details</a>
        </div>
      </div>
    <?php } ?>
  </div>
  <div class="row justify-content-center">
  <h3 class="text-center btn space more"> Explore More</h3>
  </div>

  <h3 class="text-center type space"> Optical Lenses </h3>
  <div class="row justify-content-center center">
    <?php for ($a = 0; $a < 4; $a++) { ?>
      <div class="card col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
        <img class="card-img-top" src="img.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Metal Frame</h4> 
          <a href="detail1.php" class="btn btn-dark">Details</a>
        </div>
      </div>
    <?php } ?>
  </div>
  <div class="row justify-content-center">
  <h3 class="text-center btn space more"> Explore More</h3>
  </div>
</section>

<?php include 'Footer.php' ?>
