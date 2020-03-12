<?php
function StartCon()
{
$host = "localhost";
$user = "root";
$pass = "";
$db = "sports1";
$conn = new mysqli($host, $user, $pass,$db) or die("Connect failed: %s\n". $conn -> error);

return $conn;
}

function EndCon($conn)
{
$conn -> close();
}

?>
