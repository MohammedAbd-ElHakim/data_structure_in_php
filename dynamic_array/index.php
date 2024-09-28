<?php
include_once('dynamic_arr.php');
$D_arr = new Dynamic_array();
$D_arr->add_item(1);
$D_arr->add_item(2);
$D_arr->add_item(3);
$D_arr->add_item(4);
$D_arr->add_item(7);

$D_arr->delete_all_data();

<<<<<<< HEAD
// $D_arr->add_item(11);
// $D_arr->add_item(21);
// $D_arr->add_item(31);
// $D_arr->add_item(41);
// $D_arr->add_item(71);

// $D_arr->delete_all_data();
=======
$D_arr->add_item(11);
$D_arr->add_item(21);
$D_arr->add_item(31);
$D_arr->add_item(41);
$D_arr->add_item(71);
>>>>>>> 93b33fe6fe20081c6b0b553cd11970f92ecb409d

$D_arr->add_item(1);
$D_arr->add_item(2);
$D_arr->add_item(3);
$D_arr->add_item(4);
$D_arr->add_item(7);
<<<<<<< HEAD

=======
>>>>>>> 93b33fe6fe20081c6b0b553cd11970f92ecb409d
$D_arr->delete(1);
$D_arr->delete(2);
$D_arr->delete(3);
$D_arr->delete(4);
$D_arr->delete(7);

echo "<pre>";
print_r($D_arr->get_data());
echo "</pre>";


?>