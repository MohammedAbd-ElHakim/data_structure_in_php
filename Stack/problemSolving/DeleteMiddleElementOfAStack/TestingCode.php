<?php
include_once 'Autoload.php';

$list = new LinkedList(new Node());
pop::pop($list);
push::push($list, new Node(7));
push::push($list, new Node(6));
push::push($list, new Node(5));
push::push($list, new Node(4));
push::push($list, new Node(3));
push::push($list, new Node(2));
push::push($list, new Node(1));

echo "<br>before delete : ";
Displayer::display($list);

$reverseStr = DeleteMiddleElementOfAStack::deleteMiddle($list);
echo "<br>after delete : ";
Displayer::display($list);
?>