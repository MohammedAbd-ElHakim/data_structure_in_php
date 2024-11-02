<?php
include_once 'AutoLoaded.php';

$node = new NodeQueue(1);
$queue = new LinkedListQueue($node);

echo "<br>queue before add front 2 : ";
InsertFront::insert($queue, new NodeQueue(2));
DisplayerQueue::display($queue);

echo "<br>queue After add rear 3 : ";
InsertRear::addNewNodeAtRear($queue, new NodeQueue(3));
DisplayerQueue::display($queue);

echo "<br>queue After delete front : ";
DeleteFront::RemoveTheFrontNode($queue);
DisplayerQueue::display($queue);

echo "<br>queue After Delete rear : ";
DeleteRear::RemoveTheRear($queue);
DisplayerQueue::display($queue);
?>