<?php require_once 'header.php';
$emlak = $baglanti->prepare("SELECT * from emlak where id=:id ");

$emlak->execute(array(
  'id' => $_GET['id']
));

$emlakcek = $emlak->fetch(PDO::FETCH_ASSOC) ?>
<?php require_once 'sidebar.php'; ?>
<button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
</div>
<div id="main">
  <header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
      <i class="bi bi-justify fs-3"></i>
    </a>
  </header>

  <section class="section">
    <div class="card">
      <div class="card-header">
        <form action="netting/processing.php" method="POST" enctype="multipart/form-data" role="form">
          <h4 class="card-title">Projects</h4>
      </div>

      <div class="card-body">
        <div class="row">
          <div class="col-md-12">

            <div class="mb-3">

              <label for="helperText">Image</label>
              <input name="resim" class="form-control" type="file" id="formFile">
              <form action="netting/processing.php" method="POST">
            </div>
            <input type="hidden" name="id" value='<?php echo $emlakcek['id'] ?>'>
            <label for="helperText">Title</label>
            <div class="form-group">

              <input name="baslik" type="text" id="helperText" class="form-control" value="<?php echo $emlakcek['baslik'] ?>" placeholder="Enter new title">

              </p>
            </div>
            <div class="form-group">
              <label for="helperText">Title(EN)</label>
              <input name="title" type="text" id="helperText" class="form-control" value="<?php echo $emlakcek['title'] ?>" placeholder="Enter new description">

              </p>

            </div>
            <div class="form-group">
              <label for="helperText">Description</label>
              <input name="aciklama" type="text" id="helperText" class="form-control" value="<?php echo $emlakcek['aciklama'] ?>" placeholder="Enter new description">

              </p>

            </div>
            <div class="form-group">
              <label for="helperText">Description(EN)</label>
              <input name="about" type="text" id="helperText" class="form-control" value="<?php echo $emlakcek['about'] ?>" placeholder="Enter new description">

              </p>

            </div>
            <div class="form-group">
              <label for="helperText">Link</label>
              <input name="link" type="text" id="helperText" class="form-control" value="<?php echo $emlakcek['link'] ?>" placeholder="Enter new link">

              </p>
            </div>
            <div class="form-group">
              <label for="helperText">Tier</label>
              <input name="sira" type="text" id="helperText" class="form-control" value="<?php echo $emlakcek['sira'] ?>" placeholder="Enter new tier">

              </p>
            </div>
          </div>
          <style media="screen">
            .buttons a {
              width: 75px;
            }
          </style>
          <div class="buttons">
            <button name="urunduzenle" type="submit" class="btn btn-outline-primary">Change</button>
          </div>
        </div>
      </div>
    </div>
</div>
</section>
<footer>

</footer>
</div>
</div>
<script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/vendors/apexcharts/apexcharts.js"></script>
<script src="assets/js/pages/dashboard.js"></script>

<script src="assets/js/main.js"></script>
</body>

</html>