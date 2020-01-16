<?php
$host = "ryanappserver.database.windows.net";
$user = "ryanadmin";
$pass = "p@ssw0rd";
$db = "dicodingDB";

mssql_connect($server,$username,$password) or die("Koneksi gagal");
mssql_select_db($database) or die("Database tidak bisa dibuka");


 /*$conn = new PDO("sqlsrv:server = $host; Database = $db", $user, $pass);
 $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );*/
?>
