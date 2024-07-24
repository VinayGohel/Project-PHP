<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $interests = htmlspecialchars($_POST['interests']);
    
   

    echo "Thank you for volunteering, $name!";
} else {
    echo "Invalid request.";
}
?>
