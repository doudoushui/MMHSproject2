<?php
  session_start();
  $arr = array(
		'id'=>'1',
		'name'=>'admin',
		'pwd'=>'123456',
		);
  $_SESSION['home'] = $arr;
?>