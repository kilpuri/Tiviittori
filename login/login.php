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
$url="http://www.webropolsurveys.com/S/918A9F8B67491F15.par?q1o1=$pass";
if($count==1){
 
session_register("pass");
header("location:$url");
}
else {
echo "Wrong pass";
header( "refresh:5;url=login.php" )
}

?>
