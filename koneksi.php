<?php
$host = "ryanappserver.database.windows.net";
$user = "ryanadmin";
$pass = "p@ssw0rd";
$db = "dicodingDB";

 $conn = new PDO("sqlsrv:server = $host; Database = $db", $user, $pass);
 $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
?>
