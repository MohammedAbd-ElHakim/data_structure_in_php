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
$a4 = new Node(7);
$new_list5 = InsertNode::insertNode($list, NewNode: $a4);
// $a6 = new Node('g');
// $new_list6 = InsertNode::insertNode($list, NewNode: $a6);
// $a7 = new Node('h');
// $new_list7 = InsertNode::insertNode($list, NewNode: $a7);
// $a8 = new Node('i');
// $new_list8 = InsertNode::insertNode($list, NewNode: $a8);
// $a9 = new Node('j');
// $new_list9 = InsertNode::insertNode($list, NewNode: $a9);
// $a10 = new Node('k');
// $new_list10 = InsertNode::insertNode($list, NewNode: $a10);

DisplayNodes::DisplayNodes($list);
echo "<br> now we will git the mid of the list should by F";
$mid_of_linked_list = ReverseALinkedListInGroups::reverse1($list, 3);
// echo "<br> the mid is : " . $mid_of_linked_list;
?>