<?php require '../panel/netting/connection.php';

$ayar=$baglanti->prepare("SELECT * from ayar  where ayarid=?");

$ayar->execute(array(2));

$ayarcek=$ayar->fetch(PDO::FETCH_ASSOC);
?>
<?php
 include"../config.php";
?>
<!DOCTYPE html>
<html class="no-js">

<head>
    <!-- Basic Page Needs
        ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../panel/images/urun/<?php echo $ayarcek['fav'] ?>" rel="icon">
    <link href="../panel/images/urun/<?php echo $ayarcek['fav'] ?>" rel="apple-touch-icon">
    <title><?php echo $ayarcek['baslik']?></title>
    <meta name="description" content="">
    <meta name="keywords" content="<?php echo $ayarcek['keyword']?>">
    <meta name="author" content="">
    <!-- Mobile Specific Metas
        ================================================== -->
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Template CSS Files
        ================================================== -->
    <!-- Twitter Bootstrs CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- Ionicons Fonts Css -->
    <link rel="stylesheet" href="../plugins/ionicons/ionicons.min.css">
    <link rel="stylesheet" href="../https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- animate css -->
    <link rel="stylesheet" href="../plugins/animate-css/animate.css">
    <!-- Hero area slider css-->
    <link rel="stylesheet" href="../plugins/slider/slider.css">
    <!-- owl craousel css -->
    <link rel="stylesheet" href="../plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="../plugins/owl-carousel/owl.theme.css">
    <!-- Fancybox -->
    <link rel="stylesheet" href="../plugins/facncybox/jquery.fancybox.css">
    <!-- template main css file -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Swipper -->
    <link rel="stylesheet" href="../https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="../https://unpkg.com/swiper/swiper-bundle.min.css" />

</head>

<body>


    <!--
        ==================================================
        Header Section Start
        ================================================== -->
    <header id="top-bar" class="zort navbar-fixed-top animated-header">
        <div class="container">
            <div class="navbar-header">
                <!-- responsive nav button -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- /responsive nav button -->

                <!-- logo -->
                <div class="navbar-brand">
                    <a href="../index">
                    <img width=120px height=70px src="../images/gilogo.png" alt="">
                    </a>
                </div>
                <!-- /logo -->
            </div>
            <!-- main menu -->
            <nav class="collapse navbar-collapse navbar-right" role="navigation">
                <div class="main-menu">
                <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="../index"><?php echo $lang['home']?></a>
                        </li>
                        <li><a href="../about"><?php echo $lang['about']?></a></li>
                        <!-- <li><a href="service">Hİzmetlerİmİz</a></li> -->
                        <li><a href="../gallery"><?php echo $lang['gallery']?></a></li>
                        <!-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="blog-fullwidth.html">Blog Full</a></li>
                                        <li><a href="blog-left-sidebar.html">Blog Left sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog Right sidebar</a></li>
                                    </ul>
                                </div>
                            </li> -->
                        <li><a href="../contact"><?php echo $lang['contact']?></a></li>

                        <li><a href="?lang=tr"> <img class="wpml-ls-flag" src="https://pachacips.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/tr.png" alt="Türkçe"></a></li>
                        <li><a href="?lang=en"><img class="wpml-ls-flag" src="https://pachacips.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/en.png" alt="İngilizce"></a></li>
                    </ul>
                </div>
            </nav>
            <!-- /main nav -->
        </div>
    </header>