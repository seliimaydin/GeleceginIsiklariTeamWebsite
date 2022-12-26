<?php require_once 'header.php'; ?>
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
                  Projects
              </div>
              <div class="card-body">
                  <table class="table" id="table1">
                      <thead>
                          <tr>
                              <th>Image</th>
                              <th>Title</th>
                              <th>Title(EN)</th>
                              <th>Description</th>
                              <th>Description(EN)</th>
                              <th>Link</th>
                              <th>Tier</th>
                              <th></th>
                              <th></th>

    <th style="float:right"><a href="addprojects.php"><button style="width: 150px" class="btn btn-outline-primary">Add Image</button></th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $emlak=$baglanti->prepare("SELECT * from emlak order by id DESC ");

                        $emlak->execute();

                        while ($emlakcek=$emlak->fetch(PDO::FETCH_ASSOC)) {



                        ?>
                          <tr>
                              <td><img style="width: 300px; height: 175px;" src="images/gallery/<?php echo $emlakcek['resim'] ?>"></td>
                            <td><?php echo $emlakcek['baslik'] ?></td>
                            <td><?php echo $emlakcek['title'] ?></td>
                            <td><?php echo $emlakcek['aciklama'] ?></td>
                            <td><?php echo $emlakcek['about'] ?></td>
                            <td><?php echo $emlakcek['link']  ?></td>
                            <td><?php echo $emlakcek['sira']  ?></td>
                            <td></td>
                            <td></td>

                            <td style="float:right">

                              <form action="netting/processing.php" method="POST">
                              <input type="hidden" name="id" value="<?php echo $emlakcek['id'] ?>">

                              <button name="urunsil" class="btn btn-outline-danger">Delete</button>
                                                            </form>
                                                            <td style="float:right"><a href="editprojects.php?id=<?php echo $emlakcek['id'] ?>"><button class="btn btn-outline-success">Edit</button></a></td>

                          </tr>
      <?php } ?>
                      </tbody>
                  </table>

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
