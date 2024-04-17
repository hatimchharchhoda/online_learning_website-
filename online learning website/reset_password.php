<?php
session_start();

$conn = mysqli_connect('localhost','root','','courses');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $random_number = $_SESSION['random_number'];
    $reset_email = $_SESSION['reset_email'];
    $new_password = $_POST['new_password'];

    // Update user's password in the database
    $sql = "UPDATE users SET password='$new_password' WHERE email='$reset_email'";
    if (mysqli_query($conn, $sql)) {
        // Password updated successfully, clear session variables
        unset($_SESSION['reset_email']);
        unset($_SESSION['random_number']);
        $success_message = "Password has been reset successfully.";
    } else {
        $error_message = "Failed to reset password. Please try again later.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>
<body>
<div class="reset_container">
     <center><h2>Reset Password</h2></center>
    <?php if(isset($success_message)) { ?>
        <p><?php echo $success_message; ?></p>
    <?php } ?>
    <?php if(isset($error_message)) { ?>
        <p><?php echo $error_message; ?></p>
    <?php } ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="password" name="new_password" placeholder="New Password" required><br><br>
        <button type="submit">Reset Password</button>
    </form>
</div>
</body>
</html>


<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}

span{
    color: red;
    font-size: 25px;
    padding-left: 2px;
}
.reset-container {
    max-width: 400px;
    margin: 100px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

input[type="text"],
input[type="email"],
input[type="password"] {
    width: 91%;
    margin-bottom: 10px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

</style>