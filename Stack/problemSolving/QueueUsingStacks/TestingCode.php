<?php
include_once 'Autoload.php';

$list = new LinkedList(new Node(1));
$n = new Node(2);

$queue = QueueLinkedListImplementation::enQueue($list, $n);
echo "<br>queue after add 2:";
Displayer::display($queue);

$queue1 = QueueLinkedListImplementation::enQueue($list, new Node(3));
echo "<br>queue after add 3:";
Displayer::display($queue1);

$queue2 = QueueLinkedListImplementation::enQueue($list, new Node(4));
echo "<br>queue after add 4:";
Displayer::display($queue2);

$queue3 = QueueLinkedListImplementation::enQueue($list, new Node(5));
echo "<br>queue after add 5:";
Displayer::display($queue3);

$front = QueueLinkedListImplementation::getFront($list);
echo "<br>front of queue : " . $front;

$rear = QueueLinkedListImplementation::getRear($list);
echo "<br>rear of queue : " . $rear;

$l = QueueLinkedListImplementation::deQueue($list);
echo "<br>dequeue : ";
Displayer::display($l);


?>