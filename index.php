<?php
include_once "include.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="customCss/index.css">

    <script>
    function play(){
        window.location.href= "http://localhost/examDemo/question_page.php";
    }

    </script>
</head>

<body>
   <div class="container  container1 mt-5   ">
       <div class="titleContainer">
                so you think you know Nigeria?
       </div>
       <div class="row row1">
           <div class="col-sm-6  text-center">
               <p class="text-center"> <button class="btn btn-success  btnYes" onclick="play()">YES </button> </p> 
               <P class="text-center remark ">Lets play</P> 
           </div>

           <div class="col-sm-6 text-center ">
               <p class="text-center"><button class="btn btn-success btnNo"> NO </button> </p>
               <P class="text-center remark ">I want to learn</P> 
           </div>

       </div>
   </div>

</body>
</html>