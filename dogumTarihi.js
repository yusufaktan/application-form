function dateOlustur1(){
    
    var yroptions="<option value='0'>GG</option>"

    for (var i=1; i<=31; i++){
        yroptions+="<option value= '"+i+"'>"+i+"</option>"
    }

    document.getElementById('dateGun').innerHTML=yroptions;
}

function dateOlustur2(){
    
    var yroptions="<option value='0'>AA</option>"
    
    for (var i=1; i<13; i++){
        yroptions+="<option value= '"+i+"'>"+i+"</option>"
    }
    
    document.getElementById('dateAy').innerHTML=yroptions;
}

function dateOlustur3(){
           
    var d= new Date();
    var currentYear=d.getFullYear();
    var yroptions="<option value='0'>YY</option>"

    for (var i=1950; i<=currentYear-8; i++){
        yroptions+="<option value= '"+i+"'>"+i+"</option>"
    }
        
    document.getElementById('dateYil').innerHTML=yroptions;
}