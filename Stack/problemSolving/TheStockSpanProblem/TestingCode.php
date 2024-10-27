<?php
include_once 'Autoload.php';

$result = new LinkedList();
$prices = [10, 4, 5, 90, 120, 80];
echo "<br>numbers : ";
echo "
<pre>";
print_r($prices);
echo "</pre>";

TheStockSpanProblem::calculate($prices, $result, 7);
echo "<br>result : ";
Displayer::display($result);
?>