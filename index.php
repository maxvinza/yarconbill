<?php
include_once'model/model.php';
include_once'view/view.php';
$a = new model;
$view = new view;
$post = $_POST;
if (isset($post['login']) AND isset($post['pass'])){
  if($post['login']=='super_admin' AND $post['pass']=="fuckingsupper_puper_admin_max100500"){
    $head = array('id','username','pass','balance');
    $adminTable = $view->viewTable($a->abonAlltable(),$head);
    include 'view/page_admin.php';
  }
  else{
    $balance = $a->abonBalance($post['login'],$post['pass'])/100;
    include 'view/page_balance.php';
  }
}
else include 'view/page_start.php';
?>
