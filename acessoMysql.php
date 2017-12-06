<?php
  
  $mysql = new mysqli('localhost', 'root', 'secret', 'babydress');
  $mysql->set_charset("utf8");
  if ($mysql->connect_error) {
    var_dump("Connection failed: " . $mysql->connect_error);
    die();
  }
