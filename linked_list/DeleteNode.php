<?php
include_once './AutoLoaded.php';

class DeleteNode implements LinkedListInterFace
{
    public static function DeleteNode(LinkedList $LinkedList, $value)
    {
        $curr = $LinkedList->head;
        $prev = $curr;
        if ($curr->data == $value) {
            $LinkedList->head = $LinkedList->head->next;
            return $LinkedList;
        } else {
            while ($curr->next != null) {
                if ($curr->data == $value) {
                    $prev->next = $curr->next;
                    return $LinkedList;
                }
                $prev = $curr;
                $curr = $curr->next;
            }

            #del last node
            if ($curr->data == $value) {
                $prev->next = null;
                return $LinkedList;
            }

            return $LinkedList;

        }
    }

    public static function DisplayNodes(LinkedList $LinkedList)
    {
        #DO NOTHNG!
    }
    public static function insertNode(LinkedList $LinkedList, Node $NewNode)
    {
        #DO NOTHNG!
    }
}
?>