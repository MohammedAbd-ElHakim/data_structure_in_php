<?php
include_once 'Autoload.php';

class ReverseIndividualWords
{
    public static function StartReverse(string $str, LinkedList $result)
    {

        for ($i = 0; $i <= strlen($str) - 1; $i++) {
            $currChar = $str[$i];
            push::push($result, new Node($currChar));
        }
        return $result;
    }
}

?>