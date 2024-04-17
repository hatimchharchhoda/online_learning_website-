<?php
// Read questions from the text file and display them
$file = 'questions.txt';
if (file_exists($file)) {
    $questions = file($file);
    foreach ($questions as $question) {
        echo '<div class="question">' . htmlspecialchars($question) . '</div>';
        // Add a form for replying to each question
        echo '<form action="submit_reply.php" method="post">';
        echo '<input type="hidden" name="question" value="' . htmlspecialchars($question) . '">';
        echo '<label for="reply">Reply:</label><br>';
        echo '<textarea id="reply" name="reply" rows="2" cols="10"></textarea><br>';
        echo '<input type="submit" value="Reply">';
        echo '</form>';
    }
}
?>
