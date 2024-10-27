<?php
include_once 'Autoload.php';

$result = new LinkedList(new Node());
$str = 'A+B*C+D';

echo "<br>infix expression : " . $str;

$reverseStr = ConvertInfixExpressionToPostfixExpression::convert($str, $result);
echo "<br>post expression : " . $reverseStr;
?>