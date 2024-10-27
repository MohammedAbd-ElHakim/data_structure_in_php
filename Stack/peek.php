<?php
include_once 'Autoload.php';

class Peek
{
    #return the top element
    public static function peek(LinkedList $stack)
    {
        if ($stack == null || $stack->head == null) {
            echo "<br>stack is null";
            return;
        } else {
            $firstElement = $stack->head->data;
        }
        return $firstElement;
    }
}
?>