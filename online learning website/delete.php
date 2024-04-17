<?php
$conn = mysqli_connect('localhost','root','','courses');
$result="SELECT * FROM user_db";
$querry=mysqli_query($conn,$result);
$id=$_GET['y'];
$sql="DELETE FROM user_db where id=$id";
if(mysqli_query($conn,$sql)){
    header("Location: details.php");
}
?>