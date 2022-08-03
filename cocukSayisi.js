function cocukSayisiOlustur(){
    
    var yroptions="<option value='0'>Seçiniz</option>"

    for (var i=1; i<31; i++){
        yroptions+="<option value= '"+i+"'>"+i+"</option>"
    }

    document.getElementById('ccexpy').innerHTML=yroptions;
    }