<?php
include_once 'Autoload.php';

$stack = new LinkedList();
$str = '[ABC[23]][89]';
echo "<br>str : " . $str;

$indexIs = FindIndexOfClosingBracketForAGivenOpeningBracketInAnExpression::findItNow($str, $stack, 1);
echo "<br>indexIs : " . $indexIs;
?>