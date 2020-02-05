<?php include 'part/sidebar.php'; ?>

<?php include 'part/navbar.php'; ?>

<div class="main-content-container container-fluid px-4">
<!-- Page Header -->
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Dashboard</span>
            <h3 class="page-title">Tambah Data</h3>
            </div>
        </div>

    <div class="col-md-8">
        <form method="POST" action="config/add-procces.php">
            <div class="form-group">
                <label>NIK</label>
                <input type="text" class="form-control" placeholder="Masukkan NIK" name="nik_kry" required>
            </div>
            <div class="form-group">
                <label >NAMA</label>
                <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama_kry" required>
            </div>
            <div class="form-group">
                <label>GAJI</label>
                <input type="text" class="form-control" placeholder="Masukkan GAJI" name="gaji_kry" required>
            </div>
            <div class="form-group">
            <label>JENIS KELAMIN</label>
                <select class="form-control" name="jenis_kry" required>
                    <option >Choose...</option>
                    <option value="LAKI-LAKI">LAKI-LAKI</option>
                    <option value="PEREMPUAN">PEREMPUAN</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Alamat</label>
                <textarea class="form-control" name="alamat_kry" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-2" value="Submit" name="submit">Submit</button>
        </form>
    </div>

</div>          



<?php include 'part/footer.php'; ?>