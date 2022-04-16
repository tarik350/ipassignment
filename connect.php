<?php
// connetion to database
// check user name and id for login
    $user_name = $_POST['user_name'];
    $password = md5($_POST['password']);
    $role=$_POST['role'];
    $mysqli = mysqli_connect("localhost:8111","root","","enebla");
    
$errors = array();

$result = mysqli_query( $mysqli ,"select * from users Where user_name='$user_name' and password='$password'") 
            or die("not connected".mysql_error());

$check_admin=mysqli_query( $mysqli ,"select user_role from users Where user_name='$user_name'") 
        or die("not connected".mysql_error());

$row = mysqli_fetch_array($result);
$rows = mysqli_fetch_array($check_admin);

if ($row['user_name'] == $user_name && $row['password'] == $password)  {

    if ($rows['user_role'] == 'admin') {
        header("location: index.php");
    }
    else if ($rows['user_role'] == 'user') {
        header("location: register.php");
    }   
} else {
    header("location: thank.html");
}


?>