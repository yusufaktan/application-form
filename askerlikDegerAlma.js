function degerGoster(){
    var selectKutu=document.getElementById('askerlikSelect');
    var selectKutu_value=selectKutu.options[selectKutu.selectedIndex].value; 
    var selectKutu_text = selectKutu.options[selectKutu.selectedIndex].text;

    if(selectKutu_text=="Tecilli"){
        document.getElementById('ifMuaf').placeholder="Tecil tarihi belirtiniz."
        document.getElementById('tarihh').style.display="none";
        document.getElementById('tarihh').style.display="block";
    }

    else if(selectKutu_text=="Muaf"){
        document.getElementById('ifMuaf').placeholder="Muafiyet nedeni nedir?"
        document.getElementById('tarihh').style.display="none";
    }

    else if(selectKutu_text=="Yapıldı"){
        document.getElementById('ifMuaf').placeholder="Terhis tarihi belirtiniz."
        document.getElementById('tarihh').style.display="none";
        document.getElementById('tarihh').style.display="block";
    }

    else if(selectKutu_text=="--------"){
        document.getElementById('ifMuaf').placeholder="Lütfen birini seçiniz."
        document.getElementById('tarihh').style.display="none";
        document.getElementById('tarihh').style.display="none";
    }
        
}