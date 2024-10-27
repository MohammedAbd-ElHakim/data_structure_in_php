<?php
include_once 'Autoload.php';

$stack = new LinkedList(new Node());
$n = new Node(1);
$queue = new LinkedList();

echo "<br>stack before : ";
Displayer::display($stack);

QueueLinkedListImplementation::enQueue($queue, $n);
QueueLinkedListImplementation::enQueue($queue, new Node(2));
QueueLinkedListImplementation::enQueue($queue, new Node(3));
QueueLinkedListImplementation::enQueue($queue, new Node(4));
QueueLinkedListImplementation::enQueue($queue, new Node(5));
echo "<br>queue : ";
Displayer::display($queue);

while ($queue->head !== null) {
    $currData = QueueLinkedListImplementation::deQueue($queue);
    push::push($stack, new Node($currData));
}

echo "<br>stack : ";
Displayer::display($stack);

?>