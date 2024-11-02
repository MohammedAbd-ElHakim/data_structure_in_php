<?php
include_once './AutoLoaded.php';

class ImplementationOfDeque
{
    public static function createQueueAndStackByDeque(DequeLinkedList $deque, LinkedListQueue $queue, LinkedList $stack, LinkedList $tempStack)
    {
        if ($deque == null) {
            return;
        }

        #create queue
        $curr = $deque->head;
        while ($curr != null) {
            Enqueue::addNewNodeAtRear($queue, new NodeQueue($curr->data));
            $curr = $curr->next;
        }

        #create tempstack
        $curr2 = $deque->head;
        while ($curr2 != null) {
            push::push($tempStack, new Node($curr2->data));
            $curr2 = $curr2->next;
        }

        #create stack
        $curr3 = $deque->head;
        while ($curr3 != null) {
            push::push($stack, new Node($curr3->data));
            $curr3 = $curr3->next;
        }
    }
}

?>