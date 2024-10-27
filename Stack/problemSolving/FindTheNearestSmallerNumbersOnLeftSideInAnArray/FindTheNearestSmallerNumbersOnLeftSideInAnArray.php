<?php
include_once 'Autoload.php';

class FindTheNearestSmallerNumbersOnLeftSideInAnArray
{
    public static function start(array $numbers, LinkedList $result)
    {
        for ($i = 0; $i <= count($numbers) - 1; $i++) {
            $prevNumber = $numbers[$i];
            $found = false;
            for ($n = $i; $n >= 0; $n--) {
                $nextNumber = $numbers[$n];
                if ($nextNumber < $prevNumber) {
                    $found = true;
                    $temp = $prevNumber . " -> " . $nextNumber;
                    push::push($result, new Node($temp));
                    $temp = null;
                    break;
                }
            }
            if (!$found) {
                $temp = $prevNumber . "_";
                push::push($result, new Node($temp));
                $temp = null;
            }
        }
    }
}

?>