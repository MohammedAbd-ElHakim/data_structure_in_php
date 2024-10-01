<?php
include_once './AutoLoaded.php';

class DeleteLastOccurrenceFromLinkedList implements DeleteLastOccurrenceFromLinkedListInterFace
{
    public static function execute(LinkedList $list, $key)
    {
        $curr = $list->head;
        $nxt = $curr->next;
        $prev = new Node('');
        $count = 0;

        #طبعا احنا هنا مفروض نمسح الكي من الليست لكن ما كلهم اخر نود تحتوي علي قيمه الكي المفروض نمسحو
        #يعني حناخد الكي حنشوفو مكرر كم مره 

        if ($list->head == null) {
            return $list; // القائمة فارغة
        }

        while ($curr != null) {
            # code...
            if ($curr->data == $key) {
                $count++;
            }
            $curr = $curr->next;
        }

        if ($count == 1 && $list->head->data == $key) {
            $list->head = $list->head->next;
            return $list;
        }

        $curr2 = $list->head;
        echo "<br>count : ***" . $count;
        if ($count == 1) {
            while ($curr2->next != null) {
                # code...
                $nxt = $curr2->next;
                if ($curr2->data == $key) {
                    $prev->next = $nxt;
                }
                $prev = $curr2;
                $curr2 = $curr2->next;
            }

        } elseif ($count > 1) {
            # code...
            $tmpPtr = 0;
            while ($curr2 != null) {
                # code...
                $nxt = $curr2->next;
                echo "<br>key : " . $key;
                echo "<br>count : " . $count;
                echo "<br>curr2 : " . $curr2->data;
                echo "<br>tmpPtr : " . $tmpPtr;
                echo "<br>===================";
                if ($curr2->data == $key) {
                    $tmpPtr++;
                }
                if ($tmpPtr == $count) {
                    # code...
                    $prev->next = $nxt;
                }
                $prev = $curr2;
                $curr2 = $curr2->next;
            }
        }
        return $list;
    }

}
?>