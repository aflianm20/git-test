<?php include 'part/sidebar.php'; ?>

<?php include 'part/navbar.php'; ?>

<div class="main-content-container container-fluid px-4">
          <!-- Page Header -->
          <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
              <span class="text-uppercase page-subtitle">Dashboard</span>
              <h3 class="page-title">Edit Data</h3>
            </div>
          </div>


          <!-- MENGAMBIL DATA DARI DATABASE -->
          <?php 
    
            include 'config/koneksi.php';

            $id = $_GET['id'];

            $result = mysqli_query($connect, "SELECT * FROM data_karyawan WHERE id_kry=$id");

            while($data = mysqli_fetch_array($result)){
            
        ?>

    <div class="col-md-12">
        <form method="POST" action="config/edit-procces.php">
            <div class="form-group">
                <label>NIK</label>
                <input type="hidden" name="id" value="<?= $id; ?>">
                <input type="text" class="form-control-plaintext" value="<?= $data['nik_kry']; ?>" name="nik_kry" readonly>
            </div>
            <div class="form-group">
                <label >NAMA</label>
                <input type="text" class="form-control-plaintext" name="nama_kry" value="<?= $data['nama_kry']; ?>" readonly>
            </div>
            <div class="form-group">
                <label>GAJI</label>
                <input type="text" class="form-control"  name="gaji_kry" value="<?= $data['gaji_kry']; ?>" required>
            </div>
            <div>
            <label>JENIS KELAMIN</label>
                <select class="form-control" name="jenis_kry" >
                    <option ><?= $data['jenis_kry']; ?></option>
                    <option value="LAKI-LAKI">LAKI-LAKI</option>
                    <option value="PEREMPUAN">PEREMPUAN</option>
                </select>
            </div>
            <div class="form-group">
                <label >ALAMAT</label>
                <textarea class="form-control" rows="3" name="alamat_kry"><?= $data['alamat_kry']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-5" value="Submit" name="simpan">Edit</button>
        
        </form>

            <?php } ?>
    </div>

</div>          



<?php include 'part/footer.php'; ?>