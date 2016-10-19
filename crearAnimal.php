<!DOCTYPE html>
<html>
<head>
	<title>seters de animales</title>
</head>
<body>
<?php

	//realizo el include:

	include "animal.php";


	//clase hecha y incluida; genero $animal=new animal && seteo lo nuevo, pido get, hecho $animal1-> tipo
	$animal = new animal();
	$animal->settipo("cienpies");
	$animal->gettipo();
	echo $animal->tipo;

	$animal = new animal();
	$animal->setpatas(100);
	$animal->getpatas();
	echo $animal->patas;

	echo "<br>"; //* Esto es un salto de linea

	//genero otro animal, $animal2 = new animal, set, get, Y CONFIRMO ECHO $ANIMAL2->TIPO               $ANIMAL2->PATAS

	$animal2 = new animal();
	$animal2->settipo("araña");
	$animal2->gettipo();
	echo $animal2->tipo;

	$animal2= new animal();
	$animal2->setpatas(8);
	$animal2->getpatas();
	echo $animal2->patas;

?>
</body>
</html>