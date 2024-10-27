<?php
include_once 'Autoload.php';

$roundStack = new LinkedList();
$squareStack = new LinkedList();
$str = '([)(])';
echo "<br>str : " . $str;

$finalSize = MinimizeLengthByRemovingSubsequencesFormingValidParenthesisFromAGivenString::start($str, $roundStack, $squareStack);
echo "<br>final size : " . $finalSize;
?>