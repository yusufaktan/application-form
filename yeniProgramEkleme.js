function yeniProgram(){

        var tabloGovde=document.getElementById('pcProgram').getElementsByTagName('tbody')[0];
        
        var table = document.getElementById('pcProgram');
        
        var satirSayisi = table.rows.length-2;
        var num=satirSayisi+1;
        var yeniSatir=tabloGovde.insertRow(num);
        
        
        var yeniHucre=yeniSatir.insertCell();
        var eleman = document.createElement("INPUT");
            eleman.setAttribute("type", "text");
            eleman.setAttribute("placeholder", "Program Adı..");
            eleman.setAttribute("id", "progAdi"+num);
            yeniHucre.appendChild(eleman);

        //Eklenen satırın okuma alanı
        var yeniHucre =  yeniSatir.insertCell();
        var eleman = document.createElement("SELECT");
            eleman.id="dereceSelect"+num;
            yeniHucre.appendChild(eleman);

            var eleman = document.createElement("OPTION");
            eleman.setAttribute("value", "prog");
            var x = document.createTextNode("Az");
            eleman.appendChild(x);
            document.getElementById("dereceSelect"+num).appendChild(eleman);

            var eleman = document.createElement("OPTION");
            eleman.setAttribute("value", "prog1");
            var t = document.createTextNode("Orta");
            eleman.appendChild(t);
            document.getElementById("dereceSelect"+num).appendChild(eleman);
            
            var eleman = document.createElement("OPTION");
            eleman.setAttribute("value", "prog2");
            var y = document.createTextNode("İyi");
            eleman.appendChild(y);
            document.getElementById("dereceSelect"+num).appendChild(eleman);

            var eleman = document.createElement("OPTION");
            eleman.setAttribute("value", "prog3");
            var z = document.createTextNode("Çok iyi");
            eleman.appendChild(z);
            document.getElementById("dereceSelect"+num).appendChild(eleman);
}       