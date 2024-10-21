<?php
include_once './AutoLoaded.php';

class SortALinkedListOf0s1sAnd2s
{
    public static function sort(LinkedList $list)
    {
        $numbers = [
            0 => 0,
            1 => 0,
            2 => 0,
            3 => 0,
            4 => 0,
            5 => 0,
            6 => 0,
            7 => 0,
            8 => 0,
            9 => 0
        ];

        $curr = $list->head;
        while ($curr != null) {
            $dataOfCurr = $curr->data;
            if (isset($numbers[$dataOfCurr])) {
                $numbers[$dataOfCurr] += 1;
            }
            $curr = $curr->next;
        }

        echo "<pre>";
        print_r($numbers);
        echo "</pre>";
        $curr2 = $list->head;
        while ($curr2 != null) {
            for ($i = 0; $i <= 9; $i++) {
                # code...
                if ($numbers[$i] == 0) {
                    continue;
                }

                $curr2->data = $i;
                $numbers[$i] -= 1;
                $i--;
                $curr2 = $curr2->next;
            }
        }

        return $list;

    }


}
?>