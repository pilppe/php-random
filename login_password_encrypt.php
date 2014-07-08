// username and pw sent from the form
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

// encrypt password 
$encrypted_mypassword=md5($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$encrypted_mypassword'";
$result=mysql_query($sql);
