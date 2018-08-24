<?php
require '../system.php';
$str=segment(1);
switch($str){
  case '/':
  controller('index');
  break;
  case 'signup';
  view('signup');
  break;
  case 'dashboard';
  view('dashboard');
  break;
}
