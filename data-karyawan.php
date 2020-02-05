<?php 

    include 'config/koneksi.php';
    $no = 1;
    $query = mysqli_query($connect, "SELECT * FROM data_karyawan")

?>


<?php include 'part/sidebar.php'; ?>

<?php include 'part/navbar.php'; ?>

<div class="main-content-container container-fluid px-4">
          <!-- Page Header -->
          <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
              <span class="text-uppercase page-subtitle">Dashboard</span>
              <h3 class="page-title">Data Karyawan</h3>
            </div>
          </div>
          <!-- Small Stats Blocks -->
          <div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                  <div class="table-responsive p-0 pb-3 text-center">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">NO</th>
                          <th scope="col" class="border-0">NIK</th>
                          <th scope="col" class="border-0">NAMA</th>
                          <th scope="col" class="border-0">GAJI</th>
                          <th scope="col" class="border-0">JENIS KELAMIN</th>
                          <th scope="col" class="border-0">ALAMAT</th>
                          <th scope="col" class="border-0">AKSI</th>
                        </tr>
                      </thead>
                      <?php foreach ($query as $ed) { ?>
                      <tbody>
                        <tr>
                          <td><?= $no++;?></td>
                          <td><?= $ed['nik_kry']; ?></td>
                          <td><?= $ed['nama_kry']; ?></td>
                          <td><?= $ed['gaji_kry']; ?></td>
                          <td><?= $ed['jenis_kry']; ?></td>
                          <td><?= $ed['alamat_kry']; ?></td>
                          <td>
                            <a href="edit.php?id=<?= $ed['id_kry']; ?>" class="btn btn-primary mt-1" name="submit">Edit</button> 
                            <a href="config/delete-procces.php?id=<?= $ed['id_kry']; ?>" class="btn btn-danger mt-1" name="submit">Hapus</a> 
                          </<button>
                        </tr>
                      </tbody>
                      <?php } ?>
                    </table>
                    <p>Total Karyawan : <?= mysqli_num_rows($query)?></p>
                  </div>
                </div>
              </div>
            </div>

</div>


<?php include 'part/footer.php'; ?>