<?php
include_once './AutoLoaded.php';


$n = new Node(1);
$list = new LinkedList($n);
$s = new Node(2);
$new_list = InsertNode::insertNode($list, NewNode: $s);
$a = new Node(3);
$new_list2 = InsertNode::insertNode($list, NewNode: $a);
$a2 = new Node(4);
$new_list7 = InsertNode::insertNode($list, NewNode: $a2);
$a3 = new Node(5);
$new_list9 = InsertNode::insertNode($list, NewNode: $a3);

#start delete
echo "<br> linked list before convert it circular :";
DisplayNodes::DisplayNodes($list);
$circularLinkedLiist = ConvertSinglyLinkedListIntoCircularLinkedList::concertToCircular($list);
echo "<br>linkedList after convert to circular ";
$curr2 = $circularLinkedLiist->head;
do {
    # code...
    echo "<br>" . $curr2->data;
    $curr2 = $curr2->next;
} while ($curr2 != $circularLinkedLiist->head);
echo "<br>" . $curr2->data;
echo "<br>.";
echo "<br>.";
echo "<br>.";
?>