<?php
$connect=mysqli_connect("localhost:8111","root","","enebla");
$sql="DELETE FROM `cart` WHERE user_name='user'";

$retrive=mysqli_query($connect,$sql);
if($retrive){
    header("location: checkout.php");
}else{
    header("location: thank.html");
}

?>