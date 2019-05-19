<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Κατάστημα</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style>
/* Μεγάλα πεδία εισαγωγής τιμών */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.buttonlogin {
  background-color: #4CAF50;
  color: white;
  padding: 14px;
  border: none;
  cursor: pointer;
  width: 100%;
}
.buttonregister {
  background-color: #FFA500;
  color: white;
  padding: 14px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  display: block;
  width: 98%;
  margin: auto;
}
.loginfail {
  color: red;
  font-size: 160%;
  text-align: center;
  font-family: Helvetica;
  font-weight: bold;
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
            <li><a href="loginpage.php" class="current">Ηλ. Κατάστημα</a></li>
            <li><a href="live.html">Όλα Τα Live</a></li>  
            <li><a href="news.html">Τα Νέα Μας</a></li>                      
            <li><a href="contact.html">Επικοινωνία</a></li>        
        </ul>  
    </div>
    <div id="style_content">  
            <h1 align="center">Σύνδεση Χρήστη</h1>
            <h3 align="center">Πρέπει να συνδεθείς για να εισέλθεις στο κατάστημα</h3>
			<div class="loginfail"><p>Λάθος κωδικός ή όνομα χρήστη.</p></div>
                <form action="login.php" method="post">
                <div class="container">
                <p id="Login1">Όνομα Χρήστη</p><input type="text" name="username" id="user" placeholder="Πληκτρολόγησε το ψευδώνυμο σου" required>
                </div>  
                <div class="container">
                <P id="Login2">Κωδικός</P><input type="password" name="password" id="pass" placeholder="Πληκτρολόγησε τον κωδικό σου" required> 
                </div> 
                <button type="submit" class="buttonlogin" name="login">Σύνδεση</button>
                </form>		
			<a href="register.html"><button type="submit" class="buttonregister">Αν δεν έχεις λογαριασμό, κάνε εγγραφή!</button></a>
			<br>			
	</div> 	
	<div id="style_footer">
        <a href="index.html">Κύρια Σελίδα</a> | <a href="aboutus.html">Σχετικά Με Εμάς</a> | <a href="loginpage.php">Ηλ. Κατάστημα</a> | <a href="live.html">Όλα Τα Live</a> | <a href="news.html">Τα Νέα Μας</a> | <a href="contact.html">Επικοινωνία</a><br />
        Copyright © <a href="index.html"><strong>Queen 2019</strong></a> 
	</div>
</div>
</body>
</html>