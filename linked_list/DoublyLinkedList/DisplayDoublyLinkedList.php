<?php
include_once './AutoLoaded.php';

class DisplayDoublyLinkedList
{
    public static function DisplayNodes(DoublyLinkedList $DoublyLinkedList)
    {
        $ptr = $DoublyLinkedList->head;
        while ($ptr != null) {
            echo "<br>" . $ptr->data;
            $ptr = $ptr->next;
        }
    }
}
?>