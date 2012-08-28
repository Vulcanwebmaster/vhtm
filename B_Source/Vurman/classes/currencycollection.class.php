<?php
class CurrencyCollection
{
  static public function getCurrencies($id=false) 
  {
    $accounts= array();
    $result = array();
    $query = $id? " SELECT cu.id, cu.abbreviation cuname FROM currency cu WHERE id = '$id'":" SELECT cu.id, cu.abbreviation cuname FROM currency cu";
    $qres=mysql_query($query);

    if(!empty($qres))
    while($row = mysql_fetch_assoc($qres))
      $result[] = $row;

    return($result);
  }

}
