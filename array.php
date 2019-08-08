<!DOCTYPE html>
<html>
<head>
	<title>Array Asociativo</title>
</head>
<body>

<?php

	$alimentos=array("fruta"=>array("kiwi",
					 				"citrico"=>"mandarina",
					 				"otros"=>"manzana"),
					"leche"=>array("animal"=>"vaca",
									"vegetal"=>"coco"),
					"carne"=>array("vacuno"=>"lomo",
									"porcino"=>"pata"));

	echo "El array contiene: " . $alimentos["carne"]["vacuno"];



?>

</body>
</html>