<?php include'navbar.php'?>
      <div class="container">
        <div class="row">
          <div class="col-md-4 offset-md-4">
            <div class="login-box">
              <h2> Sign Up </h2>
              <form action="backend.php" method="post" enctype="multipart/form-data" > 
                <div class="form-group">
                  <input type="email" class="form-control" name="Name" placeholder="Name">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="Email" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="Password" class="form-control" name="Password" placeholder="Password">
                </div>
                <div class="form-group">
                  <input type="Password" class="form-control" name="confim-Password" placeholder="Confirm Password">
                </div>
                <div class="form-group center">
                    <button class="btn " type="submit"> Sign Up </button>
                </div>
                <div class="form-group center">
                    <p> Already Have an Account. <a href="login.php" class="login-signup"> Login </a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php include'Footer.php'?>
      
