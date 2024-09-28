<?php
include_once './AutoLoaded.php';

class DisplayNodes implements LinkedListInterFace
{
    public static function DisplayNodes(LinkedList $LinkedList, $par = null)
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
    public static function insertNode(LinkedList $LinkedList, Node $NewNode)
    {
        #DO NOTHNG!
    }

    public static function DeleteNode(LinkedList $LinkedList, $value)
    {
        #DO NOTHNG!

    }

}
?>