<?php
include_once 'Autoload.php';

class PostfixToPrefixConversion
{
    public static function convertPostFixToPreFix(string $str, LinkedList $result)
    {
        for ($i = 0; $i < strlen($str); $i++) {
            if (self::isOperator($str[$i]) && $result !== null) {
                if (PostfixToPrefixConversion::size($result) < 2) {
                    break;
                }
                $operand1 = peek::peek($result);
                pop::pop($result);
                $operand2 = peek::peek($result);
                pop::pop($result);
                $s = $str[$i] . $operand2 . $operand1;
                $result = Push::push($result, new Node($s));
            } else {
                #add operand to the stack
                $result = push::push($result, new Node($str[$i]));
            }
        }
        if (PostfixToPrefixConversion::size($result) > 0) {
            echo "<br>Prefix: " . $result->head->data; // طباعة العنصر العلوي
        }

        return $result;

    }

    public static function isOperator($char)
    {
        return in_array($char, ['+', '-', '/', '*']);
    }

    public static function size(LinkedList $stack)
    {
        $count = 0;
        $curr = $stack->head;
        while ($curr != null) {
            $count++;
            $curr = $curr->next;
        }
        return $count;
    }
}

?>