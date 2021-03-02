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
    <link rel="stylesheet" type="text/css" href="customCss/question.css">
    <script src="ajax.js"></script>
</head>
<body onload="espc()">
   <div class="container container1">
       <div class="title_container">
              Current Affairs
       </div>
       <div class="row">
           <div class="col-sm-8 ">
               <div class="question" id="question" ></div>
               <p class="hr"><hr/></p>
               <div class="option">
                   <form method="post">
                   <input type="radio"  value="A" name="option1"><span class="option_Text" id="optionA"></span><br/>
                   <input type="radio"  value="B" name="option1"><span class="option_Text" id="optionB"></span><br/>
                   <input type="radio"  value="C" name="option1"><span class="option_Text" id="optionC"></span><br/>
                   <input type="radio"  value="D" name="option1"><span class="option_Text" id="optionD"></span><br/>
                   </form>
               </div>
               <p class="hr"><hr/></p>
               <div class="row text-center rowbtn">
                   <div class="col-sm-6 text-center">
                       <button class="btn btn-primary btnPrevious " onclick="previous()" id="previous">Previous</button>
                   </div>
                   <div class="col-sm-6 text-center">
                       <button class="btn btn-warning btnNext " onclick="next()" id="next">Next</button>
                   </div>
               </div>
               <div class="note text-center">Note:if you score above 80%, 100 naira airtime will be given on to you</div>
               <div class="text-center my-2 "><button class="btn btn-danger py-2 px-5">Claim your gift</button></div>
           </div>
           <div class="col-sm-3">
               <div class="text-center side-container">
                   <p class="timer" id="timed" >30</p>
                   <div class="scoreContainer"> 
                          <div class="score">Score</div>
                          50%
                   </div>
                   <button class="btn btn-success btnSubmit" onclick="submit()" >SUBMIT</button>
               </div>
           </div>
       </div>
   </div>

    
</body>
</html>