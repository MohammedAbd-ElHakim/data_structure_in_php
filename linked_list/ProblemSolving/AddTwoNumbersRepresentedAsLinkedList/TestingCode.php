<?php
include_once './AutoLoaded.php';


$n = new Node(data: 5);
$list = new LinkedList($n);
$s = new Node(5);
$new_list = InsertNode::insertNode($list, NewNode: $s);
// $a = new Node(3);
// $new_list2 = InsertNode::insertNode($list, NewNode: $a);
// $a2 = new Node(9);
// $new_list7 = InsertNode::insertNode($list, NewNode: $a2);
// $a3 = new Node(5);
// $new_list9 = InsertNode::insertNode($list, NewNode: $a3);

$n1 = new Node(5);
$list1 = new LinkedList($n1);
$s1 = new Node(4);
$new_list1 = InsertNode::insertNode($list1, NewNode: $s1);
$a1 = new Node(9);
$new_list12 = InsertNode::insertNode($list1, NewNode: $a1);
// $a21 = new Node(7);
// $new_list17 = InsertNode::insertNode($list1, NewNode: $a21);
// $a13 = new Node(7);
// $new_list19 = InsertNode::insertNode($list1, NewNode: $a13);

#start delete
echo "<br>first list : ";
DisplayNodes::DisplayNodes($list);
echo "<br>first list1 : ";
DisplayNodes::DisplayNodes($list1);
$circularLinkedLiist = AddTwoNumbersRepresentedAsLinkedList::sum($list, $list1);
// echo "<br>linkedList after convert to circular ";
// $curr2 = $circularLinkedLiist->head;
// do {
//     # code...
//     echo "<br>" . $curr2->data;
//     $curr2 = $curr2->next;
// } while ($curr2 != $circularLinkedLiist->head);

?>