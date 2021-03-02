<?php
include_once "dbconnection.php";
 $data=new dbconn;

 if ($data !=null ){
    $result=json_encode($data->getData());
    echo ($result);
 }


?>