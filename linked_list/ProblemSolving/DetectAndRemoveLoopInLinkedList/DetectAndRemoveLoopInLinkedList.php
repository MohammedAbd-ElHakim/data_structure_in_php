<?php
include_once './AutoLoaded.php';

class DetectAndRemoveLoopInLinkedList
{

    public static function removeLoop(LinkedList $list)
    {
        $fast = $list->head;
        $slow = $list->head;

        #discover loop
        while ($fast->next != null && $fast != null && $slow != null) {
            $fast = $fast->next->next;
            $slow = $slow->next;
            echo "<br>=================";
            echo "<br> fast : " . $fast->data;
            echo "<br> slow : " . $slow->data;
            echo "<br>=================";
            if ($fast == $slow) {
                #loop is fast
                echo "<br>Loop detected! ";
                break;
            }
        }

        if ($fast == null || $fast->next == null) {
            return; // لا يوجد حلقة، انتهى.
        }
        echo "<br> fast : " . $fast->data;
        echo "<br> slow : " . $slow->data;
        #remove a loop
        echo "<br>slow after doscover loop: ";
        $slow = $list->head;
        while ($slow != $fast) {
            echo "<br>" . $slow->data;
            $slow = $slow->next;
        }

        // echo "<br>list : ";
        // $curr = $list->head;
        // while ($curr != null) {
        //     echo "<br>" . $curr->data;
        //     $curr = $curr->next;
        // }
    }
}
?>