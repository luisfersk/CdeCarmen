<?php
function connect()
{
	$user = "root";
	$pass = "";
	$host = "127.0.0.1";
	$ddbb = "mid_db";
	$con = new mysqli($host, $user, $pass, $ddbb);
	return $con;
}