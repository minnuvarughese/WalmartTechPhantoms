<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
<html>
<body>
	<?php include("index.php"); ?>
<p>the page to redirected to after login</p>
</html>
