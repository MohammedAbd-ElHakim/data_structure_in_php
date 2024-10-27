<?php
include_once 'Autoload.php';

$list = new LinkedList(new Node());
$result = new LinkedList();
Push::push($list, new Node(1));
Push::push($list, new Node(2));
Push::push($list, new Node(3));
Push::push($list, new Node(4));
Push::push($list, new Node(5));
Push::push($list, new Node(6));
Push::push($list, new Node(7));
Push::push($list, new Node(8));
Push::push($list, new Node(9));
Push::push($list, new Node(10));


echo "<br>before reverse : ";
Displayer::display($list);

$reverseStr = ReverseAStackUsingRecursion::start($list, $result);
echo "<br>after reverse : ";
Displayer::display($result);
?>