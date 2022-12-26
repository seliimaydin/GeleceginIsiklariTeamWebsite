<?php require_once"header.php";?>

<section class="home section" id="home">
            <div class="home__container containers grid">
                <div class="home__content grid">
                    <div class="home__social">
                        <a href="https://github.com/buiova" target="_blank" class="home__social-icon">
                            <i class="uil uil-github-alt"></i>
                        </a>
                        
                        <a href="mailto:bahri.resmi@gmail.com" target="_blank" class="home__social-icon">
                            <i class="uil uil-envelope-alt"></i>
                        </a>
                    </div>
                    <div class="home__img">
                        <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <mask id="mask0" mask-type="alpha">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                    130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                    97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                    0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                            </mask>
                            <g mask="url(#mask0)">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                    165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                    129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                    -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                                <image class="home__blob-img" x='12' y='18' xlink:href="../images/team/bahri_uranli.jpg" />
                            </g>
                        </svg>
                    </div>
                    <div class="home__data">
                        <h1 class="home__title"><?php echo $lang['h_bahri'] ?></h1>
                        <h3 class="home__subtitle">Full stack <?php echo $lang['developer'] ?></h3>
                        <p class="home__description"><?php echo $lang['pb_a'] ?></p>
                        <a href="mailto:bahri.resmi@gmail.com" class="button button--flex">
                        <?php echo $lang['cm'] ?> <i class="uil uil-message button__icon"></i>
                        </a>
                    </div>
                </div>
                <div class="home__scroll">
                    <a href="#about" class="home__scroll-button button--flex">
                        <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                        <span class="home__scroll-name"><?php echo $lang['sd'] ?></span>
                        <i class="uil uil-arrow-down home__scroll-arrow"></i>
                    </a>
                </div>
            </div>
        </section>
         <!--==================== ABOUT ====================-->
         <section class="about section" id="about">
            <h2 class="section__title"><?php echo $lang['aboutme'] ?></h2>
            <span class="section__subtitle"></span>

            <div class="about__container containers grid">
                <img src="img/arnold-francisca-f77Bh3inUpE-unsplash.jpg" alt="" class="about__img">
                <div class="about__data">

                    <p class="about__description"><?php echo $lang['aboutb'] ?></p>
                    <div class="about__info">
                        <div>
                            <span class="about__info-title">04+</span>
                            <span class="about__info-name"><?php echo $lang['experience'] ?></span>
                        </div>

                        <div>
                            <span class="about__info-title">50+</span>
                            <span class="about__info-name"><?php echo $lang['projects'] ?></span>
                        </div>

                        <div>
                            <span class="about__info-title">08</span>
                            <span class="about__info-name"><?php echo $lang['worked'] ?></span>
                        </div>
                    </div>

                  
                </div>
            </div>
        </section>
         <!--==================== SKILLS ====================-->
         <section class="skills section" id="skills">
            <h2 class="section__title"><?php echo $lang['skills'] ?></h2>
            <span class="section__subtitle"><?php echo $lang['technical'] ?></span>

            <div class="skills__container containers grid">
                <div>
                    <!--==================== SKILLS 1====================-->
                    <div class="skills__content skills__open">
                        <div class="skills__header">
                            <i class="uil uil-brackets-curly skills__icon"></i>

                            <div>
                                <h1 class="skills__title">Frontend <?php echo $lang['developer'] ?></h1>
                                <span class="skills__subtitle"><?php echo $lang['bfd'] ?></span>
                            </div>
                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">HTML</h3>
                                    <span class="skills__number">95%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__html"></span>
                                </div>
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">Css</h3>
                                        <span class="skills__number">70%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__css"></span>
                                    </div>
                                    <div class="skills__data">
                                        <div class="skills__titles">
                                            <h3 class="skills__name">JavaScript</h3>
                                            <span class="skills__number">35%</span>
                                        </div>
                                        <div class="skills__bar">
                                            <span class="skills__percentage skills__js"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--==================== SKILLS 2====================-->
                    <div class="skills__content skills__close">
                        <div class="skills__header">
                            <i class="uil uil-server-network skills__icon"></i>

                            <div>
                                <h1 class="skills__title">Backend <?php echo $lang['developer'] ?></h1>
                                <span class="skills__subtitle"><?php echo $lang['bbd'] ?></span>
                            </div>
                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">PHP</h3>
                                    <span class="skills__number">80%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__php"></span>
                                </div>
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">MySql</h3>
                                        <span class="skills__number">90%</span>
                                    </div>
                                   
                                        <div class="skills__bar">
                                            <span class="skills__percentage skills__hcss"></span>
                                        </div>
                                        <div class="skills__data">
                                            <div class="skills__titles">
                                                <h3 class="skills__name">Python</h3>
                                                <span class="skills__number">65%</span>
                                            </div>
                                            <div class="skills__bar">
                                                <span class="skills__percentage skills__python"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--==================== SKILLS 3====================-->
                    <div class="skills__content skills__close">
                        <div class="skills__header">
                            <i class="uil uil-laptop skills__icon"></i>

                            <div>
                                <h1 class="skills__title">Programlama</h1>
                                <span class="skills__subtitle"><?php echo $lang['bp'] ?></span>
                            </div>
                            <i class="uil uil-angle-down skills__arrow"></i>
                        </div>
                        <div class="skills__list grid">
                            <div class="skills__data">
                                <div class="skills__titles">
                                    <h3 class="skills__name">C</h3>
                                    <span class="skills__number">50%</span>
                                </div>
                                <div class="skills__bar">
                                    <span class="skills__percentage skills__figma"></span>
                                </div>
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">C++</h3>
                                        <span class="skills__number">20%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__sketch"></span>
                                    </div>
                                    

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>
         <!--==================== SERVICES ====================-->
         <section class="services section" id="services">
            <h2 class="section__title"><?php echo $lang['services'] ?></h2>
            <span class="section__subtitle"><?php echo $lang['offer'] ?></span>

            <div class="services__container containers grid">
                <!--==================== SERVICES 1====================-->
                <div class="services__content">
                    <div>
                        <i class="uil uil-web-grid services__icon"> </i>
                        <h3 class="services__title">Ui/Ux <br> <?php echo $lang['designer'] ?></h3>
                    </div>
                    <span class="button button--flex button--small button--link services__button">
                    <?php echo $lang['view'] ?>
                        <i class="uil uil-arrow-right button__icon"></i>
                    </span>
                    <div class="services__modal">
                        <div class="services__modal-content">
                            <h4 class="services__modal-title">Ui/Ux <br> <?php echo $lang['designer'] ?></h4>
                            <i class="uil uil-times services__modal-close"></i>
                            <ul class="services__modal-services grid">
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p><?php echo $lang['s_one'] ?></p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p><?php echo $lang['s_two'] ?></p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p><?php echo $lang['s_three'] ?></p>
                                </li>
                                

                            </ul>
                        </div>
                    </div>
                </div>
                <!--==================== SERVICES 2====================-->
                <div class="services__content">
                    <div>
                        <i class="uil uil-arrow services__icon"> </i>
                        <h3 class="services__title">Frontend <br> <?php echo $lang['developer'] ?></h3>
                    </div>
                    <span class="button button--flex button--small button--link services__button">
                    <?php echo $lang['view'] ?>
                        <i class="uil uil-arrow-right button__icon"></i>
                    </span>
                    <div class="services__modal">
                        <div class="services__modal-content">
                            <h4 class="services__modal-title">Frontend <br> <?php echo $lang['developer'] ?></h4>
                            <i class="uil uil-times services__modal-close"></i>
                            <ul class="services__modal-services grid">
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p><?php echo $lang['s_four'] ?></p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p><?php echo $lang['s_five'] ?></p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p><?php echo $lang['s_six'] ?></p>
                                </li>
                                

                            </ul>
                        </div>
                    </div>
                </div>
                <!--==================== SERVICES 3====================-->
                <div class="services__content">
                    <div>
                        <i class="uil uil-server-network services__icon"></i>
                        <h3 class="services__title">Backend <br> <?php echo $lang['developer'] ?></h3>
                    </div>
                    <span class="button button--flex button--small button--link services__button">
                    <?php echo $lang['view'] ?>
                        <i class="uil uil-arrow-right button__icon"></i>
                    </span>
                    <div class="services__modal">
                        <div class="services__modal-content">
                            <h4 class="services__modal-title">Backend <br> <?php echo $lang['developer'] ?></h4>
                            <i class="uil uil-times services__modal-close"></i>
                            <ul class="services__modal-services grid">
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p><?php echo $lang['s_seven'] ?></p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p><?php echo $lang['s_eight'] ?></p>
                                </li>
                                <li class="services__modal-service">
                                    <i class="uil uil-check-circle services__modal-icon"></i>
                                    <p><?php echo $lang['s_nine'] ?></p>
                                </li>
                          

                            </ul>
                        </div>
                    </div>
                </div>
            <center>
                <div class="about__buttons">
                        <a download="" href="" class="button button--flex">
                        <?php echo $lang['bionluk'] ?><i class="button__icon"></i>
                        </a>
                </div>
            </center>
            </div>
        </section>

<?php require_once"footer.php";?>