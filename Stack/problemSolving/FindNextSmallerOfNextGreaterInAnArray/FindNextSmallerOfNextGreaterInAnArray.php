<?php
include_once 'Autoload.php';

class FindNextSmallerOfNextGreaterInAnArray
{
    public static function start(array $numbers, LinkedList $result)
    {
        for ($i = 0; $i <= count($numbers) - 1; $i++) {
            $prevNumber = $numbers[$i];

            $found = false;
            for ($n = $i + 1; $n < count($numbers) - 1; $n++) {
                if ($found) {
                    break;
                }
                $nextNumber = $numbers[$n];
                #getNext greater
                if ($nextNumber > $prevNumber) {
                    #getNextSmaller After Next Greater
                    for ($m = $n + 1; $m <= count($numbers) - 1; $m++) {
                        $smallerAfterNextGreater = $numbers[$m];
                        if ($nextNumber > $smallerAfterNextGreater) {
                            $found = true;
                            $temp = $prevNumber . " -> " . $smallerAfterNextGreater;
                            push::push($result, new Node($temp));
                            $temp = null;
                            break;
                        }

                    }

                }
            }
            if (!$found) {
                $temp = $prevNumber . "-> -1";
                push::push($result, new Node($temp));
                $temp = null;
            }
        }
    }
}

?>