Sort the different arrays at a glance using single function.
<?php
$array1=array("Dog","Dog","Cat");
$array2=array("pluto","fido","missy");
$array3=array(20,21,19);
array_multisort($array1, SORT_ASC,$array2, SORT_DESC, $array3, SORT_DESC);
print_r($array1);
print_r($array2);
print_r($array3);
?>