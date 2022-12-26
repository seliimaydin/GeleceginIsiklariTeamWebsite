<section id="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="subtitle text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".3s"><?php echo $lang['c_title'] ?></h2>
                <br>
                <div id="clients-logo" class="owl-carousel">
                    <?php $sponsor = $baglanti->prepare("SELECT * from sponsor order by sira ASC  ");


                    $sponsor->execute();


                    while ($sponsorcek = $sponsor->fetch(PDO::FETCH_ASSOC)) {





                    ?>
                        <div>
                            <a target="_blank" href="<?php echo $sponsorcek['aciklama']?>">
                                <img src="panel/images/gallery/<?php echo $sponsorcek['resim']?>" class="rounded-pill">
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>