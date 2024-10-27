<?php
include_once 'Autoload.php';

$superStack = new LinkedList();
$minStack = new LinkedList();

ImplementSpecialStackDataStructureAddedSpaceOptimizedVersion::specialPush($superStack, $minStack, new Node(18));
ImplementSpecialStackDataStructureAddedSpaceOptimizedVersion::specialPush($superStack, $minStack, new Node(19));
ImplementSpecialStackDataStructureAddedSpaceOptimizedVersion::specialPush($superStack, $minStack, new Node(29));
ImplementSpecialStackDataStructureAddedSpaceOptimizedVersion::specialPush($superStack, $minStack, new Node(15));
ImplementSpecialStackDataStructureAddedSpaceOptimizedVersion::specialPush($superStack, $minStack, new Node(16));

echo "<br>super stack : ";
Displayer::display($superStack);

echo "<br>min stack : ";
Displayer::display($minStack);

$min = ImplementSpecialStackDataStructureAddedSpaceOptimizedVersion::getMin(minStack: $minStack);

echo "<br>minValue : " . $min;

?>