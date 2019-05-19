<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Εγγραφή Χρήστη</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/favicon.ico">
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
/* Set a style for the submit/register button */
.registerbutton {
  background-color: #FFA500;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
</style>
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
            <li><a href="contact.html">Επικοινωνία</a></li>        
        </ul>  
    </div>

    <div id="style_content">        
            	<h1 align="center">Εγγραφή Χρήστη</h1>
					<?php
                     $username = filter_input(INPUT_POST, 'username');
                     $email = filter_input(INPUT_POST, 'email');
                     $password_1 = filter_input(INPUT_POST, 'password_1');
                     $password_2 = filter_input(INPUT_POST, 'password_2');
                     if ($password_1 == $password_2) { 			 
						$servername = "localhost";
						$user = "id9543333_queenmusicstore";
						$pass = "123456";
						$database = "id9543333_queenstore";
						
						$conn = mysqli_connect($servername, $user, $pass, $database);
						
						if (!$conn) {
							die("Connection failed: " . mysqli_connect_error());
						}                  
						else{
						$sql = "INSERT INTO users (username, email, password)
						values ('$username','$email','$password_1')";
						if ($conn->query($sql)){
						echo "<p align=center>Η εγγραφή ήταν επιτυχής!</p>";
						}
						else{
						echo "Error: ". $sql ."
						". $conn->error;
						}
						$conn->close();
						}
						}
						else{
						echo "<p align=center>Οι κωδικοί δεν ταιριάζουν</p>";
						}
                    ?>
                    <div class="addtocart_button" align='center'><a href="loginpage.php">Επιστροφή</a></div>
				<br>
            </div>  			
	<div id="style_footer">
        <a href="index.html">Κύρια Σελίδα</a> | <a href="aboutus.html">Σχετικά Με Εμάς</a> | <a href="loginpage.php">Ηλ. Κατάστημα</a> | <a href="live.html">Όλα Τα Live</a> | <a href="news.html">Τα Νέα Μας</a> | <a href="contact.html">Επικοινωνία</a><br />
        Copyright © <a href="index.html"><strong>Queen 2019</strong></a> 
	</div>
</div>
</body>
</html> 