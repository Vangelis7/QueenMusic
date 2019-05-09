<html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
</head>
<body>
<?php
 $firstname = filter_input(INPUT_POST, 'firstname');
 $lastname = filter_input(INPUT_POST, 'lastname');
 $email = filter_input(INPUT_POST, 'email');
 $subject = filter_input(INPUT_POST, 'subject');
 $message = filter_input(INPUT_POST, 'message');
 if (!empty($firstname)){
 if (!empty($lastname)){
 if (!empty($email)){
 if (!empty($subject)){
 if (!empty($message)){	
     
$servername = "localhost";
$username = "id9543333_queenmusiccontact";
$password = "12345";
$database = "id9543333_queencontact";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

else{
$sql = "INSERT INTO contact (firstname, lastname, email, subject, message)
values ('$firstname','$lastname','$email','$subject','$message')";
if ($conn->query($sql)){
echo "Το μήνυμα σας αποστάλθηκε!";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Το μύνημα δεν πρέπει να είναι κενό!";
die();
}
}
else{
echo "Το θέμα δεν πρέπει να είναι κενό!";
die();
}
}
else{
echo "Το email δεν πρέπει να είναι κενό!";
die();
}
}
else{
echo "Το επίθετο δεν πρέπει να είναι κενό!";
die();
}
}
else{
echo "Το όνομα δεν πρέπει να είναι κενό!";
die();
}
?>
</body>
</html>