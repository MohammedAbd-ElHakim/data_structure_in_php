<?php
include_once './AutoLoaded.php';

class DeletionFromTheBeginningOfTheCircularLinkedList
{

    public static function delete(LinkedList $list)
    {
        if ($list == null || $list->head->next == null || $list->head == $list->head->next) {
            if ($list->head->next == null) {
                $list->head = null;
            }
            return;
        }



        $list->head = $list->head->next;
        $curr = $list->head;
        do {
            # code...
            echo "<br>" . $curr->data;
            $curr = $curr->next;
        } while ($curr->next != $list->head);
    }
    public static function deleteSpecificNodeFromCircularLinkedList(LinkedList $list, $indexToDelete)
    {
        if ($list == null || $list->head->next == null || $list->head == $list->head->next) {
            if ($list->head->next == null) {
                $list->head = null;
            }
            return;
        }

        if ($indexToDelete == 1) {
            $list->head = $list->head->next;
            $curr = $list->head;
            do {
                # code...
                $curr = $curr->next;
            } while ($curr->next != $list->head);
            return $list;
        }

        if ($indexToDelete == 0) {
            return $list;
        }

        $curr = $list->head;
        echo "<br>should delete node number " . $indexToDelete;
        $currIndex = 1;
        do {
            # code...
            $prev = $curr;
            $curr = $curr->next;
            $currIndex++;

            if ($currIndex == $indexToDelete) {
                $prev->next = $curr->next;
            }
        } while ($curr != $list->head);
        return $list;
    }

    public static function deleteAtTheEndOfCircularLinkedList(LinkedList $list)
    {
        if ($list == null || $list->head->next == null || $list->head == $list->head->next) {
            if ($list->head->next == null) {
                $list->head = null;
            }

            if ($list->head == $list->head->next) {
                $list->head->next = null;
            }
            return $list;
        }

        $curr = $list->head;
        $prev = null;
        $isDelete = false;
        do {
            echo "<br>" . $curr->data;
            $prev = $curr;
            $curr = $curr->next;
            if ($curr->next == $list->head) {
                $prev->next = $list->head;
                echo "<br>prevNext : " . $prev->next->data;
                $isDelete = true;
            }
        } while (!$isDelete);

        return $list;
    }
}

?>