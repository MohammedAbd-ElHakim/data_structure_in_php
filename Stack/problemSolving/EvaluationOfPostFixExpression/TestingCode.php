<?php
include_once 'Autoload.php';

$result = new LinkedList(new Node());
$s = '231*+9-';

echo "<br>prefix :" . $s;

$result = EvaluationOfPostFixExpression::evalution($s, $result);
echo "<br>after evalution : ";
Displayer::display($result);
?>