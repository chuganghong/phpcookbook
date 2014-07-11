<?php
if(isset($_GET['u']))
{
	$username = substr($_GET['u'],0,-2);
	print $username;
}
else
{
	print 'Please input a username!';
}