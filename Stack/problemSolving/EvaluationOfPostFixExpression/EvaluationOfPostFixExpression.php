<?php
include_once 'Autoload.php';

class EvaluationOfPostFixExpression
{
    public static function evalution(string $str, LinkedList $result)
    {
        for ($i = 0; $i <= strlen($str) - 1; $i++) {
            $currData = $str[$i];
            if (!self::isOperator($currData)) {
                push::push($result, new Node($currData));
            } else {
                $num = (int) peek::peek($result);
                pop::pop($result);
                $num1 = (int) peek::peek($result);
                pop::pop($result);
                $res = self::createOperation($currData, $num1, $num);
                push::push($result, new Node($res));
            }
        }
        return $result;
    }

    public static function isOperator($char)
    {
        return in_array($char, ['+', '-', '/', '*']);
    }
    public static function createOperation($char, $bigNum, $smallerNum)
    {
        switch ($char) {
            case '*':
                $result = $bigNum * $smallerNum;
                break;
            case '+':
                $result = $bigNum + $smallerNum;
                break;
            case '-':
                $result = $bigNum - $smallerNum;
                break;
            case '/':
                $result = $bigNum / $smallerNum;
                break;

            default:
                # code...
                break;
        }
        return $result;
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