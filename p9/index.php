<?php
	//incluimos el conector
	include("conector.php");
	//indica si esta funcionando correctamente
	if ($_SERVER["REQUEST_METHOD"]=="GET"){
		if (isset($_GET["ci"])){
			$query = $data_base->prepare("select * from persona where ci=:ci");
			$query->bindValue(':ci',$_GET["ci"]);
			$query->execute();
			$query->setFetchMode(PDO::FETCH_ASSOC);
			header("HTTP/1.1 200 existen datos");
			echo json_encode($query->fetchAll());
			exit;
		}
		else{
			$query = $data_base->prepare("select * from persona");
			$query->execute();
			$query->setFetchMode(PDO::FETCH_ASSOC);
			header("HTTP/1.1 200 existen datos");
			echo json_encode($query->fetchAll());
			exit;
		}
		header("HTTP/1.1 400 Requerimiento inexistente");
	}
	//aniadimos datos
	if ($_SERVER["REQUEST_METHOD"]=="POST"){
		//:estoy enviando estos datos
		$query="insert into persona values(:ci,:nombreCompleto,:fechaNacimiento,:idDepartamento)";
		$query = $data_base->prepare($query);
		$query->bindValue(':ci',$_GET["ci"]);
		$query->bindValue(':nombreCompleto',$_GET["nombreCompleto"]);
		$query->bindValue(':fechaNacimiento',$_GET["fechaNacimiento"]);
		$query->bindValue(':idDepartamento',$_GET["idDepartamento"]);
		$query->execute();
		$estado=$data_base->lastInsertId();
		if ($estado){
			header("HTTP/1.1 200 insercion correcta");
			echo json_encode($estado);
			exit;
		}
	}
	//borramos un dato pasando ci
	if ($_SERVER["REQUEST_METHOD"]=="DELETE"){
		$query = $data_base->prepare("delete from persona where ci=:ci");
		$query->bindValue(':ci',$_GET["ci"]);
		$query->execute();
		header("HTTP/1.1 200 borrado");
		exit;
	}
	//actualizamos datos psando el ci
	if($_SERVER["REQUEST_METHOD"]=="PUT"){
		$query="update persona set nombreCompleto='".$_GET['nombreCompleto']."',fechaNacimiento='".$_GET['fechaNacimiento']."', idDepartamento='".$_GET['idDepartamento']."'";
		$query.="where ci=".$_GET['ci'];
		$query = $data_base->prepare($query);
		$query->bindValue(':ci',$_GET["ci"]);
		$query->bindValue(':nombreCompleto',$_GET["nombreCompleto"]);
		$query->bindValue(':fechaNacimiento',$_GET["fechaNacimiento"]);
		$query->bindValue(':idDepartamento',$_GET["idDepartamento"]);
		$query->execute();
		exit;
	}
?>