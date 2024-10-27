<?php
include_once 'Autoload.php';

class LongestValidParenthesesSubstring
{
    public static function startCount(string $str, LinkedList $stack)
    {
        $countOfvalidPrenthes = 0;
        #first element is not greater than other elements of the subarray.
        for ($i = 0; $i < strlen($str); $i++) {
            if ($str[$i] == '(') {
                push::push($stack, new Node($str[$i]));
            }
        }

        for ($i = 0; $i < strlen($str); $i++) {
            if ($stack->head !== null) {
                if (peek::peek($stack) && $str[$i] == ')') {
                    pop::pop($stack);
                    $countOfvalidPrenthes++;
                }
            }
        }

        return $countOfvalidPrenthes * 2;
    }
}

?>