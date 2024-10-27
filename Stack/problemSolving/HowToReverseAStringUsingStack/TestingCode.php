<?php
include_once 'Autoload.php';

$result = new LinkedList(new Node());
$s = 'mohammed';

echo "<br>before reverse : ";
for ($i = 0; $i <= strlen($s) - 1; $i++) {
    echo "<br>" . $s[$i];
}
$reverseStr = HowToReverseAStringUsingStack::reverse($s, $result);
echo "<br>after reverse : ";
Displayer::display($reverseStr);
?>