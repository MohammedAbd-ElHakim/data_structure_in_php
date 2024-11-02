<?php
include_once './AutoLoaded.php';

class QueueUsingStacks
{

    public static function createQueue(LinkedListQueue $Queue, LinkedList $stack, LinkedList $tempStack)
    {
        if ($stack->head == null) {
            return;
        }

        $curr = $stack->head;
        while ($curr != null) {
            Push::push($tempStack, new Node($curr->data));
            $curr = $curr->next;
        }
        $curr = $tempStack->head;
        while ($curr != null) {
            if ($curr->data != null)
                Enqueue::addNewNodeAtRear($Queue, new NodeQueue($curr->data));
            $curr = $curr->next;
        }
    }
}

?>