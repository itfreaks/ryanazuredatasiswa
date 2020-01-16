<?php

$server = 'ryanappserver.database.windows.net';
$username = 'ryanadmin';
$password = 'p@ssw0rd';
$con = mssql_connect($server, $username, $password);
if ($con) 
{
    echo 'Berhasil konek!';
}
else
{
    echo 'Koneksi GAGAL!';
}

?>
