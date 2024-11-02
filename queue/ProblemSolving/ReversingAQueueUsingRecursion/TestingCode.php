<?php
include_once './AutoLoaded.php';


$Queue = Factory::createNewObject('LinkedListQueue');

Enqueue::addNewNodeAtRear($Queue, new NodeQueue(1));
Enqueue::addNewNodeAtRear($Queue, new NodeQueue(2));
Enqueue::addNewNodeAtRear($Queue, new NodeQueue(3));
Enqueue::addNewNodeAtRear($Queue, new NodeQueue(4));
Enqueue::addNewNodeAtRear($Queue, new NodeQueue(5));

echo "<br> Queue before reverse : ";
DisplayerQueue::display($Queue);

ReversingAQueueUsingRecursion::reverse($Queue);

echo "<br> Queue After Reverse : ";
DisplayerQueue::display($Queue);

?>