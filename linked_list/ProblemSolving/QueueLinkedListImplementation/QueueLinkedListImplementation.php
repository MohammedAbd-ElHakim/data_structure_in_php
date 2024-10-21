<?php
include_once './AutoLoaded.php';

class QueueLinkedListImplementation
{

    public static function enQueue(LinkedList $list, Node $newNode)
    {
        if ($list == null) {
            $list = $newNode;
            return $list;
        }
        $rear = self::getRear($list);
        $rear->next = $newNode;
        return $list;
    }
    public static function deQueue(LinkedList $list)
    {
        if ($list == null) {
            return $list;
        }
        $front = self::getFront($list);
        $listAfterRemoveFirstNode = DeleteNode::DeleteNode($list, $front->data);
        return $listAfterRemoveFirstNode;
    }
    public static function getFront(LinkedList $list)
    {
        $front = $list->head;
        return $front;
    }
    public static function getRear(LinkedList $list)
    {
        $curr = $list->head;
        while ($curr->next != null) {
            $curr = $curr->next;
        }
        $rear = $curr;
        return $rear;
    }
}

?>