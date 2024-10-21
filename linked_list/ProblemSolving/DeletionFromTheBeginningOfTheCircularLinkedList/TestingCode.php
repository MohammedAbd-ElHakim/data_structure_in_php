<?php
include_once './AutoLoaded.php';


$n = new Node(1);
$list = new LinkedList($n);
$s = new Node(3);
$new_list = InsertNode::insertNode($list, NewNode: $s);
$a = new Node(4);
$new_list2 = InsertNode::insertNode($list, NewNode: $a);
$a2 = new Node(5);
$new_list3 = InsertNode::insertNode($list, NewNode: $a2);
$a3 = new Node(6);
$new_list4 = InsertNode::insertNode($list, NewNode: $a3);
$a4 = new Node(7);
$new_list5 = InsertNode::insertNode($list, NewNode: $a4);
$a6 = new Node(8);
$new_list6 = InsertNode::insertNode($list, NewNode: $a6);
// $a7 = new Node(9);
// $new_list7 = InsertNode::insertNode($list, NewNode: $a7);
// $a8 = new Node('i');
// $new_list8 = InsertNode::insertNode($list, NewNode: $a8);
// $a9 = new Node('j');
// $new_list9 = InsertNode::insertNode($list, NewNode: $a9);
// $a10 = new Node('k');
// $new_list10 = InsertNode::insertNode($list, NewNode: $a10);
$curr = $list->head;
while ($curr->next != null) {
    $curr = $curr->next;
}
$curr->next = $list->head;


echo "<br> before Deletion any node : ";
$curr = $list->head;
do {
    # code...
    echo "<br>" . $curr->data;
    $curr = $curr->next;
} while ($curr != $list->head);
echo "<br>" . $curr->data;
echo "<br>.";
echo "<br>.";
echo "<br>.";

#delete begining node from circular linked list
// echo "<br> after DeletionFromTheBeginningOfTheCircularLinkedList";
// $afterDeleteFirstNode = DeletionFromTheBeginningOfTheCircularLinkedList::delete($list);

#delete specific node from circular linked list
// $ListAfterDeletedNode = DeletionFromTheBeginningOfTheCircularLinkedList::deleteSpecificNodeFromCircularLinkedList($list, 1);
// echo "<br> after deleteSpecificNodeFromCircularLinkedList";
// $curr1 = $ListAfterDeletedNode->head;
// do {
//     # code...
//     echo "<br>" . $curr1->data;
//     $curr1 = $curr1->next;
// } while ($curr1 != $list->head);

#delete the last node from circular linked list
echo "<br> after delete the last node from circular linked list";
$l = DeletionFromTheBeginningOfTheCircularLinkedList::deleteAtTheEndOfCircularLinkedList($list);

echo "<br> iii after delete the last node from circular linked list";
$curr2 = $l->head;
do {
    # code...
    echo "<br>" . $curr2->data;
    $curr2 = $curr2->next;
} while ($curr2 != $l->head);
?>