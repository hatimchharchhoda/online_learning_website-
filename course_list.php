<html>
    <body>
        <center><h1>registered detail</h1></center>
    </body>
</html>
<style>
    .btn{
        border: 1px solid yellow;
        padding: 5px;
        color: black;
        background:yellow;
        text-decoration: none;
    }
    .btn:hover{
        background: grey;
    } 
</style>
<?php
// Database connection parameters
$conn = mysqli_connect('localhost','root','','courses');
echo "<a class='btn' href='details.php'>Login List</a><br><br>";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the date input from the form
    $input_date = $_POST['input_date'];

    // SQL query to select data from a table based on the input date
    $sql = "SELECT * FROM courses WHERE dates = '$input_date'";
    $result = $conn->query($sql);
    // Check if there are rows returned
    if ($result->num_rows > 0) {
        // Output table header
        echo "<center><table border='1'><tr><th>ID</th><th>Email</th><th>Course</th><th>Date</th><th>Update</th></tr>";

        // Output data of each row
        while($row = $result->fetch_assoc()) {
            $id=$row['id'];
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["email"] . "</td><td>" . $row["course"] . "</td><td>" . $row["dates"] . "</td><td>" . "<a href='delete_course.php?y=$id'>Delete</a></td></tr>";
        }

        // Close table
        echo "</table>";
    } else {
        echo "0 results";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search by Date</title>
</head>
<body>
    <center><h2>Search Data by Date</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="input_date">Enter Date:</label>
        <input type="date" id="input_date" name="input_date" required>
        <button type="submit">Search</button>
    </form>
    </center>
</body>
</html>
