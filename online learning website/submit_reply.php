<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the reply is not empty
    if (!empty($_POST['reply'])) {
        // Save the reply to a text file
        $file = 'replyies.txt';
        $reply = $_POST['question'] . 'Reply: ' . $_POST['reply'] . "\n";
        file_put_contents($file, $reply, FILE_APPEND | LOCK_EX);
    }
}

// Redirect back to the index page
header("Location: index.php");
exit;
?>
