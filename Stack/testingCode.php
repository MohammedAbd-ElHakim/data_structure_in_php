<?php
include_once 'Autoload.php';

$node = new Node(1);
$stack = new LinkedList($node);

echo "<br>stack before add 2";

$curr = $stack->head;
while ($curr != null) {
    echo "<br>" . $curr->data;
    $curr = $curr->next;
}
$newStack = Push::push($stack, new Node(2));

echo "<br>stack after add 2";
$curr = $newStack->head;
while ($curr != null) {
    echo "<br>" . $curr->data;
    $curr = $curr->next;
}

echo "<br>peek first element from stack : " . Peek::peek($newStack);

echo "<br>stack after pop first element : ";
$newStack1 = pop::pop($newStack);
Displayer::display($newStack1);


?>