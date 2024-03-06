<?php include '../app/views/templates/header.php'; ?>
<div class="container-fluid">
<div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <p>Buku</p>
                <h3><?= hitung('buku'); ?>
                <i class="far fa fa-book"></i></h3>

              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <p>Kategori Buku</p>
                <h3><?= hitung('kategoribuku'); ?>
                <i class="far fa-bookmark"></i></h3>

              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <p>Buku Yang Dipinjam</p>
                <h3><?= hitung('peminjaman'); ?>
                <i class="far fa fa-handshake"></i></h3>

              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <p>User</p>
                <h3><?= hitung('users'); ?>
                <i class="far fa fa-user"></i></h3>

              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
</div>
<?php include '../app/views/templates/footer.php'; ?>