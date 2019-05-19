<?php
    session_start();
    // Λαμβάνει τα δεδομένα των άλμπουμ που στάλθηκαν από την προστθήκη στο καλάθι
    $name   = isset($_GET['name']) ? $_GET['name'] : "";
    $price  = isset($_GET['price']) ? $_GET['price'] : "";
    $code   = isset($_GET['code']) ? $_GET['code'] : "";
    /*
     Ελέγχει αν το session array του καλαθιού έχει δημιουργηθεί
     Αν όχι, δημιουργεί ένα cart session array
     */
    if(!isset($_SESSION['cart_items'])){
        $_SESSION['cart_items'] = array();
    }
    $albumData = array();
    //Ελέγχει αν τα αντικείμενα είναι μέσα στο πίνακα του καλαθιού, και αν είναι, αυξάνει την ποσότητα
    if(array_key_exists($name, $_SESSION['cart_items'])){
        $albumData = $_SESSION['cart_items'][$name];
        $albumData['quantity'] = $albumData['quantity'] + 1;
    }
    // Αλλιώς, προσθέτει το αντικείμενο στον πίνακα
    else {
        $albumData = array(
            'name' => $name,
            'price' => $price,
            'quantity' => 1,
            'code' => $code
        );
    }

    $_SESSION['cart_items'][$name] = $albumData;
    $_SESSION['message'] = 'Το προϊόν προστέθηκε στο καλάθι';
    // Μεταφέρει τον χρήστη στην αρχική σελίδα του καταστήματος και τον ενημερώνει ότι προστέθηκε στο καλάθι
    header('Location: storewelcome.php');
?>