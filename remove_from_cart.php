<?php
    session_start();
    // Πέρνει το όνομα του άλμπουμ
    $name = isset($_GET['name']) ? $_GET['name'] : "";

    // Αφαιρεί άλμπουμ απο το καλάθι
    unset($_SESSION['cart_items'][$name]);
    $_SESSION['message'] = 'Το προϊόν αφαιρέθηκε από το καλάθι';
    // Επιστρέφει τον χρήστη στην λίστα των άλμπουμ και ενημερώνει τον χρήστη οτι προστέθηκε στο καλάθι
    header('Location: storewelcome.php');
?>