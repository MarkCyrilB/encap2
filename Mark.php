<?php
require 'math.php';

$m1 = new Math();
$m1->set_details(5, 10);
echo $m1->get_details();
echo "<br>";

$m2 = new Math();
$m2->set_details(20, 30);
echo $m2->get_details();
echo "<br>";

$m3 = new Math();
$m3->set_details(7, 8);
echo $m3->get_details();
echo "<br>";
?>