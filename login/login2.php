<?php
$host = "localhost";
$username = "user";
$password = "user";
$db_name = "db1";
$tbl_name = "tokens";

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$pass=$_POST['pass']; 
$sql = "SELECT * FROM $tbl_name WHERE token='$pass'";
$result = mysql_query($sql);
$count=mysql_num_rows($result);

if($count==1){
session_register("pass");
header("location:http://www.webropol.fi");
}
else {
echo "Wrong pass";
}

?>
