<?php
include_once './AutoLoaded.php';

class ReversingAQueueUsingRecursion
{
    public static function reverse(LinkedListQueue $Queue)
    {
        if ($Queue->head == null) {
            return;
        }
        $front = Front::getFront($Queue);
        Dequeue::RemoveTheFrontNode($Queue);
        self::reverse($Queue);
        Enqueue::addNewNodeAtRear($Queue, new NodeQueue($front->data));
        return;
    }
}

?>