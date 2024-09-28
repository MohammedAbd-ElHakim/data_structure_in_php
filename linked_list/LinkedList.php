<?php
include_once 'AutoLoaded.php';

class LinkedList
{
    public Node $head;
    public function __construct(Node $node)
    {
        $this->head = $node;
    }
}

$n = new Node('3');
$list = new LinkedList($n);
$s = new Node("4");
$new_list = InsertNode::insertNode($list, NewNode: $s);
$a = new Node('7');
$new_list2 = InsertNode::insertNode($list, NewNode: $a);
$a2 = new Node('8');
$new_list2 = InsertNode::insertNode($list, NewNode: $a2);

LinkedListInterFace::DisplayNodes($new_list2);
echo "<br> now we will delete 8";
$new_list3 = LinkedListInterFace::DeleteNode($new_list2, '8');
LinkedListInterFace::DisplayNodes($new_list3);





?>