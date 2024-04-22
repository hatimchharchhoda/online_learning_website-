<?php
$conn = mysqli_connect('localhost','root','','courses');
$result="SELECT * FROM courses";
$querry=mysqli_query($conn,$result);
$id=$_GET['y'];
$sql="DELETE FROM courses where id=$id";
if(mysqli_query($conn,$sql)){
    header("Location: course_list.php");
}
?>