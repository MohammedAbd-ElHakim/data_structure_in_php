<?php
include_once './AutoLoaded.php';

class PalindromeLinkedList
{
    public static function isPalindromeOddLinkedList(LinkedList $list)
    {

        echo "<br>inside odd";

        if ($list == null) {
            return $list;
        }

        #12321
        $fast = $list->head;
        $slow = $list->head;

        while ($fast != null && $fast->next != null) {
            $prev = $fast;
            $fast = $fast->next->next;
            $slow = $slow->next;
            echo "<br>prev inside : " . $prev->data;
        }

        #slow is middle of list
        $mid = $prev;
        echo "<br>secondNewHead before reverse: ";
        $curr7 = $slow->next;
        while ($curr7 != null) {
            echo "<br>" . $curr7->data;
            $curr7 = $curr7->next;
        }

        $curr = $slow;
        $prevMain = null;
        while ($curr != null) {
            #reverse second list
            $nextNode = $curr->next;
            $curr->next = $prevMain;
            $prevMain = $curr;
            $curr = $nextNode;
        }

        echo "<br>secondNewHead after reverse: ";
        $slow = $prevMain;
        $curr3 = $slow;
        while ($curr3->next != null) {
            echo "<br>" . $curr3->data;
            $curr3 = $curr3->next;
        }
        $first = null;
        echo "<br>firstNodes of List To slow : ";
        $nodesOfListToSlowOrMid = $list->head;
        while ($nodesOfListToSlowOrMid != $mid) {
            if ($first !== null) {
                $first->next = $nodesOfListToSlowOrMid;
            } else {
                $first = $nodesOfListToSlowOrMid;
            }
            $fast = $nodesOfListToSlowOrMid;
            echo "<br>" . $nodesOfListToSlowOrMid->data;
            $nodesOfListToSlowOrMid = $nodesOfListToSlowOrMid->next;
        }

        if ($first == $slow) {
            return true;
        } else {
            return false;
        }
        return $list;
    }

    public static function isPalindromeEvenLinkedList(LinkedList $list)
    {
        #22
        #2112
        #22122122
        echo "<br>inside even";
        if ($list == null) {
            return $list;
        }

        $fast = $list->head;
        $slow = $list->head;
        while ($fast != null && $fast->next != null) {
            $last = $fast;
            $fast = $fast->next->next;
            $slow = $slow->next;
        }

        echo "<br>last : " . $last->data;
        echo "<br>mid : " . $slow->data;
        echo "<br>firstHead (slow) : ";

        #create firstHead
        $firstHead = $slow;
        while ($firstHead != null) {
            echo "<br>" . $firstHead->data;
            $firstHead = $firstHead->next;
        }

        #reserving secondHead prev
        $secondHead = null;
        $prev = null;
        $curr2 = $list->head;
        while ($curr2 != $slow) {
            $nextNode = $curr2->next;
            $curr2->next = $prev;
            $prev = $curr2;
            $curr2 = $nextNode;
        }

        echo "<br>reverse secondNode (Prev) : ";
        $curr3 = $prev;
        while ($curr3 != null) {
            echo "<br>" . $curr3->data;
            $curr3 = $curr3->next;
        }

        if ($prev == $slow) {
            return true;
        } else {
            return false;
        }


    }

    public static function isPalidrome(LinkedList $list)
    {
        $curr = $list->head;
        $count = 0;
        while ($curr != null) {
            $curr = $curr->next;
            $count++;
        }

        $isPalindrome = ($count % 2 == 0) ? self::isPalindromeEvenLinkedList($list) : self::isPalindromeOddLinkedList($list);

        return $isPalindrome;
    }
}

?>