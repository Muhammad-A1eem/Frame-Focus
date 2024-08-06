    <!-- SIGN_UP BACKEND -->


    <?php 
include 'Connection.php';

$Name = $_POST['name'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$Confirmpassword = $_POST['confirm-Password'];


$sql="INSERT INTO `signup`( `Name`, `Email`, `Password`, `Confirm-Password`) 
VALUES ('$Name','$Email','$Password'.'$Confirmpassword')";

$result = mysqli_querry($connection,$sql);
if($result > 0){
    echo'Data Inserted';
    header('Location:home.php');
  }
 else{
    echo'Data Not Inserted';}  

?>
-------------------------------------------------------------------$_COOKIE

<!-- LOGIN_BACKEND -->

<?php
 include 'Connection.php';

$email = $_POST['email'];
$Password = $_POST['password'];


?>