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

        if(!empty($name) &&!empty($email) && !empty($topic) && !empty($message)) {
            echo "<h2>Thank you, " . $name . "! We received your message about: \"$topic\"</h2>";
        }
    }
?>

/*output predictions
I predict if the fields are filled out correctly, the message "Thank you, [Name]! Your message has been sent." will be displayed.
If any of the fields are left blank, the page will display error messages.
*/

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