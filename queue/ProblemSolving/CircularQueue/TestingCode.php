<?php
include_once 'AutoLoaded.php';

$queue = new LinkedListQueue(new NodeQueue());
// $root = new BinaryTree($n);

Enqueue::addNewNodeAtRear($queue, new NodeQueue(2));
Enqueue::addNewNodeAtRear($queue, new NodeQueue(3));
Enqueue::addNewNodeAtRear($queue, new NodeQueue(4));
Enqueue::addNewNodeAtRear($queue, new NodeQueue(5));


echo "<br>before convert to circular : ";
DisplayerQueue::display($queue);

CircularQueue::convertToCircular($queue);
echo "<br>After To Circular : ";
DisplayerQueue::display($queue);


?>