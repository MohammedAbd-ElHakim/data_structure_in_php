<?php
include_once 'Autoload.php';

$node = new NodeQueue(1);
$queue = new LinkedListQueue($node);

echo "<br>queue before add 2 : ";
Enqueue::addNewNodeAtRear($queue, new NodeQueue(2));
DisplayerQueue::display($queue);

echo "<br>queue After add 3 : ";
Enqueue::addNewNodeAtRear($queue, new NodeQueue(3));
DisplayerQueue::display($queue);

echo "<br>queue After add 4 : ";
Enqueue::addNewNodeAtRear($queue, new NodeQueue(4));
DisplayerQueue::display($queue);

echo "<br>queue After add 5 : ";
Enqueue::addNewNodeAtRear($queue, new NodeQueue(5));
DisplayerQueue::display($queue);

echo "<br>queue After add 6 : ";
Enqueue::addNewNodeAtRear($queue, new NodeQueue(6));
DisplayerQueue::display($queue);

echo "<br>queue After add 7 : ";
Enqueue::addNewNodeAtRear($queue, new NodeQueue(7));
DisplayerQueue::display($queue);

echo "<br>queue After delete front 1 : ";
Dequeue::RemoveTheFrontNode($queue);
DisplayerQueue::display($queue);

echo "<br>front is : ";
echo Front::getFront($queue)->data;

echo "<br>rear is : ";
echo Rear::getRear($queue)->data;

echo "<br>size is : ";
echo Size::getSize($queue);







?>