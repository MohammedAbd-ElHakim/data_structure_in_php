<?php
include_once './AutoLoaded.php';

class ReversingTheFirstKElementsOfAQueue
{
    public static function reverse(LinkedListQueue $Queue, $k, LinkedList $stack)
    {

        #Given an integer k and a queue of integers, 
        #The task is to reverse the order of the first k elements of the queue,
        # leaving the other elements in the same relative order.

        if ($Queue == null) {
            return false;
        }

        $curr = $Queue->head;
        $index = 1;

        while ($curr != null && $index <= $k) {
            $currData = $curr->data;
            Push::push($stack, new Node($currData));
            $index++;
            $curr = $curr->next;
        }

        $currStack = $stack->head;
        $c = $Queue->head;
        while ($currStack != null) {
            if (Peek::peek($stack) != null) {
                $c->data = peek::peek($stack);
            }
            pop::pop($stack);
            $c = $c->next;
            $currStack = $currStack->next;
        }
    }
}

?>