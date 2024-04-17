<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate inputs
    $username = $_POST['username'];
    $question = $_POST['question'];

    // Store question in a text file (you can use a database instead)
    $file = 'questions.txt';
    $data = "$username: $question\n";
    file_put_contents($file, $data, FILE_APPEND);
}
// Redirect back to the index page
header("Location: index.php");
?>