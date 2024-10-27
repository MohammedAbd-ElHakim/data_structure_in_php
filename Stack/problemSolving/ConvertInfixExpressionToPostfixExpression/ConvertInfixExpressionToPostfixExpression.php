<?php
include_once 'Autoload.php';

class ConvertInfixExpressionToPostfixExpression
{
    #Infix expression : a + b
    #Postfix expression : ab+
    public static function convert(string $str, LinkedList $result)
    {
        $result = '';
        $prevOperator = '';
        $stackOfOperator = new LinkedList();
        for ($i = 0; $i < strlen($str); $i++) {
            $currChar = $str[$i];
            if (!self::isOperator($currChar)) {
                $result .= $currChar;
            } else {
                while (
                    self::priorityOfLastOperatorInsideStack(peek::peek($stackOfOperator), $currChar) &&
                    $stackOfOperator->head !== null
                ) {
                    $result .= peek::peek($stackOfOperator);
                    pop::pop($stackOfOperator);
                }

                push::push($stackOfOperator, new Node($currChar));
            }
        }

        while ($stackOfOperator->head !== null) {
            $result .= peek::peek(stack: $stackOfOperator);
            pop::pop($stackOfOperator);
        }
        return $result;
    }

    public static function isOperator($char)
    {
        switch ($char) {
            case '+':
                return true;
            case '-':
                return true;
            case '*':
                return true;
            case '/':
                return true;
            default:
                return false;
        }
    }
    public static function priorityOfLastOperatorInsideStack($operatorCurrInStack, $currOperator)
    {
        if ($operatorCurrInStack == null || $currOperator == null) {
            return false;
        }
        $operatorsPriority = ['+' => 1, '-' => 1, '*' => 2, '/' => 2];
        return $operatorsPriority[$operatorCurrInStack] >= $operatorsPriority[$currOperator];
    }
}

?>