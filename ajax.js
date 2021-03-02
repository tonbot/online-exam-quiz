let data=null;
let i=0;
let option=document.getElementsByName("option1");
let user_answer=new Array;
let store_answer=new Array;
let p=0;

//////////////////////// ajax call
function espc(){
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "data.php", true);
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       // Typical action to be performed when the document is ready:
          data=JSON.parse(xhttp.responseText);
          console.log (data);
          document.getElementById("question").innerHTML=data[i].question;
          document.getElementById("optionA").innerHTML=data[i].optA;
          document.getElementById("optionB").innerHTML=data[i].optB;
          document.getElementById("optionC").innerHTML=data[i].optC;
          document.getElementById("optionD").innerHTML=data[i].optD;
          if (i < 1 ){
            document.getElementById("previous").style.visibility = "hidden";
        }
          
    }
};

xhttp.send();

}
//////////////////////////////////////////// end of ajax call;



//////////////////////////////////////////// this function next a quetion
function next(){
 
    if (i == data.length-1){
        document.getElementById("next").style.visibility = "hidden";
        
    }

    if(  i < data.length ){

            for(a=0; a < option.length; a++){
                if ( option[a].checked ){
                     user_answer[data[i].quetion_id]=option[a].value; //user selected option stored in an array
                           if ( p < data.length) {
                               if ( user_answer[data[i].quetion_id] == data[i].correctOption ){
                             store_answer[p]=user_answer[data[i].quetion_id];
                               }
                             p++;
                         }

                }
            }
            
          
            for(b=0; b < option.length; b++){
                option[b].checked=false;
            }   
            i++;
 
            document.getElementById("question").innerHTML=data[i].question;
            document.getElementById("optionA").innerHTML=data[i].optA;
            document.getElementById("optionB").innerHTML=data[i].optB;
            document.getElementById("optionC").innerHTML=data[i].optC;
            document.getElementById("optionD").innerHTML=data[i].optD;
            if (i >= 1){
                document.getElementById("previous").style.visibility = "visible";
            }  
    }
 
 
 
}
///////////////////////////////////end of next button

//////////////////////////////////beginning of previous button
function previous(){
    if (i == 0 ){
        document.getElementById("previous").style.visibility = "hidden";
    }
    if (i < data.length){
        document.getElementById("next").style.visibility = "visible";
    }
    if( i > 0  ){
        
        
        for(b=0; b < option.length; b++){
            option[b].checked=false;
        }

        i--;
        if (user_answer[data[i].quetion_id]){
            
        }

        document.getElementById("question").innerHTML=data[i].question;
        document.getElementById("optionA").innerHTML=data[i].optA;
        document.getElementById("optionB").innerHTML=data[i].optB;
        document.getElementById("optionC").innerHTML=data[i].optC;
        document.getElementById("optionD").innerHTML=data[i].optD;

          
    }

   
    

    
}
////////////////////////////////end of previous button


//////////////////////////////begining of submit button
function submit(){
    let total_attempt_question=store_answer.length;
    let total_question=data.length;
    let mark_perQuetion=10;
    let user_score=total_attempt_question * mark_perQuetion;
    alert (user_score);



}
////////////////////////////////////////ends of submit button


///////////////////////// timer
 function times(){
    let time= document.getElementById("timed").innerHTML;
    timee= time-1;
    document.getElementById("timed").innerHTML=timee;
    if (timee==0){
        clearInterval(stopeed);
    }
 }

 let stopeed=setInterval(times, 1000);
 ////////////////////////// ends timer
