<?php
include_once './AutoLoaded.php';

class PrintTheMiddleOfGivenLinkedList implements StartDetect
{

    public static function startDetect(LinkedList $list)
    {
        $fastPointer = $list->head;
        $slowPointer = $list->head;
        while ($fastPointer->next != null && $fastPointer != null) {
            if ($fastPointer->next->next != null) {
                $fastPointer = $fastPointer->next->next;
            } else {
                return false;
            }
            $slowPointer = $slowPointer->next;
            $fastPointerData = $fastPointer->data;
            $slowPointerData = $slowPointer->data;
            echo "<br>fastPointerData : " . $fastPointerData;
            echo "<br>slowPointerData : " . $slowPointerData;
            echo "<br>---------------------------------";
            if ($fastPointerData == $slowPointerData) {
                return true;
            }
        }

        return false;

    }
}

?>