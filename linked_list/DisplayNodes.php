<?php
include_once './AutoLoaded.php';

class DisplayNodes implements Displayer
{
    public static function DisplayNodes(LinkedList $LinkedList)
    {
        $ptr = $LinkedList->head;
        while ($ptr->next != null) {
            echo "<br>" . $ptr->data;
            $ptr = $ptr->next;
        }

        if ($ptr->next == null && $ptr->data > 0) {
            echo "<br>" . $ptr->data;
        }
        if ($ptr == null) {
            echo "<br>its null";
        }
    }
}
?>