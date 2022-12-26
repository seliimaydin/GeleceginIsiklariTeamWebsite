<?php include "header.php"; ?>
<?php include "config.php"; ?>
<link rel="stylesheet" href="css/bootstrap.css">

<style>
   

    .dib {
        display: inline-block;
        margin: auto;
    }

    .mx-auto {
        margin-right: auto !important;
        margin-left: auto !important;
        position: relative;
    margin: auto;
    }

    .fw{
        font-weight: 600;
    }
    .mb{
        margin-bottom: 50px;
        margin-top: 20px;
    }
    img{
        border-radius: 5px;
        
    }
    .jcc{
        position: relative;
        margin: auto;
    }
    .emerald {
        color: #096845;
    }

    .gold {
        color: #E7BD42;
    }

    .silver {
        color: #C0C0C0;
    }

    .bronze {
        color: #BF8970;
    }
    .bl{
        border-right: 1px rgba(0, 0, 0, 0.2) solid ;
    }
    #footer{
        position: fixed;
        bottom: 0;
        right: 0;
        left: 0;
    }
    .mt{
        margin-top: 35px;
        margin-bottom: 35px ;
    }
    .mt-5{
        margin-bottom: 20px ;
    }
</style>
<br><br><br><br><br>
<div class="container">
    <div class="row mx-auto">
        <h1 class="text-center mt"><?php echo $lang['g_sponsor']?></h1>
        <div class="col-3 bl jcc mx-auto">
                <h2 class="emerald text-center fw mt-5"><?php echo $lang['emerald']?> Sponsor</h2>
                <center>
                    <img src="https://picsum.photos/200/200.jpg" alt="">
                </center>
            </div>
            <div class="col-3 bl jcc">
                <h2 class="gold text-center fw mt-5"><?php echo $lang['gold']?> Sponsor</h2>
                <center>
                    <img src="https://picsum.photos/200/200.jpg" alt="">
                </center>
            </div>
            <div class="col-3 bl jcc">
                <h2 class="silver text-center fw shadow mt-5"><?php echo $lang['silver']?> Sponsor</h2>
                <center>
                    <img src="https://picsum.photos/200/200.jpg" alt="">
                </center>
            </div>
            <div class="col-3 bl jcc">
                <h2 class="bronze text-center fw mt-5"> <?php echo $lang['bronze']?> Sponsor</h2>
                <p>

                </p>
                <center>
                    <img src="https://picsum.photos/200/200.jpg" alt="">
                </center>
            </div>
    </div>
   
</div>



<?php require_once "footer.php"; ?>