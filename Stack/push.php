<?php
include_once 'Autoload.php';

class Push
{

    #add new node at first stack
    public static function push(LinkedList $stack, $newNode)
    {
        if ($stack == null) {
            return "linked list cannot be null";
        }
        if ($stack->head === null) {
            $stack->head = $newNode;
        } else {
            $temp = $stack->head;
            $newNode->next = $stack->head;
            $stack->head = $newNode;
        }
        return $stack;
    }

}

?>