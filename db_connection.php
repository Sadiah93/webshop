<?php
function OpenCon()
{
	$dbhost = "localhost" ;
	$dbuser = "root" ;
	$dbpass = "" ;
	$db = "web shop" ;

	$conn = new mysqli( $dbhost , $dbuser , $dbpass , $db) or die("connection failed: %s\n" . $conn -> error);

	return $conn;

} 
function CloseCon($conn)
{
  $conn -> close();
}
?>