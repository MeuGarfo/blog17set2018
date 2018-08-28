<?php
require '../system.php';
$str=segment(1);
switch($str){
  //root
  case '/':
  controller('index');
  break;
  //other
  case 'categorias';
  controller('categorias');
  break;
  case 'dashboard';
  view('dashboard');
  break;
  case 'signup';
  view('signup');
  break;
  //not found
  default:
  view('404');
  break;
}
