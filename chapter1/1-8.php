<?php
if(!isset($_GET['e']))
{
	$_GET['e'] = 'qq.com';
}
if( strpos($_GET['e'],'@') === false)
{
	print 'There was no @ in the e-mail address!<br />';
}
else
{
	print 'True';
}