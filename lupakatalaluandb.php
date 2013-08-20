<?php

$host = "localhost";
$username = "root"; 	
$password = "root123";
$db_name = "smppta";
$tbl_name="maklumatpelajar";
$tbl_name="loginpelajar";

// Connect to server and select databse.
mysql_connect("$host","$username","$password") or die ("Cannot connect to database");
mysql_select_db("$db_name") or die ("Cannot Select Database");



// value sent from form
$emel=$_POST['emel'];

// table name
//$tbl_name=members;

// retrieve password from table where e-mail = $email_to(mark@phpeasystep.com)
$sql="SELECT katalaluan FROM loginpelajar WHERE emel='$emel'";
$result=mysql_query($sql);

// if found this e-mail address, row must be 1 row
// keep value in variable name "$count"
$count=mysql_num_rows($result);

// compare if $count =1 row
if($count==1){

$rows=mysql_fetch_array($result);

// keep password in $your_password
$katalaluan=$rows['katalaluan'];      ----------->>

// ---------------- SEND MAIL FORM ----------------

// send e-mail to ...
$to=$emel;

// Your subject
$subject="Your password here";

// From
$header="from: your name <your email>";

// Your message
$messages= "Your password for login to our website \r\n";
$messages.="Your password is $your_password \r\n";
$messages.="more message... \r\n";

// send email
$sentmail = mail($to,$subject,$messages,$header);

}

// else if $count not equal 1
else {
echo "Not found your email in our database";
}

// if your email succesfully sent
if($sentmail){
echo "Your Password Has Been Sent To Your Email Address.";
}
else {
echo "Cannot send password to your e-mail address";
}

?>