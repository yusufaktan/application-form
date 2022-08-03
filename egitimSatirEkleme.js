function yeniSatir(){
    var tabloGovde=document.getElementById('egitim').getElementsByTagName('tbody')[0];

    var table = document.getElementById('egitim');

    var satirSayisi = table.rows.length-2;
    var num=satirSayisi+1;
    var yeniSatir=tabloGovde.insertRow(num);

    var yeniHucre=yeniSatir.insertCell();
    var eleman = document.createElement("INPUT");
        eleman.setAttribute("type", "text");
        eleman.setAttribute("placeholder", "Öğrenim derecesi..");
        eleman.setAttribute("id", "okul"+num);
        yeniHucre.appendChild(eleman);

    var yeniHucre=yeniSatir.insertCell();
    var eleman = document.createElement("INPUT");
        eleman.setAttribute("type", "text");
        eleman.setAttribute("placeholder", "Okul adi..");
        eleman.setAttribute("id", "okul"+num);
        yeniHucre.appendChild(eleman);


    var yeniHucre =  yeniSatir.insertCell();
    var eleman = document.createElement("INPUT");
        eleman.setAttribute("type", "text");
        eleman.setAttribute("placeholder", "Bölüm adı..");
        eleman.setAttribute("id", "bolum"+num);
        yeniHucre.appendChild(eleman);

    var yeniHucre =  yeniSatir.insertCell();
    var eleman = document.createElement("INPUT");
        eleman.setAttribute("type", "date");
        yeniHucre.appendChild(eleman);

    var yeniHucre =  yeniSatir.insertCell();
    var eleman = document.createElement("INPUT");
        eleman.setAttribute("type", "date");
        yeniHucre.appendChild(eleman);

    var yeniHucre =  yeniSatir.insertCell();
    var eleman = document.createElement("INPUT");
        eleman.setAttribute("type", "text");
        eleman.setAttribute("placeholder", "Derece..");
        eleman.setAttribute("id", "bolum"+num);
        yeniHucre.appendChild(eleman);
}