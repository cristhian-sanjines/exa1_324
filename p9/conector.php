<?php
	$servidor="localhost"; 
	$username="root";
	$password="";	
	$nombre_db="bd_cristhiansanjines";	
	try{
		$data_base=new PDO("mysql:host={$servidor};dbname={$nombre_db}",$username,$password);
		$data_base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOEXCEPTION $error){
		$error->getMessage();
	}
?>


