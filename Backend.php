
<div id="men-glasses">
            <?php
    include 'Connection.php';
    if(isset($_POST['M-G-N']) && $_POST['M-G-N'] != ""){
    $Name = $_POST['M-G-N'];
    $Size = $_POST['M-G-S'];
    $Detail = $_POST['M-G-D'];
    $Price = $_POST['M-G-P'];
    $target_file1 = "pictures/" . basename($_FILES["image-1"]["name"]);
      move_uploaded_file($_FILES["image-1"]["tmp_name"],$target_file1);
      $target_file2 = "pictures/" . basename($_FILES["image-2"]["name"]);
      move_uploaded_file($_FILES["image-2"]["tmp_name"],$target_file2);
      $target_file3 = "pictures/" . basename($_FILES["image-3"]["name"]);
      move_uploaded_file($_FILES["image-3"]["tmp_name"],$target_file3);  
      $target_file4 = "pictures/" . basename($_FILES["image-4"]["name"]);
      move_uploaded_file($_FILES["image-4"]["tmp_name"],$target_file3);  

    $sql="INSERT INTO `men-glasses`( `Image-1`, `Image-2`, `Image-3`, `Image-4`, `Name`, `Size`, `Detail`, `Price`)
    VALUES ('$target_file1','$target_file2','$target_file3','$target_file4','$Name','$Size','$Detail','$Price')";
 
    $result = mysqli_query($connection,$sql);
   
    if($result > 0){
        echo'Data Inserted';
        header('Location:Glasses.php#men-glasses');
      }
     else{
        echo'Data Not Inserted';}  
    } 
    ?>
</div>

------------------------------------------------
<div id="men-sunglasses">
            <?php
    include 'Connection.php';
    if(isset($_POST['M-SG-N']) && $_POST['M-SG-N'] != ""){
    $Name = $_POST['M-SG-N'];
    $Size = $_POST['M-SG-S'];
    $Detail = $_POST['M-SG-D'];
    $Price = $_POST['M-SG-P'];
    $target_file1 = "pictures/" . basename($_FILES["image-1"]["name"]);
      move_uploaded_file($_FILES["image-1"]["tmp_name"],$target_file1);
      $target_file2 = "pictures/" . basename($_FILES["image-2"]["name"]);
      move_uploaded_file($_FILES["image-2"]["tmp_name"],$target_file2);
      $target_file3 = "pictures/" . basename($_FILES["image-3"]["name"]);
      move_uploaded_file($_FILES["image-3"]["tmp_name"],$target_file3);  
      $target_file4 = "pictures/" . basename($_FILES["image-4"]["name"]);
      move_uploaded_file($_FILES["image-4"]["tmp_name"],$target_file3);  

    $sql="INSERT INTO `men-sunglasses`( `Image-1`, `Image-2`, `Image-3`, `Image-4`, `Name`, `Size`, `Detail`, `Price`)
    VALUES ('$target_file1','$target_file2','$target_file3','$target_file4','$Name','$Size','$Detail','$Price')";
 
    $result = mysqli_query($connection,$sql);
   
    if($result > 0){
        echo'Data Inserted';
        header('Location:Sun-Glasses.php#men-sunglasses');
      }
     else{
        echo'Data Not Inserted';}  
    } 
    ?>
</div>
---------------------------------------------------------------------------------------------

--------------------------------------------------------
<div id="women-glasses">
            <?php
    include 'Connection.php';
    if(isset($_POST['W-G-N']) && $_POST['W-G-N'] != ""){
    $Name = $_POST['W-G-N'];
    $Size = $_POST['W-G-S'];
    $Detail = $_POST['W-G-D'];
    $Price = $_POST['W-G-P'];
    $target_file1 = "pictures/" . basename($_FILES["image-1"]["name"]);
      move_uploaded_file($_FILES["image-1"]["tmp_name"],$target_file1);
      $target_file2 = "pictures/" . basename($_FILES["image-2"]["name"]);
      move_uploaded_file($_FILES["image-2"]["tmp_name"],$target_file2);
      $target_file3 = "pictures/" . basename($_FILES["image-3"]["name"]);
      move_uploaded_file($_FILES["image-3"]["tmp_name"],$target_file3);  
      $target_file4 = "pictures/" . basename($_FILES["image-4"]["name"]);
      move_uploaded_file($_FILES["image-4"]["tmp_name"],$target_file3);  

    $sql="INSERT INTO `women-glasses`( `Image-1`, `Image-2`, `Image-3`, `Image-4`, `Name`, `Size`, `Detail`, `Price`)
    VALUES ('$target_file1','$target_file2','$target_file3','$target_file4','$Name','$Size','$Detail','$Price')";
 
    $result = mysqli_query($connection,$sql);
   
    if($result > 0){
        echo'Data Inserted';
        header('Location:Glasses.php#women-glasses');
      }
     else{
        echo'Data Not Inserted';}  
    } 
    ?>
