<?php
session_start();
if(!session_is_registered(myusername)){
header("location:http://www.webropol.fi");
}
?>

<html>
<body>
Login Successful
</body>
</html>