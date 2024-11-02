<?php
include_once 'AutoLoaded.php';

$node = new NodeOfDeque(1);
$deque = new DequeLinkedList($node);

echo "<br>deque before add front 2 : ";
DisplayerDeque::display($deque);

echo "<br>deque after add front 2 : ";
DequeInserter::insertFirst($deque, new NodeOfDeque(2));
DisplayerDeque::display($deque);

echo "<br>deque before add front 3 : ";
DequeInserter::insertFirst($deque, new NodeOfDeque(3));
DisplayerDeque::display($deque);

echo "<br>deque before add front 4 : ";
DequeInserter::insertFirst($deque, new NodeOfDeque(4));
DisplayerDeque::display($deque);

echo "<br>deque before add front 5 : ";
DequeInserter::insertFirst($deque, new NodeOfDeque(5));
DisplayerDeque::display($deque);

echo "<br>deque before add rear 6 : ";
DequeInserter::insertAtLast($deque, new NodeOfDeque(6));
DisplayerDeque::display($deque);

echo "<br>deque before add rear 7 : ";
DequeInserter::insertAtLast($deque, new NodeOfDeque(7));
DisplayerDeque::display($deque);

echo "<br>deque before add rear 8 : ";
DequeInserter::insertAtLast($deque, new NodeOfDeque(8));
DisplayerDeque::display($deque);

echo "<br>deque before add front 9 : ";
DequeInserter::insertFirst($deque, new NodeOfDeque(9));
DisplayerDeque::display($deque);


$size = SizeOfDeque::size($deque);
echo "<br>size : " . $size;

$rear = Tail::getTail($deque);
echo "<br>rear : " . $rear;
?>