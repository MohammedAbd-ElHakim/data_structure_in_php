<?php
include_once 'Autoload.php';

$result = new LinkedList(new Node());
$s = 'ABC/-AK/L-*';

echo "<br>prefix :" . $s;

PostfixToPrefixConversion::convertPostFixToPreFix($s, $result);

?>