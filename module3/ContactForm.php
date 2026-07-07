// Jennifer Frei - 1405501
//CS85 Sec 1234
//Module3 Assignment 3B
// GitHub Repo URL: https://github.com/Jentare/cs85-module3b-createform

<?php
    //detect submission
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        //santize inputs
        $name = htmlspecialchars(trim($_POST['name']));
        $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
        $topic = htmlspecialchars(trim($_POST['topic']));
        $message = htmlspecialchars(trim($_POST['message']));

        //validate inputs
        $errors = [];

        if(empty($name)) {
            $errors[] = "Name is required.";
        }

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "A valid email address is required.";
        }

        if(empty($topic)) {
            $errors[] = "Topic is required.";
        }

        if(empty($message)) {
            $errors[] = "Message cannot be empty.";
        }

        //thank you message
        if(empty($errors)) {
            echo "<h2>Thank you, " . $name . "! Your message has been sent.</h2>";
        exit;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Mod 3B Contact Form</title>
    </head>
    <body>
        <form action="ContactForm.php" method="POST">
            <label for="FullName">Full Name:</label><br>
            <input type="text" id="FullName" name="name" required><br><br>
            
            <label for="Email">Email Address:</label><br>
            <input type="email" id="Email" name="email" required><br><br>
            
            <label for="Topic">Topic:</label><br>
            <input type="text" id="Topic" name="topic" required><br><br>
            
            <label for="Message">Message:</label><br>
            <input type="text" id="Message" name="message" required><br><br>
            
            <input type="submit" name="submit" value="Submit Message"><br><br>
    </form>
    </body>
</html>