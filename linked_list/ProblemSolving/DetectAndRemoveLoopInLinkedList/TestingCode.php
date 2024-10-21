<?php
include_once './AutoLoaded.php';


$n = new Node(1);
$list = new LinkedList($n);
$s = new Node(2);
$new_list = InsertNode::insertNode($list, NewNode: $s);
$a = new Node(3);
$new_list2 = InsertNode::insertNode($list, NewNode: $a);
$a2 = new Node(4);
$new_list3 = InsertNode::insertNode($list, NewNode: $a2);
$a3 = new Node(5);
$new_list4 = InsertNode::insertNode($list, NewNode: $a3);
$a4 = new Node(6);
$new_list5 = InsertNode::insertNode($list, NewNode: $a4);
$a6 = new Node(7);
$new_list6 = InsertNode::insertNode($list, NewNode: $a6);
$a7 = new Node(8);
$new_list7 = InsertNode::insertNode($list, NewNode: $a7);

$curr = $list->head;
while ($curr != null) {
    if ($curr->next == null) {
        $curr->next = $list->head->next->next;
        echo "<br>now will link this node : " . $curr->data;
        echo "<br>now will link this node : " . $curr->next->data;
        break;
    }
    $curr = $curr->next;
}

// $curr->next = $list->head;
echo "<br>next of head : " . $list->head->data;
echo "<br> this is the linked list ";
$curr7 = $list->head;
do {
    echo "<br>" . $curr7->data;
    $curr7 = $curr7->next;
} while ($curr7 != $list->head->next->next);
$isCycleLinkedList = DetectAndRemoveLoopInLinkedList::removeLoop($list);
?>