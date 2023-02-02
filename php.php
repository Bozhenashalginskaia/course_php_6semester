<?php
$product1 = "чайник" ;
$product2 = "кофейник";
$product3 = "кипятильник";
$price1 = 300;
$price2 = 150;
$price3 = 500;
echo <<<HTML
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-f79y{background-color:#ffccc9;border-color:inherit;font-weight:bold;text-align:center;vertical-align:top}
.tg .tg-90e1{background-color:#ffccc9;border-color:inherit;text-align:left;vertical-align:top}
</style>
<table class="tg">
<thead>
  <tr>
    <th class="tg-f79y">Товары</th>
    <th class="tg-f79y">Цена</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-90e1"><?php>$product1<?></td>
    <td class="tg-90e1"><?php>$price1<?></td>
  </tr>
  <tr>
    <td class="tg-90e1"><?php>$product2<?></td>
    <td class="tg-90e1"><?php>$price2<?></td>
  </tr>
  <tr>
    <td class="tg-90e1"><?php>$product3<?></td>
    <td class="tg-90e1"><?php>$price3<?></td>
  </tr>
</tbody>
</table>
HTML;

if ($price1 > $price2) {
    $max_price = $price1;
    $max_product = $product1;
}
else {
    $max_price = $price2;
    $max_product = $product2;
}
if ($max_price>$price3)
    echo " самый дорогой $max_product, он стоит $max_price руб. <br>";
else {echo "$product3 стоит $price3 руб <br>";}

function maxi($price1, $price2, $product1, $product2,)
{
    if ($price1 > $price2) {
        $max_price = $price1;
        $max_product = $product1;
    } else {
        $max_price = $price2;
        $max_product = $product2;
    }
    return $max_price;
}
echo  "самый дорогой товар ".maxi(500, 400, 200, 100 ) ." руб";

$price_year = 100;

for($i = 0; $price_year < 150; $i++) {
    if(!$i) {
        $price_year += $price_year*0.1;
        echo "В конце года будет: ".$price_year . "руб. <br/>";
    } else {
        $price_year += $price_year*0.035;
        echo "Через $i года: " .$price_year . "руб . <br/>";
    }
}
//arraylist

$fruits = array("яблоко", "груша", "слива", "абрикос", "вишня");
$fruits[5] = "черешня";
$fruits[6] = "виноград";
for ($i=0; $i<= count($fruits);$i++){
    echo $fruits[$i];
}
echo count($fruits );
echo sort($fruits);

// Задание 6
$product['Чайник'] = "350";
$product['Кипятильник'] = "300";
$product['Чашка'] = "120";
$product_1 = array("Самовар"=>"550", "Тарелка"=>"100");

foreach ($product as $product_1) {
    for ($i=0; $i<= count($product);$i++){
        echo $product[$i];
}
}



