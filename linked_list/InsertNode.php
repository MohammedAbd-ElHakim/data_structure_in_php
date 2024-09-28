<?php
include_once './AutoLoaded.php';

class InsertNode implements Inserter
{
    public static function InsertNode(LinkedList $LinkedList, Node $NewNode)
    {
        $ptr_to_list = $LinkedList->head;

        if ($LinkedList->head == null) {
            $LinkedList->head = $NewNode;
            return $LinkedList;
        }
        $ptr_to_list = $LinkedList->head;
        while ($ptr_to_list->next != null) {
            $ptr_to_list = $ptr_to_list->next;
        }
        $ptr_to_list->next = $NewNode;
        return $LinkedList;
    }
}


?>