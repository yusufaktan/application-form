<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>İŞ BAŞVURU FORMU</title>
</head>


<body onload="cocukSayisiOlustur() , dateOlustur1(), dateOlustur2(), dateOlustur3()"
    style="background-color: rgb(0, 0, 0);" class="w-75 mx-auto">

    <h4 class="text-uppercase" style="text-align: center;">iş başvuru formu</h4>

    <div class="text-uppercase mt-0 rounded-top"
        style="width: 130px; height: 145px; color: black; text-align: center; float: right; border: 2px solid rgb(0, 0, 0); position: relative; bottom: 32px;">
        <a href="#" class="text-uppercase"
            style="text-decoration: none; color: rgb(0, 0, 0); position: relative; top: 50px; font-weight: 700;  "
            onclick="window.setTimeout(function(){location.href='fotografCek.html';}, 500);">fotoğraf çek</a>
    </div>

    <br> <br> <br> <br>

    <p class="text-uppercase mb-0"> <b>a. kişisel bilgiler</b></p>

    <div class="mt-2 border border-dark border-top-dark mx-5, anadiv">
        <div class="bg-light mt-2 bor border-primary rounded-top">
            <form method="POST" action="veritabani.php" style="display: inline-block;">

                <table border="1" align="center" cellpadding="" style="width: 100%;" class="table table-bordered">
                    <tr>
                        <td class="baslikSoru">*Adınız</td>
                        <td><input type="text" name="ad" required></td>
                        <td class="baslikSoru">*Doğum Tarihi</td>
                        <td>
                            <select id="dateGun"></select>
                            <select id="dateAy"></select>
                            <select id="dateYil"></select>
                        </td>

                    </tr>

                    <tr>
                        <td class="baslikSoru">*Soyadınız</td>
                        <td><input type="text" name="soyad" required></td>
                        <td class="baslikSoru">*Doğum Yeri</td>
                        <td>
                            <select name="dogumyeri">
                                <option value="06">Ankara</option>
                                <option value="34">İstanbul</option>
                                <option value="35">İzmir</option>
                                <option value="00">Diğer</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td class="baslikSoru">Cinsiyet</td>
                        <div class="cinsiyetInputs">
                            <td id="cinsiyetler">

                                <input type="radio" name="cinsiyet" value="bay"> Bay
                                <input type="radio" name="cinsiyet" value="bayan"> Bayan
                                <input type="radio" name="cinsiyet" value="diger"> Diğer

                            </td>
                            <td class="baslikSoru">Uyruğunuz</td>
                            <td>
                                <input type="radio" name="uyruk" value="T.C"> T.C
                                <input type="radio" name="uyruk" value="Diğer">Diğer
                            </td>
                        </div>
                    </tr>


                    <tr>
                        <td class="baslikSoru">İkametgah Adresiniz</td>
                        <td>
                            <textarea cols="50" rows="3" name="adres"></textarea>
                        </td>
                        <td class="baslikSoru">Telefon Numaranız</td>
                        <td>
                            Ev No: <input type="text" name="evno"> <br>
                            Cep1 : <input type="text" name="cep1"> <br>
                            Cep2 : <input type="text" name="cep2">
                        </td>
                    </tr>


                    <tr>
                        <td class="baslikSoru">*E-posta adresiniz</td>
                        <td>
                            <input type="email" name="eposta" required>
                        </td>
                        <td class="baslikSoru">Sürücü belgeniz var mı?</td>
                        <div class="cinsiyetInputs">
                            <td id="ehliyet">

                                <input type="checkbox" name="ehliyet" value="a"> A
                                <input type="checkbox" name="ehliyet" value="b"> B
                                <input type="checkbox" name="ehliyet" value="c"> C
                                <input type="checkbox" name="ehliyet" value="d"> D
                                <input type="checkbox" name="ehliyet" value="e"> E
                                <input type="checkbox" name="ehliyet" value="f"> F
                                <input type="checkbox" name="ehliyet" value="yok"> Yok

                            </td>
                        </div>
                    </tr>


                    <tr id="askerlikTablo" style="width: 100%;">
                        <td class="baslikSoru">Askerlik</td>
                        <td>
                            <select name="askerlik" id="askerlikSelect" onchange="degerGoster()">
                                <option value="seciniz">--------</option>
                                <option value="tecilli">Tecilli</option>
                                <option value="muaf">Muaf</option>
                                <option value="Yapıldı">Yapıldı</option>
                            </select>
                            <input type="text" id="ifMuaf">
                        </td>
                        <td>
                            <input type="date" name="tarihh" id="tarihh">
                        </td>
                    </tr>



                    <tr>
                        <td class="baslikSoru">Medeni Durumunuz</td>
                        <div class="cinsiyetInputs">
                            <td>
                                <input type="radio" name="medeniDurum" value="evli"> Evli
                                <input type="radio" name="medeniDurum" value="bekar"> Bekar
                            </td>
                            <td class="baslikSoru">Eşinizin Mesleği</td>
                            <td><input type="text" name="esMeslek"></td>

                        </div>
                    </tr>

                    <tr>
                        <td class="baslikSoru">Sigara Kullanıyor musunuz?</td>
                        <td>
                            <input type="radio" name="secenekSigara" value="evet"> Evet
                            <input type="radio" name="secenekSigara" value="hayir"> Hayır

                        </td>
                        <td class="baslikSoru">Çocuk Sayısı</td>
                        <td>
                            <select id="ccexpy">

                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <input class="box" type="submit" value="GÖNDER">
                        </td>
                    </tr>

                </table>
            </form>
        </div>

        <div class="bg-light mt-2 bor border-primary rounded-top">
            <p class="text-uppercase mb-0"> <b> b. eğitim bilgileri</b></p>

            <table id="egitim" style="width: 100%;" class="table">
                <tr>
                    <!-- Sol üstün boşluğu burası elleme-->
                    <th> </th>
                    <th>Okul Adı</th>
                    <th>Bölümü</th>
                    <th>Başlangıç Tarihi</th>
                    <th>Bitiş Tarihi</th>
                    <th>Mezuniyet Derecesi</th>
                </tr>
                <td>İlköğretim</td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="date"></td>
                <td><input type="date"></td>
                <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Lise</td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="date"></td>
                    <td><input type="date"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Ön Lisans</td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="date"></td>
                    <td><input type="date"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Lisans</td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="date"></td>
                    <td><input type="date"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Yüksek Lisans</td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="date"></td>
                    <td><input type="date"></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Doktora</td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="date"></td>
                    <td><input type="date"></td>
                    <td><input type="text"></td>
                </tr>

                <tr>
                    <td><button id="buttons" onclick="yeniSatir()">Yeni Satır Ekle(+)</button></td>
                </tr>
            </table>

        </div>

        <div class="bg-light mt-2 bor border-primary rounded-top">
            <p class="text-uppercase mb-0"> <b> c. yabancı dil bilgileri</b></p>

            <table id="dil" style="width: 100%;" class="table table-bordered">
                <tr>
                    <th>Dil </th>
                    <th>Okuma</th>
                    <th>Yazma</th>
                    <th>Konuşma</th>
                </tr>
                <td>İngilizce</td>
                <td><select>
                        <option value="orta">Orta</option>
                        <option value="iyi">İyi</option>
                        <option value="çok iyi">Çok iyi</option>
                    </select></td>
                <td><select>
                        <option value="orta">Orta</option>
                        <option value="iyi">İyi</option>
                        <option value="çok iyi">Çok iyi</option>
                    </select></td>
                <td><select>
                        <option value="orta">Orta</option>
                        <option value="iyi">İyi</option>
                        <option value="çok iyi">Çok iyi</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Almanca</td>
                    <td><select>
                            <option value="orta">Orta</option>
                            <option value="iyi">İyi</option>
                            <option value="çok iyi">Çok iyi</option>
                        </select></td>
                    <td><select>
                            <option value="orta">Orta</option>
                            <option value="iyi">İyi</option>
                            <option value="çok iyi">Çok iyi</option>
                        </select></td>
                    <td><select>
                            <option value="orta">Orta</option>
                            <option value="iyi">İyi</option>
                            <option value="çok iyi">Çok iyi</option>
                        </select></td>

                </tr>
                <tr>
                    <td>Fransızca</td>
                    <td><select>
                            <option value="orta">Orta</option>
                            <option value="iyi">İyi</option>
                            <option value="çok iyi">Çok iyi</option>
                        </select></td>
                    <td><select>
                            <option value="orta">Orta</option>
                            <option value="iyi">İyi</option>
                            <option value="çok iyi">Çok iyi</option>
                        </select></td>
                    <td><select>
                            <option value="orta">Orta</option>
                            <option value="iyi">İyi</option>
                            <option value="çok iyi">Çok iyi</option>
                        </select></td>

                </tr>
                <tr>




                <tr>
                    <td><button id="buttons" onclick="yeniDil()">Yeni Dil Ekle(+)</button></td>
                </tr>
            </table>

        </div>


        <div class="bg-light mt-2 bor border-primary rounded-top">
            <p class="text-uppercase mb-0"> <b> d. bilgisayar bilgisi</b></p>

            <table id="pcProgram" style="width: 100%;" class="table table-bordered">
                <tr>
                    <th>Program</th>
                    <th>Derece</th>
                </tr>
                <td>Excel</td>
                <td><select>
                        <option value="az">Az</option>
                        <option value="orta">Orta</option>
                        <option value="iyi">İyi</option>
                        <option value="çok iyi">Çok iyi</option>
                    </select></td>
                </tr>
                <tr>


                    <td>Word</td>
                    <td><select>
                            <option value="az">Az</option>
                            <option value="orta">Orta</option>
                            <option value="iyi">İyi</option>
                            <option value="çok iyi">Çok iyi</option>
                        </select></td>

                </tr>
                <tr>
                    <td>Power Point</td>
                    <td><select>
                            <option value="az">Az</option>
                            <option value="orta">Orta</option>
                            <option value="iyi">İyi</option>
                            <option value="çok iyi">Çok iyi</option>
                        </select></td>
                </tr>
                <tr>




                <tr>
                    <td><button id="buttons" onclick="yeniProgram()">Yeni Satır Ekle(+)</button></td>
                </tr>
            </table>

        </div>

    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script src="cocukSayisi.js"></script>
    <script src="dogumTarihi.js"></script>
    <script src="egitimSatirEkleme.js"></script>
    <script src="yeniDilEkleme.js"></script>
    <script src="askerlikDegerAlma.js"></script>
    <script src="yeniProgramEkleme.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
        integrity="sha256-qM7QTJSlvtPSxVRjVWNM2OfTAz/3k5ovHOKmKXuYMO4=" crossorigin="anonymous"></script>

</body>

</html>