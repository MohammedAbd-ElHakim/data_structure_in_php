<?php
include_once 'AutoLoaded.php';

$queue = new LinkedListQueue();
$stack = new LinkedList(new Node());
$tempstack = new LinkedList(new Node());
$deque = new DequeLinkedList();


DequeInserter::insertFirst($deque, new NodeOfDeque(1));
DequeInserter::insertFirst($deque, new NodeOfDeque(2));
DequeInserter::insertFirst($deque, new NodeOfDeque(3));
DequeInserter::insertFirst($deque, new NodeOfDeque(4));
DequeInserter::insertFirst($deque, new NodeOfDeque(5));

echo "<br>Deque : ";
DisplayerDeque::display($deque);

ImplementationOfDeque::createQueueAndStackByDeque($deque, $queue, $stack, $tempstack);

echo "<br>queue : ";
DisplayerQueue::display($queue);

echo "<br>stack : ";
Displayer::display($stack);


?>