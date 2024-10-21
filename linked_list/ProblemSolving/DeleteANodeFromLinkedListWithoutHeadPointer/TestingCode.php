<?php
include_once './AutoLoaded.php';


$n = new Node(35);
$list = new LinkedList($n);
$s = new Node(15);
$new_list = InsertNode::insertNode($list, NewNode: $s);
$a = new Node(4);
$new_list2 = InsertNode::insertNode($list, NewNode: $a);
$a2 = new Node(20);
$new_list7 = InsertNode::insertNode($list, NewNode: $a2);

$del = $list->head->next->next; #4

echo "<br> before delete any node : ";
$curr = $list->head;
do {
    # code...
    echo "<br>" . $curr->data;
    $curr = $curr->next;
} while ($curr != null);

#start delete
$l = DeleteANodeFromLinkedListWithoutHeadPointer::delete($del);
echo "<br> after delete a node without head pointer";
$curr2 = $list->head;
do {
    # code...
    echo "<br>" . $curr2->data;
    $curr2 = $curr2->next;
} while ($curr2 != null);
?>