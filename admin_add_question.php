
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
    <link rel="stylesheet" href="customCss/admin_quetion_list.css">
    <script src="customJs/addquetion.js"></script>
</head>
<body >

      <div class="container-fluid con ">
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
           <div class="quetion_list">   Question Register  </div>

           <div class="formContainer mt-4">
               <form method="post">
                   <div class="alert alert-danger text-center " id="msgs"></div>
                   <div class="row">
                       <div class="col-sm-3 pl-5 Question_Id "><span>Question Id</span><span class="text-danger">*</span></div>
                       <div class="col-sm-8 mb-4"><input class="form-control" type="text" id="Question_Id" onclick="errorClear()"></div>
                   </div>
                   <div class="row">
                       <div class="col-sm-3 pl-5 Question_Id"><span>Question Title</span><span class="text-danger">*</span></div>
                       <div class="col-sm-8 mb-4"><input class="form-control" type="text" id="Question_Title" autocomplete="none"  onclick="errorClear()"></div>
                   </div>
                   <div class="row">
                       <div class="col-sm-3 pl-5 Question_Id "><span>Option 1</span><span class="text-danger">*</span></div>
                       <div class="col-sm-8 mb-4"><input class="form-control" type="text" id="Option_1"  autocomplete="none"  onclick="errorClear()"></div>
                   </div>
                   <div class="row">
                       <div class="col-sm-3 pl-5 Question_Id "><span>Option 2</span><span class="text-danger">*</span></div>
                       <div class="col-sm-8 mb-4"><input class="form-control" type="text" id="Option_2"  autocomplete="none"  onclick="errorClear()"required></div>
                   </div>
                   <div class="row">
                       <div class="col-sm-3 pl-5 Question_Id"><span>Option 3</span><span class="text-danger">*</span></div>
                       <div class="col-sm-8 mb-4"><input class="form-control" type="text" id="Option_3"  autocomplete="none"  onclick="errorClear()"></div>
                   </div>
                   <div class="row">
                       <div class="col-sm-3 pl-5 Question_Id "><span>Option 4</span><span class="text-danger">*</span></div>
                       <div class="col-sm-8 mb-4"><input class="form-control" type="text" id="Option_4"  onclick="errorClear()"></div>
                   </div>
                   <div class="row">
                       <div class="col-sm-3 pl-5 Question_Id "><span>Right Option</span><span class="text-danger">*</span></div>
                       <div class="col-sm-8 mb-4"><input class="form-control" type="text" id="Right_Option"  onclick="errorClear()"></div>
                   </div>
                  <div class="text-right "><button type="button" class="btn btn-primary btnAdd " onclick="add()">Add</button></div>
               </form>
           </div>





        </div>


    
</body>
</html>