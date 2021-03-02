

<?php
require_once "include.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="customCss/admin_quetion_list.css">

</head>
<body>
      <div class="container-fluid con">
       <div class="navbar navbar-expand-lg " id="navbar">
           <a class="navbar-brand">Admin Side</a>
           <button class="navbar-toggler " data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon icon"></span>
           </button>
           <div id="my-nav" class="collapse navbar-collapse">
               <ul class="navbar-nav mr-auto ">
                   <li class="nav-item">
                       <a class="nav-link" href="#">Logout</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#" >Add</a>
                   </li>
               </ul>
           </div>
        </div>
       </div>
    
       <div class="container">
           <div class="quetion_list">   Question List  </div>
           <div>
               <table class="table table-striped table-bordered mt-4">
                   <thead scope="col">
                       <tr>
                           <th class="question_title">Question Title</th>
                           <th class="th-title">Right Option</th>
                           <th class="th-title">Action</th>
                       </tr>
                   </thead>
                   <tbody>
                       <tr>
                           <td class="question_title">Nigeria is ____ Africa country</td>
                           <td class="th-title">Option 4</td>
                           <td class="th-title"><span><button class="btn btn-primary">Edit</button></span>  <span><button class="btn btn-danger">Delete</button></span></td>
                       </tr>
                       <tr>
                           <td class="question_title">Who is the President of Nigeria</td>
                           <td class="th-title">Option 2</td>
                           <td class="th-title"><span><button class="btn btn-primary">Edit</button></span>  <span><button class="btn btn-danger">Delete</button></span></td>
                       </tr>
                       <tr>
                           <td class="question_title">How many State has Nigeria</td>
                           <td class="th-title">Option 3</td>
                           <td class="th-title"><span><button class="btn btn-primary">Edit</button></span>  <span><button class="btn btn-danger">Delete</button></span></td>
                       </tr>

                   </tbody>
               </table>
           </div>
          
           <div class="row">
               <div class="col-9"><h6 class="pl-3">showing 1 to 5 of 5 entries</h6></div>
               <div class="col-3 "><span class="text-center label"><button class="btnPrevious">Previous</button></span> <span class="text-center label" ><label size="2">1</label></span>  <span class="text-center label"><button class="btnNext">Next</button></span></td></div>

           </div>
        </div>

    
</body>
</html>
  
