<?php

include_once "./backend.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Заказ</title>
</head>

<body>
	<h1>Ваш заказ принят</h1>
	<p>Вы заказали:</p>
<?php
	$pizza = $_POST['pizza'];
	$souce = $_POST['souce'];
	$size = $_POST['size'];

	$txt=<<<MYTEXT
	<ul>
		<li>Пицца: $pizza</li>
		<li>Соус: $souce</li>
		<li>Размер: $size см</li>
	</ul>
	MYTEXT;

	echo $txt;
	
    foreach ($pizzas as $key) {
   		if($key['name']===$pizza){
   			$pizzaPrice = $key['price'];
        }
   	}
	
    foreach ($sauces as $key) {
   		if($key['name']===$souce){
   			$soucePrice = $key['price'];
        }
   	}
	
    foreach ($sizes as $key) {
   		if($key['size']===$size){
   			$sizePrice = $key['price'];
        }
   	}

   	$sumPriceUsd = $pizzaPrice + $soucePrice + $sizePrice;

   	$json = file_get_contents('https://www.nbrb.by/api/exrates/rates/431');
   	$jsonDecode = json_decode($json, true);
   	$blrSum = round($sumPriceUsd * $jsonDecode['Cur_OfficialRate'], 2);
   	

	echo "<p>К оплате: $blrSum рублей</p>";
?>	
	
</body>
</html>