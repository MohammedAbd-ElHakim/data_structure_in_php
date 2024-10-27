<?php
include_once 'Autoload.php';

class TheStockSpanProblem
{
    public static function calculate(array $prices, LinkedList $result, $n)
    {
        $spans = array();
        for ($i = 0; $i < count($prices); $i++) {
            $currPrice = $prices[$i];
            $span = 1;
            for ($n = $i - 1; $n >= 0; $n--) {
                $prevPrice = $prices[$n];
                if ($prevPrice < $currPrice) {
                    $span++;
                }
                if ($prevPrice > $currPrice) {
                    break;
                }
            }
            push::push($result, new Node($span));
        }
    }
}

?>