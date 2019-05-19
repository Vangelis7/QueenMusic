<?php
    session_start();
    $db_host = 'localhost';
    $db_user = 'id9543333_queenmusicstore';
    $db_password = '123456';
    $db_name ='id9543333_queenstore';
    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    // Έλεγχος αν συνδέθηκε
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $customer_name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $address = $_POST["address"];
    $total = $_POST["total"];
    $today = date('Y-m-d');
    $query = "INSERT INTO order_details(customer_name,mobile_no, address,order_total,order_date) VALUES ('$customer_name','$mobile','$address',$total,'$today')";
    if($conn->query($query)){
		$order_id = $conn->insert_id;
        foreach($_SESSION['cart_items'] as $name=>$album){
            $name = $album["name"];
            $code = $album["code"];
            $price = $album["price"];
            $quantity = $album["quantity"];
			
            $query = "INSERT INTO product(name,code, price,quantity,order_id) VALUES ('$name','$code',$price,$quantity,$order_id)";
            $conn->query($query);
            unset($_SESSION['cart_items'][$name]);
        }
    }
    unset($_SESSION['cart_items']);
    $_SESSION['message'] = 'Η παραγγελία σας ολοκληρώθηκε με επιτυχία';
    // Μεταφέρετε στην αρχική σελίδα του καταστήματος και ενημερώνει τον χρήστη ότι προστέθηκε στο καλάθι
    header('Location: storewelcome.php');
?>