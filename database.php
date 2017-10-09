<?php
$connect = mysqli_connect('localhost','root','','siteUsers');
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
 
?>
