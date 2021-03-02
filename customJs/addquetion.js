
function add(){
    
     let quetion_id=document.getElementById("Question_Id").value;
     let Question_Title=document.getElementById("Question_Title").value;
     let Option_1=document.getElementById("Option_1").value;
     let Option_2=document.getElementById("Option_2").value;
     let Option_3=document.getElementById("Option_3").value;
     let Option_4=document.getElementById("Option_4").value;
     let Right_Option=document.getElementById("Right_Option").value;
 ////////////////////////// validating data  
     let check=validate(quetion_id, Question_Title, Option_1, Option_2, Option_3, Option_4, Right_Option );
     if (check ){
        document.getElementById("msgs").innerHTML="PLS ENSURE TO FILL OUT ALL THE EMPTY SPACE";
        document.getElementById("msgs").style.fontWeight="bold";
     }
     else {
         quetion_id=document.getElementById("Question_Id").value;
         Question_Title=document.getElementById("Question_Title").value;
         Option_1=document.getElementById("Option_1").value;
         Option_2=document.getElementById("Option_2").value;
         Option_3=document.getElementById("Option_3").value;
         Option_4=document.getElementById("Option_4").value;
         Right_Option=document.getElementById("Right_Option").value;
          
     
 //////////////////////////////////////////////////////// validation stops here

 /////////////////////////////////////////// creating form object
       let fd=new FormData()
        fd.append("quetion_id", quetion_id);
        fd.append("Question_Title", Question_Title);
        fd.append("Option_1", Option_1);
        fd.append("Option_2", Option_2);
        fd.append("Option_3", Option_3);
        fd.append("Option_4", Option_4);
        fd.append("Right_Option", Right_Option);
   ///////////////////////////////////////////////////////// end form data     

    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "adminData.php", true);
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
              data=xhttp.responseText;
              //console.log(data);
              if (data=="NEW QUESTION ADDED SUCCESSFULLY"){
                document.getElementById("msgs").style.backgroundColor="green";
                document.getElementById("msgs").style.color="white";
                document.getElementById("msgs").innerHTML=data;
                document.getElementById("msgs").style.fontWeight="bold";

              } 
              if (data=="QUESTION ID IS ALREADY REGISTERED"){
                document.getElementById("msgs").innerHTML=data;
                document.getElementById("msgs").style.fontWeight="bold";

              } 
            
    }
};

xhttp.send(fd);
     }
}


function validate(data1,data2, data3, data4, data5, data6, data7 ){
    if (( data1 =="" ) ||  ( data2=="" ) || ( data3 =="") || ( data4 =="") || 
    ( data5 =="" ) || ( data6 =="") || ( data7 ==""))
    {
        return "all field must be filled";
    }

}


function errorClear(){
    
        if( document.getElementById("msgs").innerHTML !=""){
            document.getElementById("msgs").innerHTML="";
            document.getElementById("msgs").style.backgroundColor=""
            document.getElementById("msgs").style.color="";
            
        }
}