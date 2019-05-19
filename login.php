<?php 
define('host', "localhost");
define('dbusername', "id9543333_queenmusicstore");
define('dbpassword', "123456");
define('dbname', "id9543333_queenstore");

	if(isset($_POST['login'])){ 
	$username= $_POST['username'];
    $password= $_POST['password'];
	if((!empty($username)) AND (!empty($password))){

$conn = mysqli_connect(host, dbusername, dbpassword) or die(mysql_error());
$db = mysqli_select_db($conn,dbname) or die(mysqli_error());
$NAME="SELECT username from users where username='$username'";//a
$PASS="SELECT password from users where password='$password'";//b
$a=mysqli_query($conn,($NAME));
$b=mysqli_query($conn,($PASS));

if (($a->num_rows>0) AND ($b->num_rows>0)){
    while(($rowA=$a->fetch_assoc()) AND $rowB=$b->fetch_assoc()){
			header("location: storewelcome.php");
        }
    }
		else{
		    header("location: storeloginfail.php");
		}
 }
 else{echo "error";}
}
?>