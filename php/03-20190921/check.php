<?php 
$user=$_GET['user'];
$password=$_GET['password'];
echo "<h1>hello world!</h1>";
if($user=='nam' && $password==123)
{
    header("location:trangchu.php");
}
else{
    header("location:index.php");
}
?>