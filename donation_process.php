<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $contact_number = htmlspecialchars($_POST['contact_number']);
    $payment_option = htmlspecialchars($_POST['payment_option']);

    // Redirect to bKash payment page
    if ($payment_option == 'bkash') {
        header("Location: https://www.bkash.com/payment"); // Replace with actual bKash payment URL
        exit();
    }

    echo "Thank you, $name. We will contact you shortly on $contact_number regarding your payment.";
}
?>
