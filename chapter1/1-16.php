<?php
$str = 'hello,world';
$new_str = substr_replace($str,'...',4);
print $new_str;