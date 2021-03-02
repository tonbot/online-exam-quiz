<?php
include_once "adminDBConnection.php";

//////////////////////////////////////// GETTING FORM DATA;
  $quetion_id=  $_POST['quetion_id'];
  $Question_Title=  $_POST['Question_Title'];
  $Option_1=  $_POST['Option_1'];
  $Option_2=  $_POST['Option_2'];
  $Option_3=  $_POST['Option_3'];
  $Option_4=  $_POST['Option_4'];
  $Right_Option=  $_POST['Right_Option'];
///////////////////////////////////////////////////////// ENDS HERE

/////////////////////////////////////////// CREATING NEW DBCONN OBJECT of admindbconnection
  $data=new dbconn;
  $result=$data-> getData( $quetion_id); 
  if ($result >= 1){
      echo ("QUESTION ID IS ALREADY REGISTERED");
  }
  else {
      $put= $data->add_question( $Question_Title, $Right_Option, $quetion_id );
    if ($put){
      $data->add_option( $quetion_id,  $Option_1, $Option_2, $Option_3, $Option_4 );
      echo ("NEW QUESTION ADDED SUCCESSFULLY");
    }
  }
?>