<?php
include_once 'Autoload.php';

$stack = new LinkedList(new Node(1));
$n = new Node(2);
$queue = new LinkedList();

$stack = push::push($stack, $n);
$stack = push::push($stack, new Node(3));
$stack = push::push($stack, new Node(4));
$stack = push::push($stack, new Node(5));
echo "<br>stack : ";
Displayer::display($stack);

while ($stack->head != null) {
    $currData = peek::peek($stack);
    echo "<br>currData : " . $currData;
    pop::pop($stack);
    QueueLinkedListImplementation::enQueue($queue, new Node($currData));
}

echo "<br>queue : ";
Displayer::display($queue);
?>