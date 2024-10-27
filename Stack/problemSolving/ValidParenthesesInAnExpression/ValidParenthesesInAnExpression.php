<?php
include_once 'Autoload.php';

class ValidParenthesesInAnExpression
{
    public static function isParenthess(string $str, LinkedList $list)
    {

        for ($i = 0; $i < strlen($str); $i++) {
            if (
                strchr('(', $str[$i]) ||
                strchr('[', $str[$i]) ||
                strchr('{', $str[$i])
            ) {
                echo "<br>now will push : " . $str[$i];
                push::push($list, new Node($str[$i]));
            } elseif (
                Peek::peek($list) == '(' &&
                strchr(')', $str[$i]) ||
                Peek::peek($list) == '[' &&
                strchr(']', $str[$i]) ||
                Peek::peek($list) == '{' &&
                strchr('}', $str[$i])
            ) {
                echo "<br>now will pop : " . $str[$i];
                pop::pop($list);
            } else {
                echo "<br>now will peek : " . peek::peek($list);
                echo "<br> now will return false : " . $str[$i];
                return false;
            }
        }
        return self::isEmpty($list);
    }

    public static function isEmpty(LinkedList $list)
    {
        return $list == null;
    }
}

?>