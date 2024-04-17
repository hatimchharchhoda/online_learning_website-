<?php
$conn = mysqli_connect('localhost','root','','courses');
$result="SELECT * FROM user_db";
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$sql="UPDATE user_db SET name='$name', email='$email' WHERE id=$id";
if(mysqli_query($conn,$sql)){
    header("Location: details.php");
}
else{
    echo "HAVING AN ERROR ENTER AGAIN";
    echo "<a href='eddit.php'>Form</a>";
}
?>