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
$new_list = InsertNode::InsertNode($list, NewNode: $s);
$a = new Node('7');
$new_list2 = InsertNode::InsertNode($list, NewNode: $a);
$a2 = new Node(data: '8');
$new_list2 = InsertNode::InsertNode($list, NewNode: $a2);

DisplayNodes::DisplayNodes($new_list2);
echo "<br> now we will delete 8";
$new_list3 = DeleteNode::DeleteNode($new_list2, '8');
DisplayNodes::DisplayNodes($new_list3);








?>