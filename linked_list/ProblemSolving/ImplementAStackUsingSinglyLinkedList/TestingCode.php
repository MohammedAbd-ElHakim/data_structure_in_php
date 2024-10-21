<?php
include_once './AutoLoaded.php';


$n = new Node('A');
$list = new LinkedList($n);
$s = new Node("B");
$new_list = InsertNode::insertNode($list, NewNode: $s);
$a = new Node('C');
$new_list2 = InsertNode::insertNode($list, NewNode: $a);
$a2 = new Node('D');
$new_list3 = InsertNode::insertNode($list, NewNode: $a2);
$a3 = new Node('E');
$new_list4 = InsertNode::insertNode($list, NewNode: $a3);
$a4 = new Node('F');
$new_list5 = InsertNode::insertNode($list, NewNode: $a4);
$a6 = new Node('g');
$new_list6 = InsertNode::insertNode($list, NewNode: $a6);
$a7 = new Node('h');
$new_list7 = InsertNode::insertNode($list, NewNode: $a7);
$a8 = new Node('i');
$new_list8 = InsertNode::insertNode($list, NewNode: $a8);
$a9 = new Node('j');
$new_list9 = InsertNode::insertNode($list, NewNode: $a9);
$a10 = new Node('k');
$new_list10 = InsertNode::insertNode($list, NewNode: $a10);

echo "<br> orginal linked list before any operation : ";
DisplayNodes::DisplayNodes($new_list8);
echo "<br> linked list after pop or remove first node A";
$listAfterPop = ImplementAStackUsingSinglyLinkedList::pop($list);
ImplementAStackUsingSinglyLinkedList::display($list);
echo "<br> linked list after push or add 777";
$afterPush = ImplementAStackUsingSinglyLinkedList::push($list, new Node(777));
ImplementAStackUsingSinglyLinkedList::display($afterPush);

echo "<br> linked list peek or first node of linked list";
$peekFirstNode = ImplementAStackUsingSinglyLinkedList::peek($list);
echo "<br>peekFirstNode : " . $peekFirstNode;

?>