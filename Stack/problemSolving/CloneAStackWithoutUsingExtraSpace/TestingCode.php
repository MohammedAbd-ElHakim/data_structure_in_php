<?php
include_once 'Autoload.php';

$orginal = new LinkedList();
$clone = new LinkedList();

push::push($orginal, new Node(5));
push::push($orginal, new Node(4));
push::push($orginal, new Node(3));
push::push($orginal, new Node(2));
push::push($orginal, new Node(1));
echo "<br>orginal stack : ";
Displayer::display($orginal);

CloneAStackWithoutUsingExtraSpace::recursieCloneStack($orginal, $clone);
echo "<br>clone stack : ";
Displayer::display($clone);
?>