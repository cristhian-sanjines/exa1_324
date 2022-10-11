<?php
	//Para que podamos usar css
	header("Content-Type: text/css; charset: UTF-");

	$colorPrincipal = "white";
	$alineacion = "center";
	$margenTabla = "0 auto";
	$left = "left";
	$collapse = "collapse";
	$border = "solid 2px black";
	$_t2 = "50%";
	$_t1 = "25%";
	$_10px = "10px";
	$_0px = "0px";
	$blue = "blue";
	$white = "white";
?>
*{
	margin: <?php echo $_0px ?>;
	padding:<?php echo $_0px ?> ;
}

body{
	text-align: <?php echo $alineacion?>;
}

table{
	width: <?php echo $_t2 ?>;
	text-align: <?php echo "center" ?>;
	border-collapse: <?php echo $collapse ?>;
	margin: <?php echo $margenTabla ?>;
}

th, td{
	border: <?php echo $border ?>;
	padding: <?php echo "10px"?>;
}


.title_column{
	text-align: <?php echo "center"?>;
}


#bienvenida{
	padding: <?php echo "20px" ?>;
	color: <?php echo "red" ?>;
	font-size: <?php echo "20px"?>;
}

thead{
	background-color: <?php echo "#246355"?>;
	border-bottom: <?php echo "solid 5px #0F262D"?>;
	color: <?php echo "white"?>;
	text-align:  <?php echo "center"?>;
}

tr:hover td{
	background-color:<?php echo "#369681"?>;
	color: <?php echo "white"?>;
}

a{
	text-decoration: <?php echo "none" ?>;
}

a:hover{
	color: <?php echo "red"?>;
}

#logoUmsa{
	margin: <?php echo "0px"?>;
}
img{
	margin: <?php echo "0"?>; 
	width: <?php echo "90px"?>;
	height: <?php echo "120px"?>;
	display: <?php echo "flex"?>;
	padding-left: <?php echo "20px"?>;
}

#tituloPrincipal{
	padding-left: <?php echo "15%" ?>;
	padding-right: <?php echo "10%" ?>;
}

header{
	margin: <?php echo "0px"?>;
	display: <?php echo "flex"?>;
	align-items: <?php echo "center"?>;
	padding: <?php echo "20px" ?>;
	background: <?php echo "#EE0202" ?>;
	background: <?php echo "-moz-linear-gradient(left, #EE0202 0%, <?php echo #100EBB 50%, #FFFFFF 100%)" ?>;
	background: <?php echo "-webkit-linear-gradient(left, #EE0202 0%, <?php echo #100EBB 50%, #FFFFFF 100%)" ?>;
	background: <?php echo "linear-gradient(to right, #EE0202 0%, #100EBB 50%, #FFFFFF 100%)" ?>;
	color: <?php echo $white ?>;
	font-size: <?php echo "40px" ?>;
}