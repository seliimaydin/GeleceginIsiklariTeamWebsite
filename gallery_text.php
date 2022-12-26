
    
    <!--=============================
=            Gallery            =
==============================-->
<section id="gallery" class="gallery">
    <div class="container">
        <div class="row">
            <?php
$emlak = $baglanti->prepare("SELECT * from emlak order by sira ASC  ");


$emlak->execute();


while ($emlakcek = $emlak->fetch(PDO::FETCH_ASSOC)) {
    
    
    
    ?>

                <div class="col-sm-4 col-xs-12">
                    <figure class="wow fadeInLeft animatedportfolio-item animated" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="img-wrapper">
                            <img src="panel/images/gallery/<?php echo $emlakcek['resim'] ?>" class="img-responsive">
                                <div class="buttons" >
                                    <a rel="gallery" class="paragraf__ortalama"  href=""></a>
                                </div>
                        </div>
                        <figcaption>
                            <h4>
                                <a href="#">
                                    
                                    <?php
                                 
                                        if (($_GET['lang'] == "en")) {
                                            echo $emlakcek['title'];
                                        }
                                        else{
                                            echo $emlakcek['baslik'];
                                        }


                                     ?>
                                </a>
                            </h4>
                            <p>
                            <?php
                                 
                                 if (($_GET['lang'] == "en")) {
                                     echo $emlakcek['about'];
                                 }
                                 else{
                                     echo $emlakcek['aciklama'];
                                 }


                              ?>
                            </p>
                        </figcaption>
                    </figure>
                </div>
            <?php } ?>
            </div>
        </div>
        </div>
    </section>




    <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
