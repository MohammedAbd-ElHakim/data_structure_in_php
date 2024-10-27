<?php
include_once 'Autoload.php';

class CountOfSubarraysWhoseFirstElementIsTheMinimum
{
    public static function startCount(array $arr)
    {
        #first element is not greater than other elements of the subarray.
        $count = 0;
        for ($i = 0; $i < count($arr); $i++) {
            for ($j = $i; $j < count($arr); $j++) {
                // echo "<br>" . $arr[$i] . " , " . $arr[$j];
                echo "<br>count : " . $count;

                if ($arr[$j] >= $arr[$i]) {
                    echo "<br>" . $arr[$i] . " , " . $arr[$j];
                    $count++;
                } else
                    break;
            }
        }
        return $count;
    }
}

?>