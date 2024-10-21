<?php
include_once './AutoLoaded.php';

class DeleteNode implements Deleter
{
    public static function DeleteNode(LinkedList $LinkedList, $value)
    {
        if ($LinkedList == null) {
            return $LinkedList;
        }
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
}
?>