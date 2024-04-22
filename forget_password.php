<?php
session_start();

$conn = mysqli_connect('localhost','root','','courses');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Forget password process
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Generate a 6-digit random number
    $random_number = mt_rand(100000, 999999);

    // Store the random number and email in the session for temporary storage
    $_SESSION['reset_email'] = $email;
    $_SESSION['random_number'] = $random_number;
    // Send the random number to the user's email
    $to = $email;
    $subject = "Password Reset Code";
    $message = "Your password reset code is: " . $random_number;
    $headers = "From: $email"; // Change this to your own email address

    if (mail($to, $subject, $message, $headers)) {
        $success_message = "Password reset code has been sent to your email.";
    } else {
        $error_message = "Failed to send password reset code. Please try again later.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
</head>
<body>
<div class="forget-container">
    <h2>Forgot Password</h2>
    <?php if(isset($success_message)) { ?>
        <p><?php echo $success_message; ?></p>
    <?php } ?>
    <?php if(isset($error_message)) { ?>
        <p><?php echo $error_message; ?></p>
    <?php } ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="email" name="email" placeholder="Email" required><br><br>
        <button type="submit">Send Code</button>
    </form>
    <p>Remembered your password? <a href="login.php">Login here</a></p>
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
.forget-container {
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