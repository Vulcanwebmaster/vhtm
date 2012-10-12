<?php
class AnyTable
{
  /* $columns should not contain 'id' */
  static public function buildJavascript($tableName, array $columns) 
  {
    echo "
function SetValues_$tableName(id,disabled) 
{
var Field_id = new Array(0,";
    echo AnyTable::getData($tableName, 'id');
    echo ");
     ";

    foreach($columns as $column):
      echo"var Field_$column = new Array(0,";
      echo AnyTable::getData($tableName, $column);
      echo ");
       ";
    endforeach;

    echo"
if(Field_id[id])
{
";
    foreach($columns as $column)
      echo "document.getElementById('$column').value = Field_".$column."[id];
      if(disabled) document.getElementById('$column').disabled = true;
      ";
    echo"}
    if(id==0)
{";
    foreach($columns as $column)
      echo"  document.getElementById('$column').value = '';
      if(disabled) document.getElementById('$column').disabled = false;
      ";
    echo "}
}";
  }

  static public function getData($tableName, $columnName=false, $criteria=false) 
  {
    if($columnName&&$criteria)
    {
      $query = "SELECT * FROM $tableName WHERE $columnName = '$criteria' ";
      $qres = mysql_query($query);
      if($qres)
        $row = mysql_fetch_assoc($qres);
      return($row);
    }
    elseif(!$criteria&&!$columnName)
    {
      $query = "Select * FROM $tableName ";
      $qres = mysql_query($query);
      $row = array();
      if($qres)
      while($row[] = mysql_fetch_assoc($qres))
        {};
      unset($row[count($row)-1]);        
      return($row);
    }
    else//if $columnName but !$criteria
    {
      $query = "Select $columnName FROM $tableName ";
      $qres = mysql_query($query);
      $row = array();
      if($qres)
      while($row = mysql_fetch_assoc($qres))
        $result[]='"'.$row[$columnName].'"';
      return(implode(',',$result));
    }
  }

  function getIdsProperty($property) 
  {
//    $properties = array('id', 'name', 'currency', 'nav', 'date_nav');
//    if(!in_array($property,$properties ))
//      die('wrong property!');
    $Ids = '';
    $isins = $this->getIsins();
    foreach($isins as $row)  
      if(trim($Ids))
       $Ids=$Ids.',"'.$row[$property].'"';
      else 
       $Ids='"'.$row[$property].'"';
    return $Ids;
  }

};
?>