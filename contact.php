<?php require_once "header.php"; ?>
<!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2><?php echo $lang['contact'] ?></h2>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- 
================================================== 
    Contact Section Start
================================================== -->
<section id="contact-section">
    <div class="container">
    <div class="row address-details">
        
        <div class="col-md-4">
            <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                <i class="ion-ios-location-outline"></i>
                <h5><?php echo $ayarcek['adres'] ?></h5>
            </div>
        </div>
        <div class="col-md-4">
            <div class="email wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                <i class="ion-ios-email-outline"></i>
                <p><a href="mailto:<?php echo $ayarcek['email'] ?>"><?php echo $ayarcek['email'] ?></a></p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                <i class="ion-ios-telephone-outline"></i>
                <p><a href="tel:<?php echo $ayarcek['telefon'] ?>"><?php echo $ayarcek['telefon'] ?></a></p>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-md-6">
                <div class="block">
                    <h2 class="paragraf__ortalama subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s"><?php echo $lang['f_title'] ?></h2>
                    <!-- <p class="paragraf__ortalama subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, ea!
                        consectetur adipisicing elit. Dolore, ea!
                    </p> -->
                    <br><br>
                    <div class="form" data-wow-duration="500ms" data-wow-delay=".3s">
                        <form id="contact" action="panel/netting/processing.php" method="post" data-wow-duration="500ms" data-wow-delay=".3s">
                            <div class="form-row">
                                <div class="form-group" data-wow-duration="500ms" data-wow-delay=".3s">
                                    <input type="text" name="baslik" class="form-control" id="name" placeholder="<?php echo $lang['nsn'] ?>" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group " data-wow-duration="500ms" data-wow-delay=".3s">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="<?php echo $lang['mail'] ?>" data-rule="email" data-msg="Please enter a valid email" required>
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="form-group">


                                </select>
                                <input class="bg-white-75 form-control" name="konu" id="subject" placeholder="<?php echo $lang['msga'] ?>" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" /required>

                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="mesaj" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="<?php echo $lang['msg'] ?>" required></textarea>
                                <div class="validation"></div>
                            </div>
                            <div class="text-center"><button name="mesajkaydet" data-wow-duration="500ms" data-wow-delay=".5s" class="mavi__buton btn" type="submit"><?php echo $lang['sendm'] ?></button></div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="map-area">
                    <h2 class="subtitle paragraf__ortalama wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s"><?php echo $lang['gps'] ?></h2>
                    <!-- <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                        Si aute quis eu proident o cupidatat ne anim nescius, et est praesentibus, o quorum vidisse expetendis, nostrud eram quibusdam ad nam nostrud ubi.

                    </p> -->
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2345.840220829695!2d30.5217946902815!3d37.766328728750906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x36c642b406d1bec1!2zScWeSUtLRU5UIEFOQURPTFUgxLBNQU0gSEFUxLBQIEzEsFNFU8Sw!5e0!3m2!1str!2str!4v1626257279527!5m2!1str!2str" width="100%" height="370" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>




<!--
            ==================================================
            Call To Action Section Start
            ================================================== -->


<?php require_once "footer.php"; ?>