<?php
session_start();

$conn = mysqli_connect('localhost','root','','courses');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user_db WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Valid credentials, redirect to home page
        $_SESSION['email'] = $email;
        header("Location: after_login_home.html");
        exit();
    } else {
        $error = "Invalid email or password.";
    }
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<div class="login-container">
    <center><h2>Login</h2></center>
    <?php if(isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit">Login</button>
        <p>Does not have an account? <a href="signup.php">Signup</a>.</p>
        <p>Forget your password? <a href="forget_password.php">Forget password</a>.</p>
    </form>
</div>
</body>
</html>

<style>
    /* styles.css */
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}

span{
    color: red;
    font-size: 25px;
    padding-left: 2px;
}
.login-container {
    max-width: 400px;
    margin: 100px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
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