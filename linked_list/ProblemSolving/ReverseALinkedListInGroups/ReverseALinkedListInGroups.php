<?php
include_once './AutoLoaded.php';

class ReverseALinkedListInGroups
{
    public static function reverse(LinkedList $list, $k)
    {
        if ($k <= 0)
            return $list;

        $curr = $list->head;
        $prevTail = null;
        $newHead = null;

        while ($curr != null) {
            $currHead = $curr;
            $prev = null;
            $index = 0;
            echo "<br>currHead before changing curr pointer : ";
            $curr2 = $currHead;
            while ($curr2 != null) {
                echo "<br>" . $curr2->data;
                $curr2 = $curr2->next;
            }

            // عكس المجموعة
            echo "<br>start changing curr pointer throw the list :";
            while ($curr != null && $index < $k) {
                $nextNode = $curr->next;
                $curr->next = $prev;

                $prev = $curr;
                echo "<br>index : " . $index;
                echo "<br>prev : ";
                $prev2 = $prev;
                while ($prev2 != null) {
                    echo "<br>" . $prev2->data;
                    $prev2 = $prev2->next;
                }
                echo "<br>==========";
                $curr = $nextNode;
                $index++;
            }

            $curr2 = $curr;
            while ($curr2 != null) {
                echo "<br>" . $curr2->data;
                $curr2 = $curr2->next;
            }

            echo "<br>list after changing curr pointer : ";
            $curr7 = $list->head;
            while ($curr7 != null) {
                echo "<br>" . $curr7->data;
                $curr7 = $curr7->next;
            }

            echo "<br>currHead after changing curr pointer : ";
            $curr3 = $currHead;
            while ($curr3 != null) {
                echo "<br>" . $curr3->data;
                $curr3 = $curr3->next;
            }

            return;

            // تعيين الرأس الجديد
            if ($newHead === null) {
                $newHead = $prev;
            }

            // ربط نهاية المجموعة السابقة
            if ($prevTail !== null) {
                $prevTail->next = $prev;
            }

            // تحديث الذيل السابق
            $prevTail = $currHead;

            // إذا كانت هناك المزيد من العقد للتعامل معها
            if ($curr === null) {
                break; // إذا انتهت العقد، نخرج من الحلقة
            }
        }

        $list->head = $newHead; // تعيين الرأس النهائي للقائمة

        // طباعة النتائج
        echo "<br>after reverse : ";
        $curr = $list->head;
        while ($curr != null) {
            echo "<br>" . $curr->data;
            $curr = $curr->next;
        }
        // return $list;
    }
    public static function reverse1(LinkedList $list, $k)
    {
        $curr = $list->head;
        $prevTail = null;
        $newHead = null;

        while ($curr != null) {
            # code...
            $currHead = $curr;
            $prev = null;

            $i = 1;
            while ($curr != null && $i <= $k) {
                $nextNode = $curr->next;
                $curr->next = $prev;
                $prev = $curr;
                $curr = $nextNode;
                $i++;
            }

            if ($newHead == null) {
                $newHead = $prev;
            }

            if ($prevTail !== null) {
                $prevTail->next = $prev;
            }

            $prevTail = $currHead;
        }

        $list->head = $newHead;

        echo "<br>after reverse :";
        $curr2 = $list->head;
        while ($curr2 != null) {
            echo "<br>" . $curr2->data;
            $curr2 = $curr2->next;
        }
    }
}
?>