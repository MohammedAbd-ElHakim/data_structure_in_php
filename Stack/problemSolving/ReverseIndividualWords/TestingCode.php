<?php
include_once 'Autoload.php';

$result = new LinkedList(new Node());
$str = 'Hello World';

echo "<br>orginal str before reverse : " . $str;

echo "<br>after reverse str : ";
$reverseArr = ReverseIndividualWords::StartReverse($str, $result);
$curr = $result->head;
while ($curr !== null) {
    echo $curr->data;
    $curr = $curr->next;
}
?>