<?php
include_once './AutoLoaded.php';

class ImplementAStackUsingSinglyLinkedList
{
    public static function pop(LinkedList $list)
    {
        if ($list == null) {
            return $list;
        }
        $list->head = $list->head->next;
        return $list;
    }
    public static function push(LinkedList $list, Node $newNode)
    {
        $temp = $list->head->next;
        $list->head = $newNode;
        $newNode->next = $temp;

        return $list;
    }

    public static function peek(LinkedList $list)
    {
        if ($list == null) {
            return $list;
        }

        $valueOfTopNode = $list->head->data;
        return $valueOfTopNode;
    }
    public static function display(LinkedList $list)
    {
        $curr = $list->head;
        while ($curr != null) {
            echo "<br>" . $curr->data;
            $curr = $curr->next;
        }
    }
}

?>