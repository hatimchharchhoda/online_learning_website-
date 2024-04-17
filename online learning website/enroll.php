<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "courses";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$course = $_POST['course'];
$date = date("Y-m-d");

// SQL query to insert data into database
$sql = "INSERT INTO courses (fullname, email, course, dates) VALUES ('$fullname', '$email', '$course','$date')";

$conn->query($sql);

//mysqli_query($conn,$sql);
// Close database connection
$conn->close();
header("location:after_login_home.html");
exit();
?>
