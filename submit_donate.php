<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $donationAmount = htmlspecialchars($_POST['donation-amount']);
    $paymentMethod = htmlspecialchars($_POST['payment-method']);
    
    

    echo "Thank you for your generous donation of $donationAmount!";
} else {
    echo "Invalid request.";
}
?>
