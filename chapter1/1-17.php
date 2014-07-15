<?php
function count_vowel($str)
{
	// $str = 'This weekend,I\'m going shopping for a pet chicken.';
	$vowels = 0;
	$j = strlen($str);
	for($i=0;$i<$j;$i++)
	{
		if(strstr('aeiouAEIOU',$str[$i]))
		{
			$vowels++;
		}	
	}
	return $vowels;
}

$str = 'This weekend,I\'m going shopping for a pet chicken.';
$num = count_vowel($str);
print $num;

$str = 'hello';
$num = count_vowel($str);
print $num;