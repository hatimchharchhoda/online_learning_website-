<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions and Answers</title>
</head>
<body>
    <nav>
        <div class="nav-wrapper">
            <div class="brand">
                <p><img src=".\img\poster.jpg" alt="">
                <strong>E-learning</strong></p>
            </div>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="nav-list">
                <li><a href="after_login_home.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="courses.html">Courses</a></li>
                <li class="active"><a href="">Q&A</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="details.php">Details</a></li>

            </ul>
        </div>
    </nav>


    <div class="container">
        <h1>Ask a Question</h1>
        <form action="submit_question.php" method="POST">
            <label for="username">Your Name:</label>
            <input type="text" id="username" name="username" required>
            <label for="question">Your Question:</label>
            <textarea id="question" name="question" rows="4" required></textarea>
            <input type="submit" class="submit">
        </form>

        <hr>

        <h2>Questions and Answers</h2>
        <div class="qa-container">
            <?php include 'show_questions.php'; ?>
        </div>
    </div>

    <footer>
        <div class="foot">
            <div class="footer-columns">
                <div class="footer-column">
                    <h3>About Us</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula augue sit amet magna placerat, ac ullamcorper ipsum porta.</p>
                </div>
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="after_login_home.htmp.html">Home</a></li>
                        <li><a href="courses.html">Courses</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-column"> 
                    <h3>Contact Us</h3>
                    <p>123 Street Name</p>
                    <p>City, State ZIP</p>
                    <p>Email: info@example.com</p>
                    <p>Phone: +123 456 7890</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 E-Learning Platform</p>
            </div>
        </div>
    </footer>
</body>
</html>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

h1, h2 {
    text-align: center;
}

form {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
}

.submit {
    background-color: #333;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
}

.submit:hover {
    background-color: #555;
}

.qa-container {
    border-top: 1px solid #ccc;
    margin-top: 20px;
    padding-top: 20px;
}


/* Footer */
footer {
    background-color: #333;
    color: #fff;
    padding: 50px 0;
}

.foot {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 10px;
}

.footer-columns {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.footer-column {
    flex: 1;
    margin-bottom: 20px;
}

.footer-column h3 {
    margin-bottom: 10px;
}

.footer-column ul {
    list-style: none;
    padding: 0;
}

.footer-column ul li {
    margin-bottom: 5px;
}

.footer-column ul li a {
    color: #fff;
    text-decoration: none;
}

.footer-bottom {
    text-align: center;
    margin-top: 20px;
}


/* Reset CSS */

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
}
/* Header */
nav {
    background: #333;
    color: #fff;
    padding: 20px 0;
}
@import url('https://fonts.googleapis.com/css2?family=Lato:wght@300;400;900&display=swap');
    
:root {
    --primary: #e5ff00;
    --dark: #333;
    --pure: #ffffff;
    --smoke: rgb(255, 255, 255);
    --dark-gray: #999;
}


.nav-wrapper {
    width: 1152px;
    max-width: 90%;
    margin: 0px auto 0px 0px;
    display: flex;
    justify-content: space-around;
    flex-direction: row;
    flex-wrap: nowrap;
}

.brand {
    display: contents;
}

.brand img{
    width: 83px;
    height: 80px;
    border-radius: 24px;
}
.brand strong{
    padding: 0px 90px 0px 0px;
    font-size: 38px;
}
.hamburger{
    align-items: center;
}

.nav-wrapper ul.nav-list {
    list-style-type: none;
    display: flex;
    align-items: center;
}
.nav-wrapper ul.nav-list li {
    margin-left: 30px;
    padding: 20px 0;
    position: relative;
}

.nav-wrapper ul.nav-list li a {
    color: white;
    text-decoration: none;
    letter-spacing: 1px;
    transition: all .5s ease-in-out;
}

.nav-wrapper ul.nav-list li a:hover, .nav-wrapper ul.nav-list li.active a {
    color: var(--primary);
}
</style>