<?php

	global $con;

	$con = mysqli_connect('localhost','root','','crud');

	if(!$con)
	{
		echo 'unable to connect with db';
		die();
	}