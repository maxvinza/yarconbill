<?php
class View{
  function viewTable($arr,$key){
  $ret = "<table class=\"table\"><thead><tr>";
  foreach($key as $k=>$v){
      $ret .= "<th scope=\"col\">".$v."</th>";
  }
  $ret.= "</tr></thead><tbody>";
  foreach($arr as $k=>$v){
      $ret.="<tr>";
      foreach($v as $k2=>$v2){
          $ret.="<td>".$v2."</td>";
      }
      $ret.="</tr>";
  }
  $ret.= "</tbody></table>";
  return $ret;
}

}
?>
