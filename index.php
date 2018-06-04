<?php
echo "hello world";
echo "hello github";
echo 1234;
echo '<hr>';
for($i = 0; $i < 10; $i++)
{
	echo $i * 100;
}

echo '<br>';

echo '<br>';

echo '<br>';

echo '<br>';
echo '<br>';

//echo 11111111111;
//echo 2222222222222;

$value = 0;
$arr = [1,2,3,4,5,6,7,6,5,4,3,2,1];
foreach($arr as $v)
{
	$value ^= $v;
}
//echo $value;

for($i = 1; $i < 100; $i++)
{
	if(($i & ($i - 1)) == 0)
	{
		echo $i.'&'.($i-1).'='.($i & ($i - 1)),'<br>';
	}
}
/*
0011
0100

*/
