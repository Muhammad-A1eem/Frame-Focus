<?php include'navbar.php'?>
      <div class="container">
        <div class="row">
          <div class="col-md-4 offset-md-4">
            <div class="login-box">
              <h2>Login</h2>
              <form action="backend.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="form-group center">
                    <button class="btn " type="submit">Login</button>
                </div>
                <div class="form-group center">
                    <p> Donot have an Account. <a href="signup.php" class="login-signup">Sign up</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php include'Footer.php'?>
      
