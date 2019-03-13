
<?php

include 'connection.php';

$username   = $_POST['username'];
$pass       = $_POST['password'];
 
 
$user = mysqli_query($connect,"select * from userprofile where userName='$username' and password='$pass'");
$chek = mysqli_num_rows($user);

if($chek>0)
{   session_start();
    $row = mysqli_fetch_array($user);
    $_SESSION["userName"] = $row["userName"];

    header("location: MyProfile_page2.php");
}else
{
    echo "wrong password";
}

?>