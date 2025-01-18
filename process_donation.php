<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $amount = htmlspecialchars($_POST['amount']);
    $paymentMethod = htmlspecialchars($_POST['payment']);

    // Log the donation details (for example, to a file or database)
    $logEntry = "Donation received: \n";
    $logEntry .= "Name: $name\n";
    $logEntry .= "Email: $email\n";
    $logEntry .= "Amount: $amount\n";
    $logEntry .= "Payment Method: $paymentMethod\n\n";

    file_put_contents('donations.log', $logEntry, FILE_APPEND);

    // Redirect to a thank you page
    header('Location: thank_you.html');
    exit();
}
?>
