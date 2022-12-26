<?php require_once "header.php"; ?>
 
 <!-- Slider Start -->

    <section id="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="block wow fadeInUp" data-wow-delay=".3s">
                        <!-- Slider -->
                        <section class="cd-intro">
                            <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s">
                                <span><?php echo $lang['slider_title1']?></span><br>
                                <span class="cd-words-wrapper"> <b class="is-visible"><?php echo $lang['slider_title2']?></b> </span>
                                <span><?php echo $lang['slider_title3']?></span><br>
                            </h1>
                        </section> <!-- cd-intro -->
                        <!-- /.slider -->
                        <h2 class="wow fadeInUp animated" data-wow-delay=".6s">
                        <?php echo $lang['slider_about']?>
                        </h2>
                        <a class="animasyon btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default" data-wow-delay=".9s" href="contact.php"><?php echo $lang['slider_button']?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <!-- Slider Finish -->

    <?php require_once "about_text.php"; ?>


    <div class="section-heading">
            <h1 class="title wow fadeInDown" data-wow-delay=".3s"> <?php echo $lang['gallery'] ?></h1>
            <p class="wow fadeInDown" data-wow-delay=".5s">
            </p>
            </div>
           
    <?php require_once "gallery_text_index.php"; ?>
    
<!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
            
            <?php require_once "sponsor.php"; ?>
<?php require_once "footer.php"; ?>