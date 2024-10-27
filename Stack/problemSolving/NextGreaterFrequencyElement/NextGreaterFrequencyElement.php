<?php
include_once 'Autoload.php';

class NextGreaterFrequencyElement
{
    // public static function startNow(array $numbers, LinkedList $stack)
    // {
    //     $frequency = [];
    //     for ($i = 0; $i < count($numbers); $i++) {
    //         $currNum = $numbers[$i];
    //         $frequency[$numbers[$i]] = 1;
    //         for ($j = 0; $j < count($numbers); $j++) {
    //             # code...
    //             if ($i == $j) {
    //                 continue;
    //             }
    //             if ($numbers[$j] == $currNum) {
    //                 $frequency[$numbers[$i]]++;
    //             }
    //         }
    //     }

    //     $frequencyOfEachElement = array();
    //     for ($i = 0; $i < count($numbers); $i++) {
    //         $frequencyOfEachElement[$i] = $frequency[$numbers[$i]];
    //     }

    //     $finalArr = [];
    //     for ($i = 0; $i < count($numbers); $i++) {
    //         $foundGreater = false;
    //         $freqOfCurrNum = $frequency[$numbers[$i]];
    //         echo "<br>i : " . $i;
    //         echo "<br>freqOfCurrNum : " . $freqOfCurrNum;
    //         echo "<br>==================================";
    //         for ($j = $i + 1; $j < count($numbers); $j++) {
    //             $freqOfNextNum = $frequency[$numbers[$j]];
    //             echo "<br>freqOfNextNum : " . $freqOfNextNum;
    //             if ($freqOfNextNum > $freqOfCurrNum) {
    //                 $foundGreater = true;
    //                 $finalArr[$i] = $numbers[$j];
    //                 break;
    //             }
    //             echo "<br>==================================";
    //         }
    //         if (!$foundGreater) {
    //             $finalArr[$i] = -1;
    //         }
    //     }

    //     echo "<br>finalArr : ";
    //     echo "<pre>";
    //     print_r($finalArr);
    //     echo "</pre>";

    //     echo "<br>freq : ";
    //     echo "<pre>";
    //     print_r($frequency);
    //     echo "</pre>";

    //     echo "<br>frequencyOfEachElement : ";
    //     echo "<pre>";
    //     print_r($frequencyOfEachElement);
    //     echo "</pre>";

    //     echo "<br>frequencyOfEachElement : ";
    //     echo "<pre>";
    //     print_r($frequencyOfEachElement);
    //     echo "</pre>";
    // }

    // public static function startNow(array $numbers, LinkedList $stack)
    // {
    //     $frequency = []; #ختيت فيها هنا عدد تكرار كل عنصر
    //     for ($i = 0; $i < count($numbers); $i++) {
    //         $currNum = $numbers[$i];
    //         $frequency[$numbers[$i]] = 1;
    //         for ($j = 0; $j < count($numbers); $j++) {
    //             # code...
    //             if ($i == $j) {
    //                 continue;
    //             }
    //             if ($numbers[$j] == $currNum) {
    //                 $frequency[$numbers[$i]]++;
    //             }
    //         }
    //     }

    //     $frequencyOfEachElement = array(); #عددتكرارات كل عنصر
    //     for ($i = 0; $i < count($numbers); $i++) {
    //         $frequencyOfEachElement[$i] = $frequency[$numbers[$i]];
    //     }

    //     for ($i = 0; $i < count($numbers); $i++) {
    //         $found = false;
    //         $freqOfCurrNum = $frequency[$numbers[$i]];
    //         for ($j = $i + 1; $j < count($numbers); $j++) {
    //             $freOfNextNum = $frequency[$numbers[$j]];
    //             if ($freOfNextNum > $freqOfCurrNum) {
    //                 $found = true;
    //                 break;
    //             }
    //         }
    //         if (!$found) {
    //             push::push($stack, new Node($numbers[$i]));
    //         }
    //     }

    //     echo "<br>number which we cant find greater frequency than it : ";
    //     Displayer::display($stack);

    //     $finalArr = [];
    //     for ($i = 0; $i < count($numbers); $i++) {
    //         if (peek::peek($stack) == $numbers[$i]) {
    //             $finalArr[$i] = -1;
    //             pop::pop($stack);
    //             continue;
    //         }

    //         $freqOfCurrNum = $frequency[$numbers[$i]];
    //         for ($j = $i + 1; $j < count($numbers); $j++) {
    //             $freqOfNextNum = $frequency[$numbers[$j]];
    //             if ($freqOfNextNum > $freqOfCurrNum) {
    //                 $finalArr[$i] = $numbers[$j];
    //                 break;
    //             }
    //         }
    //     }

    //     echo "<br>finalArr : ";
    //     echo "<pre>";
    //     print_r($finalArr);
    //     echo "</pre>";

    //     echo "<br>freq : ";
    //     echo "<pre>";
    //     print_r($frequency);
    //     echo "</pre>";

    //     echo "<br>frequencyOfEachElement : ";
    //     echo "<pre>";
    //     print_r($frequencyOfEachElement);
    //     echo "</pre>";
    // }
    public static function startNow(array $numbers, LinkedList $stack)
    {
        $frequency = array_count_values($numbers);
        $finalArr = array_fill(0, count($numbers), -1);

        for ($i = 0; $i < count($numbers); $i++) {
            $freqOfCurrNum = $frequency[$numbers[$i]];

            #حزف العناصر من الاستاك التي ليس لديها عنصار بجانبها تكرارها اكبر
            while ($stack->head != null && $frequency[peek::peek($stack)] <= $freqOfCurrNum) {
                pop::pop($stack);
            }

            if ($stack->head != null) {
                $finalArr[$i] = peek::peek($stack);
            }
            Push::push($stack, new Node($numbers[$i]));
        }
        return $finalArr;
    }
}

?>