<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $interests = htmlspecialchars($_POST['interests']);
    
    // Here you can add code to save these details to a database or send an email

    echo "Thank you for volunteering, $name!";
} else {
    echo "Invalid request.";
}
?>
