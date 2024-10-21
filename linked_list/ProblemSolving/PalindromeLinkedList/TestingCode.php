<?php
include_once './AutoLoaded.php';


#first list
$n = new Node(1);
$list = new LinkedList($n);
$s = new Node(2);
$new_list = InsertNode::insertNode($list, NewNode: $s);
$a = new Node(1);
$new_list2 = InsertNode::insertNode($list, NewNode: $a);
$aq = new Node(1);
$new_list3 = InsertNode::insertNode($list, NewNode: $aq);
$aq1 = new Node(2);
$new_list4 = InsertNode::insertNode($list, NewNode: $aq1);
$aq1 = new Node(1);
$new_list4 = InsertNode::insertNode($list, NewNode: $aq1);

echo "<br> linked list :";
DisplayNodes::DisplayNodes($list);
$isPalidrome = PalindromeLinkedList::isPalidrome($list);
if ($isPalidrome) {
    echo "<br> yes its palindrome linked list";
} else {
    echo "<br>No its not palindrome";
}

?>