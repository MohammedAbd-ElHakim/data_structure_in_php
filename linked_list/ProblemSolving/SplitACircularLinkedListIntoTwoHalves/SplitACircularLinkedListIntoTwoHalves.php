<?php
include_once './AutoLoaded.php';

class SplitACircularLinkedListIntoTwoHalves
{

    public static function split(LinkedList $list)
    {
        $curr = $list->head;
        do {
            $prev = $curr;
            $curr = $curr->next;
        } while ($curr != $list->head);

        $prev->next = null;

        #get mid
        echo "<br> mid node is :";
        $fast = $list->head;
        $slow = $list->head;
        while ($fast != null && $fast->next != null) {
            $fast = $fast->next->next;
            $slow = $slow->next;
        }
        echo "<br>mid : " . $slow->data;

        #first node head
        $firstNewNode = null;
        $curr2 = $list->head;
        while ($curr2 != $slow) {
            if ($firstNewNode == null) {
                $newNode = new Node($curr2->data);
                $firstNewNode = $newNode;
            } elseif ($firstNewNode !== null) {
                # code...
                $newNode = new Node($curr2->data);
                $firstNewNode->next = $newNode;
            }
            $curr2 = $curr2->next;
        }

        echo "<br> firstNewNode is :";
        $c = $firstNewNode;
        while ($c != null) {
            echo "<br>" . $c->data;
            $c = $c->next;
        }

        #second node
        $secondNode = null;
        $c2 = $slow;
        while ($c2 !== null) {
            if ($secondNode == null) {
                $newNode = new Node($c2->data);
                $secondNode = $newNode;

            } elseif ($secondNode !== null) {
                $newNode = new Node($c2->data);
                $secondNode->next = $newNode;
            }
            $c2 = $c2->next;
        }
        echo "<br> secondNode is :";
        $c3 = $secondNode;
        while ($c3 != null) {
            echo "<br>" . $c3->data;
            $c3 = $c3->next;
        }

    }
}

?>