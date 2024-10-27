<?php
include_once 'Autoload.php';

class FindIndexOfClosingBracketForAGivenOpeningBracketInAnExpression
{
    public static function findItNow(string $str, LinkedList $stack, $index)
    {
        $indexOfCLothingPranthes = -1;
        #first element is not greater than other elements of the subarray.
        for ($i = 0; $i < strlen($str); $i++) {
            if ($str[$i] == '[' && $i == $index) {
                push::push($stack, new Node($str[$i]));
            } elseif ($i == $index && $str[$i] !== '[') {
                return -1;
            }
        }

        for ($j = $index + 1; $j < strlen($str); $j++) {
            if (peek::peek($stack) == '[' && $str[$j] == ']') {
                pop::pop(stack: $stack);
                return $j;
            }
        }
        return $indexOfCLothingPranthes;
    }
}

?>