<?php
include_once './AutoLoaded.php';


$n = Factory::createNewObject('NodeQueue');
$Queue = Factory::createNewObject('LinkedListQueue');
$stack = Factory::createNewObject('stack');


Enqueue::addNewNodeAtRear($Queue, new NodeQueue(10));
Enqueue::addNewNodeAtRear($Queue, new NodeQueue(20));
Enqueue::addNewNodeAtRear($Queue, new NodeQueue(30));
Enqueue::addNewNodeAtRear($Queue, new NodeQueue(40));
Enqueue::addNewNodeAtRear($Queue, new NodeQueue(50));
Enqueue::addNewNodeAtRear($Queue, new NodeQueue(60));
Enqueue::addNewNodeAtRear($Queue, new NodeQueue(70));
Enqueue::addNewNodeAtRear($Queue, new NodeQueue(80));
Enqueue::addNewNodeAtRear($Queue, new NodeQueue(90));
Enqueue::addNewNodeAtRear($Queue, new NodeQueue(100));

echo "<br> Queue before reverse : ";
DisplayerQueue::display($Queue);

ReversingTheFirstKElementsOfAQueue::reverse($Queue, 3, $stack);

echo "<br> Queue After Reverse From KElement : ";
DisplayerQueue::display($Queue);

?>