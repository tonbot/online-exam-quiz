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
        
        } catch(PDOException $e){
            echo ($e->getMessage());
        }
    }
////////////////////////////////////////////////////////

    function getData(){ 
   ///function that fetch from the database;
        $query="SELECT * FROM quetiontable INNER JOIN optionn ON quetiontable.quetion_id=optionn.quetion_id" ;
        $result_set=$this->pdo->query($query);
        $result_set->setFetchMode(PDO::FETCH_ASSOC);
        $result= $result_set->fetchall();
        return $result;
   
     }
 //////////////////////////////////////////////////////////  

 }





 ?>