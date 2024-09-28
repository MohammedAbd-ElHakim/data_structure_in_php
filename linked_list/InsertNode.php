<?php
include_once './AutoLoaded.php';

class InsertNode implements LinkedListInterFace
{
    public static function insertNode(LinkedList $LinkedList, Node $NewNode)
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

    public static function DisplayNodes(LinkedList $LinkedList)
    {
        #DO NOTHNG!
    }
    public static function DeleteNode(LinkedList $LinkedList, $value)
    {
        #DO NOTHNG!

    }


}


?>