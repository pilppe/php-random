//Users cant view this page if the session is not registered.
// Check if session is not registered, redirect back to main page. 
// Put this code in first line of web page. 
<?php
session_start();
if(!session_is_registered(myusername)){
header("location:main_login.php");
}
?>

<html>
<body>
Login Successful
</body>
</html>
