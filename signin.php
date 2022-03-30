<?php
  if(!empty($_POST["remember"])) {
    $email = $_POST['Email'];
    $pass = $_POST['Password'];
	setcookie ("Email",$_POST["Email"],time()+ 3600);
	setcookie ("Password",$_POST["Password"],time()+ 3600);
	echo "Cookies Set Successfuly";
} else {
	setcookie("Email","");
	setcookie("Password","");
	echo "Cookies Not Set";
}
session_start();
            $_SESSION['email'] = $email;
            header("location: welcome.php");
?>
<p><a href="signin.html"> Go to Login Page </a> </p>