<?php
include_once 'Autoload.php';

$result = new LinkedList(new Node());
$s = '{()}[]';

if (ValidParenthesesInAnExpression::isParenthess($s, $result)) {
    echo "<br>true";
} else {
    echo "<br>false";
}

?>