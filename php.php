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
// 5 задание доделать
/*$fruits = array("яблоко", "груша", "слива", "абрикос", "вишня");
$fruits[5] = "черешня";
$fruits[6] = "виноград";
for ($i=0; $i<= count($fruits);$i++){
    echo $fruits[$i];
}
*/
//echo count($fruits. " ");
//echo sort($fruits);

// Задание 6
$product["Чайник"] = "350";
$product["Кипятильник"] = "300";
$product["Чашка"] = "120";
$product_2 = array("Самовар"=>"550", "Тарелка"=>"100");

//разобраться почему вывод протянка
// используем в foreach ключ для вывода названия
foreach ($product as $i => $value) {
    echo $i . " = ". $value. "<br /> ";
    sort($product);
}
// sort
// Создадим ф-цию для подсчета суммарной стоимости
$product_3 = 0;
foreach ($product as $count) {
    $product_3 += $count;
 }
echo "Cуммарная стоимость товаров:" . $product_3 . "<br />";
// как подсчитать товары?
// через ф-цию  array_filter, которая реализует подсчет кол-ва значений в массиве
$filled_array=array_filter($product);// will return only filled values
$count=count($filled_array);
echo "Кол-во товаров: " . $count. "<br />";// returns array count

// ф-ции asort()возрастания and arsort()уменьшения

asort($product);
foreach ($product as $key => $value) {
    echo "Сортировка массивов по возрастанию:"."$key = $value \n" . "<br />";
}
arsort($product);
foreach ($product as $key => $value) {
    echo "Убывание массива:" . "$key = $value \n" . "<br />";
}
// отсортироать по ключу
ksort($product);
foreach ($product as $key => $val) {
    echo "Сортировка по ключу: " ."$key = $val\n" . "<br />";
}
krsort($product);
foreach ($product as $key => $val) {
    echo "Сортировка по ключу по убыванию: " ."$key = $val\n" . "<br />";
}

// Задание 7

echo <<< HTML
<h1>  Информация о разработчике </h1>
<h3>ФИО: Шалгинская Божена Игоревна</h3>
<h3>Возраст: 19 лет</h3>
<h3>Навыки: HTML вёрстка, веб-дизайн, JS, CSS, PHP</h3>
HTML;

// Задание 8
// Таблица цветов, как рееализовать через ф-ции?
echo '<table border=1>';
for ($i=0; $i<=255; $i += 50)
{
    echo '<tr>';

    for ($j=0; $j<=255; $j += 50)
    {
        for ($k=0; $k<=255; $k += 50)
        {
            echo '<td style="background-color:RGB('.$i.', '.$j.', '.$k.');"> rgb('.$i.', '.$j.', '.$k.')</td>';
        }
    }

    echo '</tr>';
}
echo'</table>';

// Задание 9
$n = 100;
$min = 0;
$max = 100;
while(($number = rand($min, $max)) >= $n){echo "Генерация случайных чисел: ". $number;}

echo rand(1, 100);

