<?php
include_once './AutoLoaded.php';

#list
$n = new Node(3);
$list = new LinkedList($n);
$s = new Node(6);
$new_list = InsertNode::insertNode($list, NewNode: $s);
$a = new Node(9);
$new_list2 = InsertNode::insertNode($list, NewNode: $a);
$a2 = new Node(15);
$new_list3 = InsertNode::insertNode($list, NewNode: $a2);
$a3 = new Node(30);
$new_list4 = InsertNode::insertNode($list, NewNode: $a3);

#list1
$n = new Node(10);
$list1 = new LinkedList($n);
$s = new Node(15);
$new_list = InsertNode::insertNode($list1, NewNode: $s);
$a = new Node(30);
$new_list2 = InsertNode::insertNode($list1, NewNode: $a);


echo "<br> first linked list";
DisplayNodes::DisplayNodes($list);
echo "<br> second linked list";
DisplayNodes::DisplayNodes($list1);

$intersectionNode = FunctionToGetTheIntersSectionPointOfTwoLinkedLists::GetInterSectionNode($list, $list1);
echo "<br> intersection Node is : ";
if (!$intersectionNode) {
    echo "<br> doesnot have intersection node";
} else {
    while ($intersectionNode != null) {
        # code...
        echo "<br>" . $intersectionNode->data;
        $intersectionNode = $intersectionNode->next;
    }
}


?>