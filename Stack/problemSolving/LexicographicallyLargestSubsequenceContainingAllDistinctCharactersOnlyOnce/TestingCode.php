<?php
include_once 'Autoload.php';

$result1 = new LinkedList();
$result = new LinkedList();
$str = 'ababc';
echo "<br>str : " . $str;

LexicographicallyLargestSubsequenceContainingAllDistinctCharactersOnlyOnce::start($str, $result);
// echo "<br>result : ";
$arr = [];
$c = $result->head;
while ($c != null) {
    $arr[] = $c->data;
    $c = $c->next;
}
$reverseArr = array_reverse($arr);
$str2 = implode('', $reverseArr);
echo "<br>result : " . $str2;

?>