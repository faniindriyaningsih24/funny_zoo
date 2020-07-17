<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "dbs_funnyzoo";
 
$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
 if (!$koneksi){
	echo 'Tidak dapat terhubung ke database';
}
?>