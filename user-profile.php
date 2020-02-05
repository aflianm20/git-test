<?php include 'part/sidebar.php'; ?>

<?php include 'part/navbar.php'; ?>

<div class="main-content-container container-fluid px-4">
          <!-- Page Header -->
          <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
              <span class="text-uppercase page-subtitle">Dashboard</span>
              <h3 class="page-title">User Profile</h3>
            </div>
          </div>
          <!-- Small Stats Blocks -->
          <div class="row">
              <div class="col-lg-4">
                <div class="card card-small mb-4 pt-3">
                  <div class="card-header border-bottom text-center">
                    <div class="mb-3 mx-auto">
                      <img class="rounded-circle" src="images/<?php echo $_SESSION['foto'];?>" alt="User Avatar" width="120"> </div>
                    <h4 class="mb-0"><?php echo $_SESSION['username']?></h4>
                    <span class="text-muted d-block mb-2 "><?php echo $_SESSION['jabatan'];?></span>
                    <a href="https://<?php echo $_SESSION['instagram'];?>" class="mb-2 btn btn-sm btn-pill btn-outline-primary mr-2" target="_blank">
                      <i class="material-icons mr-1">person_add</i>Follow</a>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-4">
                      <strong class="text-muted d-block mb-2">Description</strong>
                      <span><?php echo $_SESSION['deskripsi'];?></span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Informasi Akun</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item ">
                      <div class="row">
                        <div class="col">
                          <form>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label>Nama Depan</label>
                                <input type="text" class="form-control-plaintext font-weight-bold" value="<?php echo $_SESSION['first_name'];?>" readonly></div>
                              <div class="form-group col-md-6">
                                <label >Nama Belakang</label>
                                <input type="text" class="form-control-plaintext font-weight-bold" value="<?php echo $_SESSION['last_name'];?>" readonly></div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label>Email</label>
                                <input type="email" class="form-control-plaintext font-weight-bold" value="<?php echo $_SESSION['email'];?>" readonly> </div>
                              <div class="form-group col-md-6">
                                <label>Username</label>
                                <input type="text" class="form-control-plaintext font-weight-bold" value="<?php echo $_SESSION['username'];?>" readonly></div>
                            </div>
                            <div class="form-group">
                                <label >ALAMAT</label>
                                <textarea class="form-control-plaintext font-weight-bold" rows="3" readonly><?php echo $_SESSION['alamat'];?></textarea>
                            </div>
                          </form>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
</div>          


<?php include 'part/footer.php'; ?>