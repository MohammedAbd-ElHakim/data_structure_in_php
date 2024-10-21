<?php
include_once './AutoLoaded.php';

class RemoveDuplicatesFromAnUnSortedDoublyLinkedList
{
    public static function removeDuplicate(DoublyLinkedList $list)
    {
        if ($list == null) {
            return $list;
        }

        $ptr = $list->head;

        while ($ptr != null) {
            $currPtr = $ptr;
            while ($currPtr->next != null) {
                $nxtPtrData = $currPtr->next->data;
                if ($nxtPtrData == $ptr->data) {
                    $duplicate = $currPtr->next;
                    $currPtr->next = $currPtr->next->next;
                    if ($currPtr->next != null) {
                        $currPtr->next->prev = $currPtr;
                    }
                }
                $duplicate = null;
                $currPtr = $currPtr->next;
            }
            $ptr = $ptr->next;
        }
        return $list;
    }
}

?>