</div>




<div id="women-sunglasses">
            <?php
    include 'Connection.php';
    if(isset($_POST['W-SG-N']) && $_POST['W-SG-N'] != ""){
    $Name = $_POST['W-SG-N'];
    $Size = $_POST['W-SG-S'];
    $Detail = $_POST['W-SG-D'];
    $Price = $_POST['W-SG-P'];
    $target_file1 = "pictures/" . basename($_FILES["image-1"]["name"]);
      move_uploaded_file($_FILES["image-1"]["tmp_name"],$target_file1);
      $target_file2 = "pictures/" . basename($_FILES["image-2"]["name"]);
      move_uploaded_file($_FILES["image-2"]["tmp_name"],$target_file2);
      $target_file3 = "pictures/" . basename($_FILES["image-3"]["name"]);
      move_uploaded_file($_FILES["image-3"]["tmp_name"],$target_file3);  
      $target_file4 = "pictures/" . basename($_FILES["image-4"]["name"]);
      move_uploaded_file($_FILES["image-4"]["tmp_name"],$target_file3);  

    $sql="INSERT INTO `women-sunglasses`( `Image-1`, `Image-2`, `Image-3`, `Image-4`, `Name`, `Size`, `Detail`, `Price`)
    VALUES ('$target_file1','$target_file2','$target_file3','$target_file4','$Name','$Size','$Detail','$Price')";
 
    $result = mysqli_query($connection,$sql);
   
    if($result > 0){
        echo'Data Inserted';
        header('Location:Sun-Glasses.php#women-sunglasses');
      }
     else{
        echo'Data Not Inserted';}  
    } 
    ?>
</div>

<div id="kid-glasses">
            <?php
    include 'Connection.php';
    if(isset($_POST['K-G-N']) && $_POST['K-G-N'] != ""){
    $Name = $_POST['K-G-N'];
    $Size = $_POST['K-G-S'];
    $Detail = $_POST['K-G-D'];
    $Price = $_POST['K-G-P'];
    $target_file1 = "pictures/" . basename($_FILES["image-1"]["name"]);
      move_uploaded_file($_FILES["image-1"]["tmp_name"],$target_file1);
      $target_file2 = "pictures/" . basename($_FILES["image-2"]["name"]);
      move_uploaded_file($_FILES["image-2"]["tmp_name"],$target_file2);
      $target_file3 = "pictures/" . basename($_FILES["image-3"]["name"]);
      move_uploaded_file($_FILES["image-3"]["tmp_name"],$target_file3);  
      $target_file4 = "pictures/" . basename($_FILES["image-4"]["name"]);
      move_uploaded_file($_FILES["image-4"]["tmp_name"],$target_file3);  

    $sql="INSERT INTO `kid-glasses`( `Image-1`, `Image-2`, `Image-3`, `Image-4`, `Name`, `Size`, `Detail`, `Price`)
    VALUES ('$target_file1','$target_file2','$target_file3','$target_file4','$Name','$Size','$Detail','$Price')";
 
    $result = mysqli_query($connection,$sql);
   
    if($result > 0){
        echo'Data Inserted';
        header('Location:Glasses.php#kid-glasses');
      }
     else{
        echo'Data Not Inserted';}  
    } 
    ?>
    </div>



    <div id="kid-sunglasses">
            <?php
    include 'Connection.php';
    if(isset($_POST['K-SG-N']) && $_POST['K-SG-N'] != ""){
    $Name = $_POST['K-SG-N'];
    $Size = $_POST['K-SG-S'];
    $Detail = $_POST['K-SG-D'];
    $Price = $_POST['K-SG-P'];
    $target_file1 = "pictures/" . basename($_FILES["image-1"]["name"]);
      move_uploaded_file($_FILES["image-1"]["tmp_name"],$target_file1);
      $target_file2 = "pictures/" . basename($_FILES["image-2"]["name"]);
      move_uploaded_file($_FILES["image-2"]["tmp_name"],$target_file2);
      $target_file3 = "pictures/" . basename($_FILES["image-3"]["name"]);
      move_uploaded_file($_FILES["image-3"]["tmp_name"],$target_file3);  
      $target_file4 = "pictures/" . basename($_FILES["image-4"]["name"]);
      move_uploaded_file($_FILES["image-4"]["tmp_name"],$target_file3);  

    $sql="INSERT INTO `kid-sunglasses`( `Image-1`, `Image-2`, `Image-3`, `Image-4`, `Name`, `Size`, `Detail`, `Price`)
    VALUES ('$target_file1','$target_file2','$target_file3','$target_file4','$Name','$Size','$Detail','$Price')";
 
    $result = mysqli_query($connection,$sql);
   
    if($result > 0){
        echo'Data Inserted';
        header('Location:Sun-Glasses.php#kid-sunglasses');
      }
     else{
        echo'Data Not Inserted';}  
    } 
    ?>
    </div>