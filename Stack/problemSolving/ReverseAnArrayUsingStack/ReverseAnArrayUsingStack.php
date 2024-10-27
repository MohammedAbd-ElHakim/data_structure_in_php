<?php
include_once 'Autoload.php';

class ReverseAnArrayUsingStack
{
    public static function startReverse(array $arr, LinkedList $result)
    {
        for ($i = 0; $i <= count($arr) - 1; $i++) {
            $currData = $arr[$i];
            Push::push($result, new Node($currData));
        }

        return $result;
    }
}

?>