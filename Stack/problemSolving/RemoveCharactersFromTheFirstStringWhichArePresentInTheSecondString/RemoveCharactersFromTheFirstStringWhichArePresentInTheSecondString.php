<?php
include_once 'Autoload.php';

class RemoveCharactersFromTheFirstStringWhichArePresentInTheSecondString
{
    public static function startRemove(string $str, string $str1, LinkedList $result)
    {
        for ($i = strlen($str) - 1; $i >= 0; $i--) {
            $currChar = $str[$i];
            if (!str_contains($str1, $currChar)) {
                Push::push($result, new Node($currChar));
            }
        }
        return $result;
    }
}

?>