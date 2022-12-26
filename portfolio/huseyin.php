<?php require_once"header.php";?>

<section class="home section" id="home">
            <div class="home__container containers grid">
                <div class="home__content grid">
                    <div class="home__social">
                        <a href="https://twitter.com/hrahmiyldrm" target="_blank" class="home__social-icon">
                            <i class="uil uil-twitter-alt"></i>
                        </a>
                        <a href="https://www.instagram.com/huseyin_rahmi_yldrm/" target="_blank" class="home__social-icon">
                            <i class="uil uil-instagram"></i>
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
                                <image class="home__blob-img" x='12' y='18' xlink:href="../images/team/huseyinrahmi_yildirim.jpg" />
                            </g>
                        </svg>
                    </div>
                    <div class="home__data">
                        <h1 class="home__title"><?php echo $lang['h_huseyin'] ?></h1>
                        <h3 class="home__subtitle"><?php echo $lang['founding'] ?></h3>
                        <p class="home__description"><?php echo $lang['abouth'] ?></p>
                        
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
                <img src="img/portfolio3.jpg" alt="" class="about__img">
                <div class="about__data">

                    <p class="about__description"></p>
                    <div class="about__info">
                        <div>
                            <span class="about__info-title">04+</span>
                            <span class="about__info-name"><?php echo $lang['experience'] ?></span>
                        </div>

                        <div>
                            <span class="about__info-title">20+</span>
                            <span class="about__info-name"><?php echo $lang['projects'] ?></span>
                        </div>

                        <div>
                            <span class="about__info-title">03</span>
                            <span class="about__info-name"><?php echo $lang['worked'] ?></span>
                        </div>
                    </div>
                                     
                </div>
            </div>
        </section>
                  
        <section class="qualification section">
            <h2 class="section__title"><?php echo $lang['personalj']?></h2>
           
            <div class="qualification__container container">
                <div class="qualification__tabs">
                    <div class="qualification__button button--flex qualification__active" data-target="#education">
                        <i class="uil uil-users-alt qualification__icon"></i>
                        <?php echo $lang['team']?>
                    </div>

                   
                </div>
                <div class="qualification__sections">
        

                    <!--==================== QUALIFICATION CONTENT 2 ====================-->
                    <div class="qualification__content qualification__active" data-content="" id="education">

                        <!--==================== QUALIFICATION 1 ====================-->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title"><?php echo $lang['qqone']?></h3>
                               
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2018 - ?
                                </div>
                            </div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>

                            </div>
                        </div>
                       <!--==================== QUALIFICATION 2 ====================-->
                        <div class="qualification__data">
                            <div></div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>

                            </div>
                            <div>
                                <h3 class="qualification__title"><?php echo $lang['qqtwo']?></h3>
                                
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2020
                                </div>
                            </div>

                        </div>
                        <!--==================== QUALIFICATION 3 ====================-->
                        <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title"><?php echo $lang['qqthree']?></h3>
                                
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2020
                                </div>
                            </div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>

                            </div>
                        </div>
                       <!--==================== QUALIFICATION 4 ====================-->
                         <div class="qualification__data">
                            <div></div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>

                            </div>
                            <div>
                                <h3 class="qualification__title"><?php echo $lang['qqfour']?></h3>
                                
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2021
                                </div>
                            </div>

                        </div>
                         <!--==================== QUALIFICATION 5 ====================-->
                         <div class="qualification__data">
                            <div>
                                <h3 class="qualification__title"><?php echo $lang['qqfive']?>
                    </h3>
                                
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2021 
                                </div>
                            </div>
                            <div>
                                <span class="qualification__rounder"></span>
                                <span class="qualification__line"></span>
                            
                            </div>
                        </div>

                        <!--==================== QUALIFICATION 6 ====================-->
                        <div class="qualification__data">
                            <div></div>
                            <div>
                                <span class="qualification__rounder"></span>
                               <!-- <span class="qualification__line"></span> -->

                            </div>
                            <div>
                                <h3 class="qualification__title"><?php echo $lang['qqsix']?></h3>
                                
                                <div class="qualification__calendar">
                                    <i class="uil uil-calendar-alt"></i>
                                    2022
                                </div>
                            </div>

                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </section>

<?php require_once"footer.php";?>