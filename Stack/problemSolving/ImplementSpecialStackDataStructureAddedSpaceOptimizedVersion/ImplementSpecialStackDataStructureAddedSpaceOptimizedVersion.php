<?php
include_once 'Autoload.php';

class ImplementSpecialStackDataStructureAddedSpaceOptimizedVersion
{
    public static function specialPush(LinkedList $superStack, LinkedList $minStack, Node $newNode)
    {
        push::push($superStack, $newNode);

        if (peek::peek($minStack) > $newNode->data || $minStack->head == null) {
            // echo "<br>*******************************************************this is min maaaaaaaaaaaaaaaaaaaaaaaaaaaan****************************";
            pop::pop($minStack);
            push::push($minStack, new Node($newNode->data));
            // echo "<br>*******************************************************this is min maaaaaaaaaaaaaaaaaaaaaaaaaaaan****************************";
        }
    }
    public static function getMin(LinkedList $minStack)
    {
        $minValue = peek::peek($minStack);
        return $minValue;
    }
}
?>