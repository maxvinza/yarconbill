<?php
include_once 'sql.php';
class model{
    var $sql;
    function __construct(){
       $this->sql=new SafeMySQL;
    }
    function abonBalance($login, $pass){
        $ret = 'error';
        $data = $this->sql->getRow("select * from abons where username =?s", $login);
        if($data['pass']==$pass){
            $ret = $data['balance'];
        }
        return $ret;
    }
    function abonAlltable(){
        $ret = $this->sql->getAll("select * from abons");
        foreach ($ret as $key => $value) {
          $ret[$key]['balance'] = $ret[$key]['balance']/100;
          $ret[$key]['balance'] = $ret[$key]['balance']." руб";
        }
        return $ret;
    }
    function abonFinanceAdd($login,$sum){
        $balance = $this->sql->getOne("select balance from abons where username =?s", $login);
        $balance = $sum + $balance;
        $this->sql->query("update abons set balance=?i",$balance);
    }
}
?>
