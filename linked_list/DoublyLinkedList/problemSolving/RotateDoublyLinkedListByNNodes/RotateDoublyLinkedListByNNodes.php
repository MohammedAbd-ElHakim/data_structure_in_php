<?php
include_once './AutoLoaded.php';

class RotateDoublyLinkedListByNNodes
{
    public static function rotate(DoublyLinkedList $list, $k)
    {
        if ($list == null) {
            return $list;
        }

        $curr = $list->head;
        $index = 1;
        $size = 1;

        while ($curr->next != null) {
            $size++;
            $curr = $curr->next;
        }

        $moveToStop = $size + $k + 1;

        $curr->next = $list->head;
        $list->head->prev = $curr;

        $c = $list->head;
        while ($c->next != null) {
            if ($moveToStop == $index) {
                break;
            }
            $index++;
            $c = $c->next;
        }
        $list->head = $c;
        $c->prev = $list->head;

        $i = 1;
        $newHead2 = null;
        $e = $list->head;
        while ($e != null) {
            if ($i == $size) {
                break;
            }
            if ($newHead2 === null) {
                $newHead2 = $e;
                $i++;
                $e = $e->next;
                continue;
            }
            $i++;
            $e = $e->next;
        }

        $i = 1;
        $c7 = $newHead2;
        while ($c7 != null) {
            if ($i == $size) {
                break;
            }
            $i++;
            $c7 = $c7->next;
        }
        $c7->next = null;
        $newHead2->prev = null;

        // echo "<br>newHead ****xxx: ";
        // $c9 = $newHead2;
        // while ($c9 != null) {
        //     echo "<br>c9 : " . $c9->data;
        //     $c9 = $c9->next;
        // }

        $list->head = $newHead2;
        return $list;
    }
}

?>