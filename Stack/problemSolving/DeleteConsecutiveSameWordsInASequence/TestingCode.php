<?php
include_once 'Autoload.php';

$list = new LinkedList(new Node());
pop::pop($list);
$str = "ab aa aa bcd ab";

echo "<br>before delete : " . $str;

$reverseStr = DeleteConsecutiveSameWordsInASequence::startDelete($str, $list);

$count = 0;
$curr = $list->head;
while ($curr != null) {
    echo "<br>curr : " . $curr->data;
    $count++;
    $curr = $curr->next;
}
echo "<br>after delete : " . $count;
?>