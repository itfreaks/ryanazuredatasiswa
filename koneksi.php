<?php
$host = "ryanappserver.database.windows.net";
$user = "ryanadmin";
$pass = "p@ssw0rd";
$db = "dicodingDB";

mssql_connect($host,$user,$pass) or die("Koneksi gagal");
mssql_select_db($db) or die("Database tidak bisa dibuka");


 /*$conn = new PDO("sqlsrv:server = $host; Database = $db", $user, $pass);
 $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );*/
?>
