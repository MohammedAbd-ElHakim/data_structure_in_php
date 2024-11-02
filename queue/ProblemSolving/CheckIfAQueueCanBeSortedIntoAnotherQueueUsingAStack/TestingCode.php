<?php
include_once 'AutoLoaded.php';

$queue = new LinkedListQueue();
$resultQueue = new LinkedListQueue();
$stack = new LinkedList(new Node());


Enqueue::addNewNodeAtRear($queue, new NodeQueue(5));
Enqueue::addNewNodeAtRear($queue, new NodeQueue(1));
Enqueue::addNewNodeAtRear($queue, new NodeQueue(2));
Enqueue::addNewNodeAtRear($queue, new NodeQueue(6));
Enqueue::addNewNodeAtRear($queue, new NodeQueue(3));
Enqueue::addNewNodeAtRear($queue, new NodeQueue(4));


echo "<br>orginal queue : ";
DisplayerQueue::display($queue);

$can = CheckIfAQueueCanBeSortedIntoAnotherQueueUsingAStack::checkNow($queue, $resultQueue, $stack);
echo "<br>ResultQueue : ";
echo "<br>can : " . $can;
DisplayerQueue::display($resultQueue);


?>