<?php
include_once './AutoLoaded.php';

class QueueDataStructureToGetMinimumOrMaximumInOoneTime
{

    public static function push(LinkedListQueue $Queue, LinkedListQueue $QueueOfMin, NodeQueue $newNode)
    {
        if ($Queue->head == null) {
            $Queue->head = $newNode;
            $QueueOfMin->head = new NodeQueue(1000000);
            if ($newNode->data < $QueueOfMin->head->data) {
                $QueueOfMin->head->data = $newNode->data;
            }
            return;
        }
        if ($newNode->data < $QueueOfMin->head->data) {
            $QueueOfMin->head->data = $newNode->data;
        }
        $rear = Rear::getRear($Queue);
        $rear->next = $newNode;
    }

    public static function getMin(LinkedListQueue $QueueOfMin)
    {
        return $QueueOfMin->head->data;
    }
    public static function pop(LinkedListQueue $Queue, LinkedListQueue $QueueOfMin)
    {
        if ($Queue->head == null) {
            return $Queue;
        }

        $tempHead = $Queue->head->data;
        if ($tempHead == $QueueOfMin->head->data) {
            $QueueOfMin->head->data = 10000000;
            $Queue->head = $Queue->head->next;
            $curr = $Queue->head;
            while ($curr != null) {
                $currData = $curr->data;
                if ($currData < $QueueOfMin->head->data) {
                    $QueueOfMin->head->data = $currData;
                }
                $curr = $curr->next;
            }
        }
        return $tempHead;
    }
}

?>