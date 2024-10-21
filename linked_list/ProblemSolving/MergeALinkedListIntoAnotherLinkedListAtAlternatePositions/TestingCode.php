<?php
include_once './AutoLoaded.php';


#first list
$n = new Node(1);
$list = new LinkedList($n);
$s = new Node(2);
$new_list = InsertNode::insertNode($list, NewNode: $s);
$a = new Node(3);
$new_list2 = InsertNode::insertNode($list, NewNode: $a);
$aq = new Node(4);
$new_list2 = InsertNode::insertNode($list, NewNode: $aq);
$aq1 = new Node(5);
$new_list2 = InsertNode::insertNode($list, NewNode: $aq1);
$n22 = new Node(111);
$list = new LinkedList($n);
$sss = new Node(222);
$new_list = InsertNode::insertNode($list, NewNode: $sss);
$aaa = new Node(333);
$new_list2 = InsertNode::insertNode($list, NewNode: $aaa);
$aqqq = new Node(444);
$new_list2 = InsertNode::insertNode($list, NewNode: $aqqq);
$aq111 = new Node(555);
$new_list2 = InsertNode::insertNode($list, NewNode: $aq111);
$aq1111 = new Node(777);
InsertNode::insertNode($list, NewNode: $aq1111);

#second list
$n1 = new Node(6);
$listOne = new LinkedList($n1);
$s1 = new Node(7);
$new_list1 = InsertNode::insertNode($listOne, NewNode: $s1);
$a1 = new Node(8);
$new_list2 = InsertNode::insertNode($listOne, NewNode: $a1);
$a2 = new Node(9);
$new_list3 = InsertNode::insertNode($listOne, NewNode: $a2);
$a3 = new Node(10);
$new_list5 = InsertNode::insertNode($listOne, NewNode: $a3);
$a4 = new Node(11);
$new_list5 = InsertNode::insertNode($listOne, NewNode: $a4);
$a7 = new Node(12);
$new_list5 = InsertNode::insertNode($listOne, NewNode: $a7);
$a17 = new Node(13);
$new_list5 = InsertNode::insertNode($listOne, NewNode: $a17);
$a19 = new Node(14);
$new_list5 = InsertNode::insertNode($listOne, NewNode: $a19);
$a21 = new Node(17);
$new_list5 = InsertNode::insertNode($listOne, NewNode: $a21);

echo "<br> first list :";
DisplayNodes::DisplayNodes($list);
echo "<br> second list :";
DisplayNodes::DisplayNodes($listOne);
$newList7 = MergeALinkedListIntoAnotherLinkedListAtAlternatePositions::mergeDifrSize($list, $listOne);
// echo "<br> this is new linked list after merge : ";
// DisplayNodes::DisplayNodes($newList7);

?>