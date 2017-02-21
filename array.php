<?php 

/*----if data is in form of array so you can use the below code ---*/
$a=array('[1','2','[3]]','4');
$c=array();
foreach($a as $b)
{
$d=str_replace("[","",$b);
$d=str_replace("]","",$d);
$c[]=$d;
}
print_r($c);


/*----if data is in form of string so you can use the below code ---*/

$x="[[1,2,[3]],4]";
$a=explode(",",$x);
$c=array();
foreach($a as $b)
{
$d=str_replace("[","",$b);
$d=str_replace("]","",$d);
$c[]=$d;
}
print_r($c);

?>
