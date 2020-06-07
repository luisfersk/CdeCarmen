<?php

function conectarse()
{
  $servername = "127.0.0.1";
  $dbname     = "mid_db";
  $username   = "root";
  $password   = "Soka1212Fer";
  $conn       = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die(mysqli_connect_error());
    return false;
  }
  return $conn;
}
