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
$aq1 = new Node(6);
$new_list22 = InsertNode::insertNode($list, NewNode: $aq1);
$aq12 = new Node(7);
$new_list22 = InsertNode::insertNode($list, NewNode: $aq12);
$aq13 = new Node(11);
$new_list22 = InsertNode::insertNode($list, NewNode: $aq13);
$aq17 = new Node(99);
$new_list22 = InsertNode::insertNode($list, NewNode: $aq17);

#second list
$n1 = new Node(2);
$list1 = new LinkedList($n1);
$s1 = new Node(4);
$new_list1 = InsertNode::insertNode($list1, NewNode: $s1);
$a1 = new Node(6);
$new_list2 = InsertNode::insertNode($list1, NewNode: $a1);
$a2 = new Node(8);
$new_list3 = InsertNode::insertNode($list1, NewNode: $a2);
$aq112 = new Node(71);
$new_list22 = InsertNode::insertNode($list1, NewNode: $aq112);
$aq113 = new Node(111);
$new_list32 = InsertNode::insertNode($list1, NewNode: $aq113);
$aq117 = new Node(997);
$new_list23 = InsertNode::insertNode($list1, NewNode: $aq117);

$list = SortedLinkedList::sort($list);
$list1 = SortedLinkedList::sort($list1);
echo "<br> first list :";
DisplayNodes::DisplayNodes($list);
echo "<br> second list :";
DisplayNodes::DisplayNodes($list1);
$intersectionNode = IntersectionOfTwoSortedLinkedLists::getInterSectionNode($list, $list1);

if (!$intersectionNode) {
    echo "<br> the lists have not any intersection node ";
} else {
    echo "<br>intersection node is ";
    while ($intersectionNode != null) {
        echo "<br>" . $intersectionNode->data;
        $intersectionNode = $intersectionNode->next;
    }
}

?>