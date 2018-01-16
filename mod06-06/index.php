<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="IE=Edge">
 <title>PHP Activity - Part 2</title>
</head>
<body>
 
  
 <style type="text/css">
  .box {
   display: inline-block;
   width: 30px;
   height: 30px;
  }
  .black-box {
   background-color: black;
  } 
  .white-box {
   background-color: white;
  }
  table, th, tr, td {
   border: 1px solid black;
   padding: 5px;
   border-collapse: collapse;
  }
  th {
   color: white;
   background-color: black;
  }
 </style>
 
 <?php
 // Activity 1
 for ($row = 1; $row <= 8; $row++) {
  for ($col = 1; $col <= 8; $col++) {
   $total = $row + $col;
   if ($total % 2 == 0) {
    echo '<span class = "box black-box"></span>';
   } else
    echo '<span class = "box white-box"></span>';
  } echo '<br>';
 }
 // Activity 2
 $a = 1;
 $b = 2;
 echo 'Numbers before swap: <br>';
 echo '$a = ' . $a . '<br>';
 echo '$b = ' . $b . '<br>';

 // Swap
 $temp = $a;
 $a = $b;
 $b = $temp;
 echo 'Numbers after swap: <br>';
 echo '$a = ' . $a . '<br>';
 echo '$b = ' . $b . '<br>';

 // Activity 3
 $a = 2;
 $b = 3;
 echo 'Numbers before swap: <br>';
 echo '$a = ' . $a . '<br>';
 echo '$b = ' . $b . '<br>';

 // Swap
 $a = $a + $b;
 $b = $a - $b;
 $a = $a - $b;
 echo 'Numbers after swap: <br>';
 echo '$a = ' . $a . '<br>';
 echo '$b = ' . $b . '<br>';
 $colors = ["red", "green", "blue"];
 $arrlength = count($colors);
 for ($x = 0; $x < $arrlength; $x++) {
  echo $colors[$x] . '<br>';
 }
 $age = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];
 foreach ($age as $arr_key => $arr_value) {
  echo "Key=" . $arr_key . ", Value=" . $arr_value . '<br>';
 }
 $ages = [
  'Ash' => 21,
  'Misty' => 22,
  'Brock' => 23
 ];
 foreach ($ages as $key => $age) {
  echo 'The age of ' . $key . ' is ' . $age . '<br>';
 } 
 $team_ironman = ["Tony", "War Machine", "Vision"];
 $team_cap = ["Cap America", "Bucky", "Hawkeye", "Falcon"];
 $civil_war = [$team_ironman, $team_cap];
 echo $civil_war [0][0] . '<br>';
 echo $civil_war [1][0] . '<br>';
 echo $civil_war [0][2] . '<br>';
 echo $civil_war [1][1] . '<br>';
 
 $items = [
  ['product' => 'Lenovo Laptop', 'price' => 600.00, 'quantity' => 100], 
  ['product' => 'ASUS tablet', 'price' => 100.00, 'quantity' => 10],
  ['product' => 'Acer all-in-one', 'price' => 300.00, 'quantity' => 50],
  ['product' => 'HP Laptop', 'price' => 400.00, 'quantity' => 1],
  ['product' => 'Dell desktop', 'price' => 300.00, 'quantity' => 20],
 ];
 ?>
 
 <ul>
  <?php
   foreach ($items as $item) {
    echo '<li>' . $item['product'] . '</li>';
   }
  ?>
 </ul>

 <ul>
  <?php
   foreach ($items as $item) {
    echo '<li>' . $item['price'] . '</li>';
   }
  ?>
 </ul>
 <ul>
  <?php
   foreach ($items as $item) {
    echo '<li>' . $item['quantity'] . '</li>';
   }
  ?>
 </ul>
 <hr>
 <table>
  <thead>
   <th>Products</th>
   <th>Prices</th>
   <th>Quantity</th>
  </thead>
  <tbody>
   <?php
    foreach ($items as $value) {
     echo '<tr>';
     echo '<td>' . $value['product'] . '</td>';
     echo '<td>' . $value['price'] . '</td>';
     echo '<td>' . $value['quantity'] . '</td>';
     echo '</tr>';
    }
   ?>
  </tbody>
 </table>
</body>
</html>
