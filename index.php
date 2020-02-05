<?php 

    include 'config/koneksi.php';
    $query = mysqli_query($connect, "SELECT * FROM data_karyawan")


?>

<?php include 'part/sidebar.php'; ?>

<?php include 'part/navbar.php'; ?>

<div class="main-content-container container-fluid px-4">
          <!-- Page Header -->
          <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
              <span class="text-uppercase page-subtitle">Dashboard</span>
              <h3 class="page-title">Blog Overview</h3>
            </div>
          </div>
          <!-- Small Stats Blocks -->
          <div class="row">
            <div class="col-lg col-md-6 col-sm-6 mb-4">
              <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                  <div class="d-flex flex-column m-auto">
                    <div class="stats-small__data text-center">
                      <span class="stats-small__label text-uppercase">Karyawan</span>
                      <h6 class="stats-small__value count my-3"><?= mysqli_num_rows($query)?></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg col-md-6 col-sm-6 mb-4">
              <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                  <div class="d-flex flex-column m-auto">
                    <div class="stats-small__data text-center">
                      <span class="stats-small__label text-uppercase">Day</span>
                      <h6 class="stats-small__value count my-3"><?= date("l"); ?></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg col-md-4 col-sm-6 mb-4">
              <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                  <div class="d-flex flex-column m-auto">
                    <div class="stats-small__data text-center">
                      <span class="stats-small__label text-uppercase">Date</span>
                      <h6 class="stats-small__value count my-3"><?= date("d"); ?></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg col-md-4 col-sm-6 mb-4">
              <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                  <div class="d-flex flex-column m-auto">
                    <div class="stats-small__data text-center">
                      <span class="stats-small__label text-uppercase">Month</span>
                      <h6 class="stats-small__value count my-3"><?= date("F"); ?></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg col-md-4 col-sm-12 mb-4">
              <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                  <div class="d-flex flex-column m-auto">
                    <div class="stats-small__data text-center">
                      <span class="stats-small__label text-uppercase">Year</span>
                      <h6 class="stats-small__value count my-3"><?= date("o"); ?></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Small Stats Blocks -->
        </div>


        <?php include 'part/footer.php'; ?>