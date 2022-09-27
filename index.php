<?php

require_once "./backend.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Меню</title>
</head>

<body>
  <form action="/order.php" method="post">
    <label for="pizza">Выберите пиццу</label>
    <select name="pizza" id="pizza">
      <?php 
      foreach ($pizzas as $key) {
        echo "<option value=\"{$key['name']}\">{$key['name']}</option>";
      }
      ?>
    </select></br></br>

    <label for="size">Выберите размер</label>
    <select name="size" id="size">
      <?php 
      foreach ($sizes as $key) {
        echo "<option value=\"{$key['size']}\">{$key['size']}</option>";
      }
      ?>
    </select></br></br>

    <label for="souce">Выберите соус</label>
    <select name="souce" id="souce">
      <?php 
      foreach ($sauces as $key) {
        echo "<option value=\"{$key['name']}\">{$key['name']}</option>";
      }
      ?>
    </select></br></br>

    <button type="submit" >Заказать</button>
  </form>

</body>
</html>






	