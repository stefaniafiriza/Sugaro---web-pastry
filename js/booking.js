function selecteazaDataProgramare(an,luna,zi,maxID){
    document.getElementById("year").value=an;
    document.getElementById("month").value=luna;
    document.getElementById("day").value=zi;
    var i;
    for(i=1;i<=maxID;i++)
     {   
         if(i==zi){
             document.getElementById("selected"+zi).style.backgroundColor ="red";
             document.getElementById("selected"+zi).style.color ="white";
         }
         else{
             document.getElementById("selected"+i).style.backgroundColor ="transparent";
             document.getElementById("selected"+i).style.color ="red";
         }
     }
 }
 
 function checkform(){
 
    var an = document.getElementById("year").value;
    var luna = document.getElementById("month").value;
    var zi = document.getElementById("day").value;
    var checkedValue=0; 
 
    var inputElements = document.getElementsByClassName('selectList');
    for(var i=0; inputElements[i]; ++i){
          if(inputElements[i].selected){
               checkedValue = inputElements[i].value;
               break;
          }
    }
 
    if(zi==0 || luna==0 || an==0 ){
       alert("Select a date");
       return false;
    }else{
        return true;
    }
 }
 
 function notSelect(){
     alert("This day is busy. Please choose another day!");
 }