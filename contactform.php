<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Επικοινωνία</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/favicon.ico">
</head>
<body>
<div id="style_container">
	<div id="style_header">
    	<div id="style_title">
		<img src="images/Header-Logo.png" alt="Queen" />
        </div>
    </div>
	
    <div id="style_menu">
     	<ul>
			<li><a href="index.html">Κύρια Σελίδα</a></li>
			<li><a href="aboutus.html">Σχετικά Με Εμάς</a></li>
            <li><a href="loginpage.php">Ηλ. Κατάστημα</a></li>
            <li><a href="live.html">Όλα Τα Live</a></li>  
            <li><a href="news.html">Τα Νέα Μας</a></li>                      
            <li><a href="contact.html" class="current">Επικοινωνία</a></li>        
        </ul>  
    </div>
    <div id="style_content">        
            <h1 align="center">Αποστολή Μηνύματος</h1>
            <h3 align="center">
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

				// Δημιουργία Σύνδεσης
				$conn = mysqli_connect($servername, $username, $password, $database);
				// Έλεγχος Σύνδεσης
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
				</h3>
    </div>   
	<div id="style_footer">
        <a href="index.html">Κύρια Σελίδα</a> | <a href="aboutus.html">Σχετικά Με Εμάς</a> | <a href="loginpage.php">Ηλ. Κατάστημα</a> | <a href="live.html">Όλα Τα Live</a> | <a href="news.html">Τα Νέα Μας</a> | <a href="contact.html">Επικοινωνία</a><br />
        Copyright © <a href="index.html"><strong>Queen 2019</strong></a>
	</div>
</div>
</body>
</html>