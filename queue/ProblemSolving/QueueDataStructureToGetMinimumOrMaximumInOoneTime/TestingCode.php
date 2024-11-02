<?php
include_once './AutoLoaded.php';


$n = Factory::createNewObject('NodeQueue');
$Queue = Factory::createNewObject('LinkedListQueue');
$QueueOfMin = Factory::createNewObject('LinkedListQueue');
$stack = Factory::createNewObject('stack');

echo "<br> Queue after add 1 : ";
QueueDataStructureToGetMinimumOrMaximumInOoneTime::push($Queue, $QueueOfMin, new NodeQueue(1));
DisplayerQueue::display($Queue);

echo "<br> Queue after add 2 : ";
QueueDataStructureToGetMinimumOrMaximumInOoneTime::push($Queue, $QueueOfMin, new NodeQueue(2));
DisplayerQueue::display($Queue);

echo "<br> Queue after add 3 : ";
QueueDataStructureToGetMinimumOrMaximumInOoneTime::push($Queue, $QueueOfMin, new NodeQueue(3));
DisplayerQueue::display($Queue);

echo "<br> Queue after add 4 : ";
QueueDataStructureToGetMinimumOrMaximumInOoneTime::push($Queue, $QueueOfMin, new NodeQueue(4));
DisplayerQueue::display($Queue);

echo "<br> Queue after add 5 : ";
QueueDataStructureToGetMinimumOrMaximumInOoneTime::push($Queue, $QueueOfMin, new NodeQueue(5));
DisplayerQueue::display($Queue);

echo "<br> Queue after pop : ";
$pop = QueueDataStructureToGetMinimumOrMaximumInOoneTime::pop($Queue, $QueueOfMin);
echo "<br>after pop is : " . $pop;
DisplayerQueue::display($Queue);

echo "<br> Queue after add 7 : ";
QueueDataStructureToGetMinimumOrMaximumInOoneTime::push($Queue, $QueueOfMin, new NodeQueue(7));
DisplayerQueue::display($Queue);

echo "<br> Queue after pop : ";
$pop = QueueDataStructureToGetMinimumOrMaximumInOoneTime::pop($Queue, $QueueOfMin);
echo "<br>after pop is : " . $pop;
DisplayerQueue::display($Queue);

echo "<br> Queue after add 1 : ";
QueueDataStructureToGetMinimumOrMaximumInOoneTime::push($Queue, $QueueOfMin, new NodeQueue(1));
DisplayerQueue::display($Queue);


echo "<br> Min : ";
DisplayerQueue::display($QueueOfMin);

?>