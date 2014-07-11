<?php
$old_str = '13697643844';
$new_substring = '*^';
$new_arr = array('a','b');
$new_str = substr_replace($old_str,$new_substring,0,2);
print $new_str . '<br />';
$new_str2 = substr_replace($old_str,$new_arr,0,2);
print $new_str2 . '<br />';
print '<hr>';
$input = array('A: XXX','B: XXX','C: XXX');
var_dump($input);
$new_input = substr_replace($input,'YYY',0,1);
var_dump($new_input);
print '<hr>';
$length = array(1,2,3);
$replace = array('AAA','BBB','CCC');
$new_input = substr_replace($input,$replace,3,$length);
var_dump($new_input);