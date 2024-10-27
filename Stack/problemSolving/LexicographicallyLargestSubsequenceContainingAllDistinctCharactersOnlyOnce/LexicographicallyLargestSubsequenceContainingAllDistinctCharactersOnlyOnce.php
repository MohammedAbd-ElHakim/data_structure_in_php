<?php
include_once 'Autoload.php';

class LexicographicallyLargestSubsequenceContainingAllDistinctCharactersOnlyOnce
{
    public static function start(string $str, LinkedList $result)
    {
        if ($str == null) {
            return;
        }
        $arrOfChar = [];
        $visited = [];
        for ($i = 0; $i < strlen($str); $i++) {
            $arrOfChar[$str[$i]] = $i;
        }
        for ($i = 0; $i < strlen($str); $i++) {
            $currChar = $str[$i];

            if (in_array($currChar, $visited)) {
                continue;
            }
            while (self::getSize($result) > 0 && Peek::peek($result) < $currChar && $arrOfChar[Peek::peek($result)] > $i) {
                $peekedValue = Peek::peek($result);
                pop::pop($result);

                if (in_array($peekedValue, $visited)) {
                    foreach ($visited as $key => $value) {
                        # code...
                        if ($visited[$key] == $peekedValue) {
                            unset($visited[$key]);
                            break;
                        }
                    }
                }
            }

            push::push($result, new Node($currChar));
            $visited[] = $currChar;
        }
    }

    public static function getSize(LinkedList $list)
    {
        $count = 0;
        $curr = $list->head;
        while ($curr != null) {
            $count++;
            $curr = $curr->next;
        }
        return $count;
    }
    public static function getRear(LinkedList $list)
    {
        if ($list == null) {
            return;
        }

        $last = null;
        $curr = $list->head;
        while ($curr != null) {
            $last = $curr->data;
            $curr = $curr->next;
        }
        return $last;
    }
    public static function deleteRear(LinkedList $list)
    {
        $curr = $list->head;
        while ($curr->next != null) {
            $curr = $curr->next;
        }
        $curr->next = null;
    }
}

?>