<?php
include("conect.php");
//$pdo = new Conexion();

if ($_SERVER["REQUEST_METHOD"]=="GET"){
	if (isset($_GET["ci"])){
		$sql = $db->prepare("select * from persona where ci=:ci");
		$sql->bindValue(':ci',$_GET["ci"]);
		$sql->execute();
		$sql->setFetchMode(PDO::FETCH_ASSOC);
		header("HTTP/1.1 200 existen datos");
		echo json_encode($sql->fetchAll());
		exit;
	}
	else{
		
		$sql = $db->prepare("select * from persona");
		$sql->execute();
		$sql->setFetchMode(PDO::FETCH_ASSOC);
		header("HTTP/1.1 200 existen datos");
		echo json_encode($sql->fetchAll());
		exit;
	}
	header("HTTP/1.1 400 Requerimiento inexistente");
}
if ($_SERVER["REQUEST_METHOD"]=="POST"){
	//:estoy enviando estos datos
	$query="insert into persona values(:ci,:nombreCompleto,:fechaNacimiento,:idDepartamento)";
	$sql = $db->prepare($query);
	$sql->bindValue(':ci',$_GET["ci"]);
	$sql->bindValue(':nombreCompleto',$_GET["nombreCompleto"]);
	$sql->bindValue(':fechaNacimiento',$_GET["fechaNacimiento"]);
	$sql->bindValue(':idDepartamento',$_GET["idDepartamento"]);
	$sql->execute();
	$state=$db->lastInsertId();
	if ($state){
		header("HTTP/1.1 200 insercion correcta");
		echo json_encode($state);
		exit;
	}
}
if ($_SERVER["REQUEST_METHOD"]=="DELETE"){
	$sql = $db->prepare("delete from persona where ci=:ci");
	$sql->bindValue(':ci',$_GET["ci"]);
	$sql->execute();
	header("HTTP/1.1 200 borrado");
	exit;
}

if($_SERVER["REQUEST_METHOD"]=="PUT"){
	$query="update persona set nombreCompleto='".$_GET['nombreCompleto']."',fechaNacimiento='".$_GET['fechaNacimiento']."', idDepartamento='".$_GET['idDepartamento']."'";
    $query.="where ci=".$_GET['ci'];
	$sql = $db->prepare($query);
	$sql->bindValue(':ci',$_GET["ci"]);
	$sql->bindValue(':nombreCompleto',$_GET["nombreCompleto"]);
	$sql->bindValue(':fechaNacimiento',$_GET["fechaNacimiento"]);
	$sql->bindValue(':idDepartamento',$_GET["idDepartamento"]);
	$sql->execute();
	exit;

}
?>