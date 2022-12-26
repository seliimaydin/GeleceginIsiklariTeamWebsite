<?php require 'connection.php';

session_start();


if (isset($_POST['gonder'])) {

    $uploads_dir = '../images/urun';
    @$tmp_name = $_FILES['fav']["tmp_name"];
    @$name = $_FILES['fav']["name"];

    $sayi1 = rand(20000, 30000);
    $sayi2 = rand(20000, 30000);
    $sayi3 = rand(20000, 30000);
    $sayilar = $sayi1 . $sayi2 . $sayi3;
    $resimyolu = $sayilar . $name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");


    $kaydet = $baglanti->prepare("UPDATE ayar SET
    
        fav=:fav,
        baslik=:baslik,
        aciklama=:aciklama,
        keyword=:keyword

    WHERE ayarid=2");

    $update = $kaydet->execute(array(

        'fav' => $resimyolu,
        'baslik' => $_POST['baslik'],
        'aciklama' => $_POST['aciklama'],
        'keyword' => $_POST['keyword']
    ));

    if ($update) {
        Header("Location:../settings.php?status=successful");
    } else {
        Header("Location:../settings.php?status=unsuccessful");
    }
}


if (isset($_POST['sponsorkaydet'])) {


    $uploads_dir = '../images/gallery';
    @$tmp_name = $_FILES['resim']["tmp_name"];
    @$name = $_FILES['resim']["name"];

    $sayi1 = rand(20000, 30000);
    $sayi2 = rand(20000, 30000);
    $sayi3 = rand(20000, 30000);
    $sayilar = $sayi1 . $sayi2 . $sayi3;
    $resimyolu = $sayilar . $name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

    $kaydet = $baglanti->prepare("INSERT INTO sponsor SET
            aciklama=:aciklama,

            sira=:sira,
            resim=:resim");

    $insert = $kaydet->execute(array(

        'aciklama' => $_POST['aciklama'],


        'sira' => $_POST['sira'],

        'resim' => $resimyolu
    ));



    if ($insert) {
        Header("Location:../gallery.php?status=successful");
    } else {
        Header("Location:../gallery.php?status=unsuccessful");
    }
}

if (isset($_POST['sponsorduzenle'])) {

    if ($_FILES['resim']["size"] > 0) {


        $uploads_dir = '../images/gallery';
        @$tmp_name = $_FILES['resim']["tmp_name"];
        @$name = $_FILES['resim']["name"];

        $sayi1 = rand(20000, 30000);
        $sayi2 = rand(20000, 30000);
        $sayi3 = rand(20000, 30000);
        $sayilar = $sayi1 . $sayi2 . $sayi3;
        $resimyolu = $sayilar . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

        $kaydet = $baglanti->prepare("UPDATE sponsor SET
                      aciklama=:aciklama,
                      baslik=:baslik,
                      sira=:sira,
                      resim=:resim
            WHERE id={$_POST['id']}
            ");

        $insert = $kaydet->execute(array(

            'baslik' => $_POST['baslik'],
            'aciklama' => $_POST['aciklama'],
            'sira' => $_POST['sira'],
            'resim' => $resimyolu
        ));




        if ($insert) {
            Header("Location:../gallery.php?status=successful");
        } else {
            Header("Location:../gallery.php?status=unsuccessful");
        }
    } else {


        $duzenle = $baglanti->prepare("UPDATE  sponsor SET
                      aciklama=:aciklama,

                      sira=:sira
        WHERE id={$_POST['id']}
        ");

        $insert = $duzenle->execute(array(

            'aciklama' => $_POST['aciklama'],



            'sira' => $_POST['sira']
        ));


        if ($insert) {
            Header("Location:../gallery.php?status=successful");
        } else {
            Header("Location:../gallery.php?status=unsuccessful");
        }
    }
}

if (isset($_POST['sponsorsil'])) {


    $sil = $_POST['resim'];
    unlink("../images/gallery/$sil");

    $sil = $baglanti->prepare("DELETE from sponsor where id=:id ");

    $sil->execute(array(
        'id' => $_POST['id']
    ));

    if ($sil) {
        Header("Location:../gallery.php?status=successful");
    } else {
        Header("Location:../gallery.php?status=unsuccessful");
    }
}

if (isset($_POST['contact'])) {



    $kaydet = $baglanti->prepare("UPDATE ayar SET
 email=:email,
adres=:adres,
 telefon=:telefon
    WHERE ayarid=2");

    $update = $kaydet->execute(array(


        'email' => $_POST['email'],
        'adres' => $_POST['adres'],
        'telefon' => $_POST['telefon']
    ));

    if ($update) {
        Header("Location:../contact.php?status=successful");
    } else {
        Header("Location:../contact.php?status=unsuccessful");
    }
}

if (isset($_POST['sosyalkaydet'])) {



    $kaydet = $baglanti->prepare("UPDATE ayar SET
 facebook=:facebook,
 instagram=:instagram,
 twitter=:twitter,
 youtube=:youtube
    WHERE ayarid=2");

    $update = $kaydet->execute(array(


        'facebook' => $_POST['facebook'],
        'instagram' => $_POST['instagram'],
        'twitter' => $_POST['twitter'],
        'youtube' => $_POST['youtube']
    ));

    if ($update) {
        Header("Location:../social.php?status=successful");
    } else {
        Header("Location:../social.php?status=unsuccessful");
    }
}



if (isset($_POST['urunkaydet'])) {


    $uploads_dir = '../images/gallery';
    @$tmp_name = $_FILES['resim']["tmp_name"];
    @$name = $_FILES['resim']["name"];

    $sayi1 = rand(20000, 30000);
    $sayi2 = rand(20000, 30000);
    $sayi3 = rand(20000, 30000);
    $sayilar = $sayi1 . $sayi2 . $sayi3;
    $resimyolu = $sayilar . $name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

    $kaydet = $baglanti->prepare("INSERT INTO emlak SET
    baslik=:baslik,
    title=:title,
            aciklama=:aciklama,
            about=:about,
            sira=:sira,
            link=:link,
            resim=:resim");

    $insert = $kaydet->execute(array(

        'baslik' => $_POST['baslik'],
        'title' => $_POST['title'],
        'aciklama' => $_POST['aciklama'],
        'about' => $_POST['about'],

        'sira' => $_POST['sira'],
        'link' => $_POST['link'],

        'resim' => $resimyolu
    ));



    if ($insert) {
        Header("Location:../projects.php?status=successful");
    } else {
        Header("Location:../projects.php?status=unsuccessful");
    }
}

if (isset($_POST['urunduzenle'])) {

    if ($_FILES['resim']["size"] > 0) {


        $uploads_dir = '../images/gallery';
        @$tmp_name = $_FILES['resim']["tmp_name"];
        @$name = $_FILES['resim']["name"];

        $sayi1 = rand(20000, 30000);
        $sayi2 = rand(20000, 30000);
        $sayi3 = rand(20000, 30000);
        $sayilar = $sayi1 . $sayi2 . $sayi3;
        $resimyolu = $sayilar . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

        $kaydet = $baglanti->prepare("UPDATE emlak SET
              baslik=:baslik,
              title=:title,
                      aciklama=:aciklama,
                      about=:about,
                      sira=:sira,
                      link=:link,
            resim=:resim
            WHERE id={$_POST['id']}
            ");

        $insert = $kaydet->execute(array(

            'baslik' => $_POST['baslik'],
            'title' => $_POST['title'],
            'aciklama' => $_POST['aciklama'],
            'about' => $_POST['about'],

            'sira' => $_POST['sira'],
            'link' => $_POST['link'],

            'resim' => $resimyolu
        ));



        if ($insert) {
            Header("Location:../projects.php?status=successful");
        } else {
            Header("Location:../projects.php?status=unsuccessful");
        }
    } else {


        $duzenle = $baglanti->prepare("UPDATE  emlak SET
              baslik=:baslik,
              title=:title,
                      aciklama=:aciklama,
                      about=:about,
                      link=:link,
                      sira=:sira
        WHERE id={$_POST['id']}
        ");

        $insert = $duzenle->execute(array(

            'baslik' => $_POST['baslik'],
            'title' => $_POST['title'],
            'aciklama' => $_POST['aciklama'],
            'about' => $_POST['about'],
            'link' => $_POST['link'],


            'sira' => $_POST['sira']
        ));



        if ($insert) {
            Header("Location:../projects.php?status=successful");
        } else {
            Header("Location:../projects.php?status=unsuccessful");
        }
    }
}
if (isset($_POST['urunsil'])) {


    $sil = $_POST['resim'];
    unlink("../images/gallery/$sil");

    $sil = $baglanti->prepare("DELETE from emlak where id=:id ");

    $sil->execute(array(
        'id' => $_POST['id']
    ));
    if ($sil) {
        Header("Location:../projects.php?status=successful");
    } else {
        Header("Location:../projects.php?status=unsuccessful");
    }
}
if (isset($_POST['urunenkaydet'])) {


    $uploads_dir = '../images/gallery';
    @$tmp_name = $_FILES['resim']["tmp_name"];
    @$name = $_FILES['resim']["name"];

    $sayi1 = rand(20000, 30000);
    $sayi2 = rand(20000, 30000);
    $sayi3 = rand(20000, 30000);
    $sayilar = $sayi1 . $sayi2 . $sayi3;
    $resimyolu = $sayilar . $name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

    $kaydet = $baglanti->prepare("INSERT INTO emlaken SET
    baslik=:baslik,
            aciklama=:aciklama,
            sira=:sira,
            link=:link,
            resim=:resim");

    $insert = $kaydet->execute(array(

        'baslik' => $_POST['baslik'],
        'aciklama' => $_POST['aciklama'],

        'sira' => $_POST['sira'],
        'link' => $_POST['link'],

        'resim' => $resimyolu
    ));



    if ($insert) {
        Header("Location:../projectsen.php?status=successful");
    } else {
        Header("Location:../projectsen.php?status=unsuccessful");
    }
}

if (isset($_POST['urunenduzenle'])) {

    if ($_FILES['resim']["size"] > 0) {


        $uploads_dir = '../images/gallery';
        @$tmp_name = $_FILES['resim']["tmp_name"];
        @$name = $_FILES['resim']["name"];

        $sayi1 = rand(20000, 30000);
        $sayi2 = rand(20000, 30000);
        $sayi3 = rand(20000, 30000);
        $sayilar = $sayi1 . $sayi2 . $sayi3;
        $resimyolu = $sayilar . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

        $kaydet = $baglanti->prepare("UPDATE emlaken SET
              baslik=:baslik,
                      aciklama=:aciklama,
                      sira=:sira,
                      link=:link,
            resim=:resim
            WHERE id={$_POST['id']}
            ");

        $insert = $kaydet->execute(array(

            'baslik' => $_POST['baslik'],
            'aciklama' => $_POST['aciklama'],

            'sira' => $_POST['sira'],
            'link' => $_POST['link'],

            'resim' => $resimyolu
        ));



        if ($insert) {
            Header("Location:../projectsen.php?status=successful");
        } else {
            Header("Location:../projectsen.php?status=unsuccessful");
        }
    } else {


        $duzenle = $baglanti->prepare("UPDATE  emlaken SET
              baslik=:baslik,
                      aciklama=:aciklama,
                      link=:link,
                      sira=:sira
        WHERE id={$_POST['id']}
        ");

        $insert = $duzenle->execute(array(

            'baslik' => $_POST['baslik'],
            'aciklama' => $_POST['aciklama'],
            'link' => $_POST['link'],


            'sira' => $_POST['sira']
        ));



        if ($insert) {
            Header("Location:../projectsen.php?status=successful");
        } else {
            Header("Location:../projectsen.php?status=unsuccessful");
        }
    }
}
if (isset($_POST['urunensil'])) {


    $sil = $_POST['resim'];
    unlink("../images/gallery/$sil");

    $sil = $baglanti->prepare("DELETE from emlaken where id=:id ");

    $sil->execute(array(
        'id' => $_POST['id']
    ));
    if ($sil) {
        Header("Location:../projectsen.php?status=successful");
    } else {
        Header("Location:../projectsen.php?status=unsuccessful");
    }
}


if (isset($_POST['sliderkaydet'])) {


    $uploads_dir = '../images/slider';
    @$tmp_name = $_FILES['resim']["tmp_name"];
    @$name = $_FILES['resim']["name"];

    $sayi1 = rand(20000, 30000);
    $sayi2 = rand(20000, 30000);
    $sayi3 = rand(20000, 30000);
    $sayilar = $sayi1 . $sayi2 . $sayi3;
    $resimyolu = $sayilar . $name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

    $kaydet = $baglanti->prepare("INSERT INTO slider SET
    baslik=:baslik,
    aciklama=:aciklama,
    link=:link,
    button=:button,
    sira=:sira,
    resim=:resim");

    $insert = $kaydet->execute(array(

        'baslik' => $_POST['baslik'],
        'aciklama' => $_POST['aciklama'],
        'link' => $_POST['link'],
        'button' => $_POST['button'],
        'sira' => $_POST['sira'],
        'resim' => $resimyolu
    ));



    if ($insert) {
        Header("Location:../slider.php?status=successful");
    } else {
        Header("Location:../slider.php?status=unsuccessful");
    }
}

if (isset($_POST['sliderduzenle'])) {

    if ($_FILES['resim']["size"] > 0) {


        $uploads_dir = '../images/slider';
        @$tmp_name = $_FILES['resim']["tmp_name"];
        @$name = $_FILES['resim']["name"];

        $sayi1 = rand(20000, 30000);
        $sayi2 = rand(20000, 30000);
        $sayi3 = rand(20000, 30000);
        $sayilar = $sayi1 . $sayi2 . $sayi3;
        $resimyolu = $sayilar . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

        $kaydet = $baglanti->prepare("UPDATE slider SET
        baslik=:baslik,
        aciklama=:aciklama,
        link=:link,
        button=:button,
        sira=:sira,
        resim=:resim
        WHERE id={$_POST['id']}
        ");

        $insert = $kaydet->execute(array(

            'baslik' => $_POST['baslik'],
            'aciklama' => $_POST['aciklama'],
            'link' => $_POST['link'],
            'button' => $_POST['button'],
            'sira' => $_POST['sira'],
            'resim' => $resimyolu
        ));



        if ($insert) {
            Header("Location:../slider.php?status=successful");
        } else {
            Header("Location:../slider.php?status=unsuccessful");
        }
    } else {


        $duzenle = $baglanti->prepare("UPDATE  slider SET
        baslik=:baslik,
        aciklama=:aciklama,
        link=:link,
        button=:button,
        sira=:sira
    WHERE id={$_POST['id']}
    ");

        $insert = $duzenle->execute(array(

            'baslik' => $_POST['baslik'],
            'aciklama' => $_POST['aciklama'],
            'link' => $_POST['link'],
            'button' => $_POST['button'],
            'sira' => $_POST['sira']
        ));



        if ($insert) {
            Header("Location:../slider.php?status=successful");
        } else {
            Header("Location:../slider.php?status=unsuccessful");
        }
    }
}
if (isset($_POST['slidersil'])) {


    $sil = $_POST['resim'];
    unlink("../images/slider/$sil");

    $sil = $baglanti->prepare("DELETE from slider where id=:id ");

    $sil->execute(array(
        'id' => $_POST['id']
    ));
    if ($sil) {
        Header("Location:../slider.php?status=successful");
    } else {
        Header("Location:../slider.php?status=unsuccessful");
    }
}
if (isset($_POST['blogkaydet'])) {


    $uploads_dir = '../images/blog';
    @$tmp_name = $_FILES['resim']["tmp_name"];
    @$name = $_FILES['resim']["name"];

    $sayi1 = rand(20000, 30000);
    $sayi2 = rand(20000, 30000);
    $sayi3 = rand(20000, 30000);
    $sayilar = $sayi1 . $sayi2 . $sayi3;
    $resimyolu = $sayilar . $name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

    $kaydet = $baglanti->prepare("INSERT INTO blog SET
    baslik=:baslik,
    aciklama=:aciklama,
    kisi=:kisi,
    konu=:konu,
    yazi=:yazi,
    title=:title,
    about=:about,
    subjects=:subjects,
    short=:short,
    sira=:sira,
    resim=:resim");

    $insert = $kaydet->execute(array(

        'baslik' => $_POST['baslik'],
        'aciklama' => $_POST['aciklama'],
        'kisi' => $_POST['kisi'],
        'konu' => $_POST['konu'],
        'yazi' => $_POST['yazi'],
        'title' => $_POST['title'],
        'about' => $_POST['about'],
        'subjects' => $_POST['subjects'],
        'short' => $_POST['short'],
        'sira' => $_POST['sira'],
        'resim' => $resimyolu
    ));



    if ($insert) {
        Header("Location:../blog.php?status=successful");
    } else {
        Header("Location:../blog.php?status=unsuccessful");
    }
}

if (isset($_POST['blogduzenle'])) {

    if ($_FILES['resim']["size"] > 0) {


        $uploads_dir = '../images/blog';
        @$tmp_name = $_FILES['resim']["tmp_name"];
        @$name = $_FILES['resim']["name"];

        $sayi1 = rand(20000, 30000);
        $sayi2 = rand(20000, 30000);
        $sayi3 = rand(20000, 30000);
        $sayilar = $sayi1 . $sayi2 . $sayi3;
        $resimyolu = $sayilar . $name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

        $kaydet = $baglanti->prepare("UPDATE blog SET
    baslik=:baslik,
    aciklama=:aciklama,
    kisi=:kisi,
    konu=:konu,
    yazi=:yazi,
    title=:title,
    about=:about,
    subjects=:subjects,
    short=:short,
    sira=:sira,
    resim=:resim
    WHERE id={$_POST['id']}
    ");

        $insert = $kaydet->execute(array(

            'baslik' => $_POST['baslik'],
            'aciklama' => $_POST['aciklama'],
            'kisi' => $_POST['kisi'],
            'konu' => $_POST['konu'],
            'yazi' => $_POST['yazi'],
            'title' => $_POST['title'],
            'about' => $_POST['about'],
            'subjects' => $_POST['subjects'],
            'short' => $_POST['short'],
            'sira' => $_POST['sira'],
            'resim' => $resimyolu
        ));



        if ($insert) {
            Header("Location:../blog.php?status=successful");
        } else {
            Header("Location:../blog.php?status=unsuccessful");
        }
    } else {


        $duzenle = $baglanti->prepare("UPDATE blog SET
    baslik=:baslik,
    aciklama=:aciklama,
    kisi=:kisi,
    konu=:konu,
    yazi=:yazi,
    title=:title,
    about=:about,
    subjects=:subjects,
    short=:short,
    sira=:sira
    WHERE id={$_POST['id']}
    ");

        $insert = $duzenle->execute(array(
            'baslik' => $_POST['baslik'],
            'aciklama' => $_POST['aciklama'],
            'kisi' => $_POST['kisi'],
            'konu' => $_POST['konu'],
            'yazi' => $_POST['yazi'],
            'title' => $_POST['title'],
            'about' => $_POST['about'],
            'subjects' => $_POST['subjects'],
            'short' => $_POST['short'],
            'sira' => $_POST['sira']
        ));



        if ($insert) {
            Header("Location:../blog.php?status=successful");
        } else {
            Header("Location:../blog.php?status=unsuccessful");
        }
    }
}
if (isset($_POST['blogsil'])) {


    $sil = $_POST['resim'];
    unlink("../images/blog/$sil");

    $sil = $baglanti->prepare("DELETE from blog where id=:id ");

    $sil->execute(array(
        'id' => $_POST['id']
    ));
    if ($sil) {
        Header("Location:../blog.php?status=successful");
    } else {
        Header("Location:../blog.php?status=unsuccessful");
    }
}

if (isset($_POST['kullanicigiris'])) {
    $ad = htmlspecialchars($_POST['ad']);
    $sifre = htmlspecialchars($_POST['sifre']);

    // $update=$kaydet->execute(array(

    if ($ad && $sifre) {
        $kullanicisor = $baglanti->prepare("SELECT * from kullanici   where kad=:ad and sifre=:sifre");
        $kullanicisor->execute(array(
            'ad' => $ad,
            'sifre' => $sifre
        ));
        $say = $kullanicisor->rowCount();


        if ($say > 0) {
            $_SESSION['ad'] = $ad;
            header('Location:../index.php');
        } else {


            header('Location:../../index.php?status=unsuccessful');
        }
    }
}








if (isset($_POST['kullanicikaydet'])) {




    $kaydet = $baglanti->prepare("INSERT INTO kullanici SET
        adsoyad=:adsoyad,
        kad=:kad,
        sifre=:sifre");

    $insert = $kaydet->execute(array(

        'adsoyad' => $_POST['adsoyad'],
        'kad' => $_POST['kad'],

        'sifre' => $_POST['sifre']
    ));



    if ($insert) {
        Header("Location:../accounts.php?status=successful");
    } else {
        Header("Location:../accounts.php?status=unsuccessful");
    }
}

if (isset($_POST['kullanicisil'])) {




    $sil = $baglanti->prepare("DELETE from kullanici where id=:id ");

    $sil->execute(array(
        'id' => $_POST['id']
    ));
    if ($sil) {
        Header("Location:../accounts.php?status=successful");
    } else {
        Header("Location:../accounts.php?status=unsuccessful");
    }
}
if (isset($_POST['mesajkaydet'])) {
    $kaydet = $baglanti->prepare("INSERT INTO iletisim SET
  baslik=:baslik,
          email=:email,
          konu=:konu,
          mesaj=:mesaj");

    $insert = $kaydet->execute(array(

        'baslik' => $_POST['baslik'],
        'email' => $_POST['email'],
        'konu' => $_POST['konu'],
        'mesaj' => $_POST['mesaj']
    ));



    if ($insert) {
        Header("Location:../../contact.php?durum=Baþarýlý");
    } else {
        Header("Location:../../contact.php?durum=Baþarýsýz");
    }
}
if (isset($_POST['iletisimsil'])) {




    $sil = $baglanti->prepare("DELETE from iletisim where id=:id ");

    $sil->execute(array(
        'id' => $_POST['id']
    ));
    if ($sil) {
        Header("Location:../messages.php?status=successful");
    } else {
        Header("Location:../messages.php?status=unsuccessful");
    }
}

if (isset($_POST['cokluresimsil'])) {
    $gelenid = $_POST['urun_id'];
    $sil = $_POST['resim'];
    unlink("../images/cokluresim/$sil");

    $sil = $baglanti->prepare("DELETE from cokluresim where id=:id ");

    $sil->execute(array(
        'id' => $_POST['id']
    ));
    if ($sil) {
        Header("Location:../cokluresim.php?id=$gelenid?durum=Baþarýlý");
    } else {
        Header("Location:../cokluresim.php?id=$gelenid?durum=Baþarýsýz");
    }
}
