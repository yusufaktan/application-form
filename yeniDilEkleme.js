function yeniDil(){

        var tabloGovde=document.getElementById('dil').getElementsByTagName('tbody')[0];
        
        var table = document.getElementById('dil');
        
        var satirSayisi = table.rows.length-2;
        var num=satirSayisi+1;
        var yeniSatir=tabloGovde.insertRow(num);
        
        var yeniHucre=yeniSatir.insertCell();
        var eleman = document.createElement("INPUT");
            eleman.setAttribute("type", "text");
            eleman.setAttribute("placeholder", "Dil..");
            eleman.setAttribute("id", "dilAdi"+num);
            yeniHucre.appendChild(eleman);

        //Eklenen satırın okuma alanı
        var yeniHucre =  yeniSatir.insertCell();
        var eleman = document.createElement("select");
            eleman.id="okumaSelect"+num;
            yeniHucre.appendChild(eleman);

            var eleman = document.createElement("OPTION");
            eleman.setAttribute("value", "vol1");
            var t = document.createTextNode("Orta");
            eleman.appendChild(t);
            document.getElementById("okumaSelect"+num).appendChild(eleman);
            
            var eleman = document.createElement("OPTION");
            eleman.setAttribute("value", "vol2");
            var y = document.createTextNode("İyi");
            eleman.appendChild(y);
            document.getElementById("okumaSelect"+num).appendChild(eleman);

            var eleman = document.createElement("OPTION");
            eleman.setAttribute("value", "vol3");
            var z = document.createTextNode("Çok iyi");
            eleman.appendChild(z);
            document.getElementById("okumaSelect"+num).appendChild(eleman);


        //Eklenen satırın yazma alanı
        var yeniHucre =  yeniSatir.insertCell();
        var eleman = document.createElement("select");
            eleman.id="yazmaSelect"+num;
            yeniHucre.appendChild(eleman);

            var eleman = document.createElement("OPTION");
            eleman.setAttribute("value", "vol1");
            var t = document.createTextNode("Orta");
            eleman.appendChild(t);
            document.getElementById("yazmaSelect"+num).appendChild(eleman);
            
            var eleman = document.createElement("OPTION");
            eleman.setAttribute("value", "vol2");
            var y = document.createTextNode("İyi");
            eleman.appendChild(y);
            document.getElementById("yazmaSelect"+num).appendChild(eleman);

            var eleman = document.createElement("OPTION");
            eleman.setAttribute("value", "vol3");
            var z = document.createTextNode("Çok iyi");
            eleman.appendChild(z);
            document.getElementById("yazmaSelect"+num).appendChild(eleman);

        
        //Eklenen satırların konuşma alanı.
        var yeniHucre =  yeniSatir.insertCell();
        var eleman = document.createElement("select");
            eleman.id="konusmaSelect"+num;
            yeniHucre.appendChild(eleman);

            var eleman = document.createElement("OPTION");
            eleman.setAttribute("value", "vol1");
            var t = document.createTextNode("Orta");
            eleman.appendChild(t);
            document.getElementById("konusmaSelect"+num).appendChild(eleman);
            
            var eleman = document.createElement("OPTION");
            eleman.setAttribute("value", "vol2");
            var y = document.createTextNode("İyi");
            eleman.appendChild(y);
            document.getElementById("konusmaSelect"+num).appendChild(eleman);

            var eleman = document.createElement("OPTION");
            eleman.setAttribute("value", "vol3");
            var z = document.createTextNode("Çok iyi");
            eleman.appendChild(z);
            document.getElementById("konusmaSelect"+num).appendChild(eleman);
}