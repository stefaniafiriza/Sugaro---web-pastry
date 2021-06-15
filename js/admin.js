function selectOptionAdmin(x){
    var contor;
    for(contor=1;contor<=7;contor++)
        if(contor==x)
            document.getElementById("optionAdmin"+contor).style.display="block"; 
        else
            document.getElementById("optionAdmin"+contor).style.display="none"; 
}