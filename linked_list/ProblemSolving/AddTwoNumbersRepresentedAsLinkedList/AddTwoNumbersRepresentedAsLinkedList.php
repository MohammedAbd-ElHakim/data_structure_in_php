<?php
include_once './AutoLoaded.php';

class AddTwoNumbersRepresentedAsLinkedList
{
    public static function sum(LinkedList $list, LinkedList $list2)
    {
        if ($list == null) {
            return;
        }

        $curr = $list->head;
        $curr1 = $list2->head;
        $carry = null;
        $result = null;


        while ($curr != null && $curr1 != null) {
            $currData = $curr->data;
            $currData1 = $curr1->data;

            $sum = $currData1 + $currData;
            if ($carry > 0) {
                $sum += $carry;
                $carry = null;
            }
            if ($sum >= 10) {
                $firstDigit = $sum % 10; # 10 % 10 = 0
                $carry = (int) $sum / 10; # 10 / 10 = 1

                if ($result == null) {
                    $result = new Node($firstDigit);
                    $curr = $curr->next;
                    $curr1 = $curr1->next;
                    continue;
                } elseif ($result !== null) {
                    $r1 = $result;
                    while ($r1->next != null) {
                        $r1 = $r1->next;
                    }
                    $r1->next = new Node($firstDigit);
                    $curr = $curr->next;
                    $curr1 = $curr1->next;
                    $r1 = null;
                    continue;
                }
            }
            if ($result == null) {
                $result = new Node($sum);
            } elseif ($result !== null) {
                $r1 = $result;
                while ($r1->next != null) {
                    $r1 = $r1->next;
                }
                $r1->next = new Node($sum);
                $r1 = null;
            }
            $curr = $curr->next;
            $curr1 = $curr1->next;
        }

        while ($curr != null) {
            $sum = $curr->data;
            if ($carry != null) {
                $sum += $carry;
                $carry = null;
            }

            if ($sum > 9) {
                $firstDigit = (int) $sum % 10;
                $carry = (int) $sum / 10;

                $r1 = $result;
                while ($r1->next != null) {
                    $r1 = $r1->next;
                }
                $r1->next = new Node($firstDigit);
                $r1 = null;
            } else {
                $r1 = $result;
                while ($r1->next != null) {
                    $r1 = $r1->next;
                }
                $r1->next = new Node($sum);
                $r1 = null;
            }
            $curr = $curr->next;
        }

        while ($curr1 !== null) {
            $sum = $curr1->data;
            if ($carry != null) {
                $sum += $carry;
                $carry = null;
            }

            if ($sum > 9) {
                $firstDigit = (int) $sum % 10;
                $carry = (int) $sum / 10;

                $r1 = $result;
                while ($r1->next != null) {
                    $r1 = $r1->next;
                }
                $r1->next = new Node((int) $firstDigit);
                $r1 = null;
            } else {
                $r1 = $result;
                while ($r1->next != null) {
                    $r1 = $r1->next;
                }
                $r1->next = new Node((int) $sum);
                $r1 = null;
            }
            $curr1 = $curr1->next;
        }
        echo "<br>carry : " . (int) $carry;

        $r1 = $result;
        if ($carry !== null) {
            while ($r1->next != null) {
                $r1 = $r1->next;
            }
            $r1->data = (int) $carry + $r1->data + 10 - (int) $carry;
            $carry = null;
        }
        $r1 = null;
        echo "<br>result : ";
        $result2 = $result;
        while ($result2 != null) {
            echo "<br>" . $result2->data;
            $result2 = $result2->next;
        }
        return $result;
    }
}

?>