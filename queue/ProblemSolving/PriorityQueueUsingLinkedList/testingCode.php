<?php
include_once 'Autoload.php';

$node = new NodeOfPriority(1, 10);
$queue = new LinkedListOfPriorityQueue($node);

echo "<br>queue before add 2 : ";
LinkedListOfPriorityQueue::display($queue);

echo "<br>queue after add 2 : ";
LinkedListOfPriorityQueue::push($queue, new NodeOfPriority(2, 2));
LinkedListOfPriorityQueue::display($queue);

echo "<br>queue after add 3 : ";
LinkedListOfPriorityQueue::push($queue, new NodeOfPriority(3, 3));
LinkedListOfPriorityQueue::display($queue);

echo "<br>queue after add 4 : ";
LinkedListOfPriorityQueue::push($queue, new NodeOfPriority(4, 4));
LinkedListOfPriorityQueue::display($queue);

echo "<br>queue after add 5 : ";
LinkedListOfPriorityQueue::push($queue, new NodeOfPriority(5, 100));
LinkedListOfPriorityQueue::display($queue);

echo "<br>queue after add 6 : ";
LinkedListOfPriorityQueue::push($queue, new NodeOfPriority(6, 6));
LinkedListOfPriorityQueue::display($queue);

echo "<br>queue after add 7 : ";
LinkedListOfPriorityQueue::push($queue, new NodeOfPriority(7, 7));
LinkedListOfPriorityQueue::display($queue);

echo "<br>queue after pop highest node of queue : ";
LinkedListOfPriorityQueue::pop($queue);
LinkedListOfPriorityQueue::display($queue);

echo "<br>queue after pop highest node of queue : ";
LinkedListOfPriorityQueue::pop($queue);
LinkedListOfPriorityQueue::display($queue);

echo "<br>queue after pop highest node of queue : ";
LinkedListOfPriorityQueue::pop($queue);
LinkedListOfPriorityQueue::display($queue);

$front = LinkedListOfPriorityQueue::peek($queue);
?>