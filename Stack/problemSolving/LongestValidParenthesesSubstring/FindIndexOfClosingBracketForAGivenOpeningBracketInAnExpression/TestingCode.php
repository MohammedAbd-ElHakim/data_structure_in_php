<?php
include_once 'Autoload.php';

$stack = new LinkedList();
$str = '((()';
echo "<br>str : " . $str;

$lengthOfValidPrathes = LongestValidParenthesesSubstring::startCount($str, $stack);
echo "<br>lengthOfValidPrathes : " . $lengthOfValidPrathes;
?>