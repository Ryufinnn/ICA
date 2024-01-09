
<?php
	$host	 = "localhost";
	$user	 = "root";
	$pass	 = "";
	$dabname = "spk";
	
	$foldername="ICA";
	$conn = mysql_connect( $host, $user, $pass) or die('Could not connect to mysql server.' );
	mysql_select_db($dabname, $conn) or die('Could not select database.');
	$baseurl="http://localhost/".$foldername."/";
	
	$nama_usaha="BANK NAGARI CABANG KOTO BARU";
	$nama_aplikasi="APLIKASI SPK PADA BANK NAGARI";
	$path_web=$_SERVER['DOCUMENT_ROOT']."/".$foldername."/";
	$label_footer="Copyright &copy; BANK NAGARI 2016 ".date("Y");
?>