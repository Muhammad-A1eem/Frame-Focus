
<?php 
$servername="localhost";
$username="root";
$passward="";
$dbName="Stuff";


$connection = mysqli_connect($servername,$username,$passward,$dbName);

if(!$connection){
    
    echo"<h1> Not Connected </h1>";
}
?>
