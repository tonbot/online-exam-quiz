<?php

 class dbconn {
   
   public  $pdo=null;
/////////////////////////////////////////////////////////////
    function __construct(){
        try{
        //making connection to the database
              $host="localhost";
              $dbname="exam";
              $password="";
              $user="root";

           $this->pdo=new PDO("mysql:host=$host; dbname=$dbname", $user, $password );
           $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             
        } catch(PDOException $e){
            echo ($e->getMessage());
        }
    }


///////////////////////////////////////////////////////////////////////////
    /// checking the database if the question already exist
    function getData($ques){ 
        ///function that fetch from the database;
             $querry="SELECT * FROM quetiontable WHERE quetion_id = '$ques' " ;
             $result_set=$this->pdo->query($querry);
             $result1=$result_set->fetchALL();
             $result=sizeof($result1);
            return $result;
          }
//////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////
   /// insert new quetion if not already exist
    function add_question($quetion, $correctOption, $quetion_id) {            
        $query="INSERT INTO quetiontable( question, correctOption, quetion_id  ) VALUES ( '$quetion', '$correctOption', '$quetion_id' )" ;
        $result=$this->pdo->exec($query);
         return "successful";
}
/////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////
 /// insert new opion if not already exist
 function add_option($quetion_id, $optA, $optB, $optC, $optD) {            
    $query="INSERT INTO optionn (quetion_id, optA, optB, optC, optD) VALUES ( '$quetion_id', '$optA', '$optB', '$optC', '$optD') " ;
    $result=$this->pdo->exec($query);
     return "successful";
}
/////////////////////////////////////////////////////////////////////////////////


 }

  

?>
