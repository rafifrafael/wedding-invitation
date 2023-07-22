<?php
include 'koneksi.php';
include 'data.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data Undangan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>

  <div class="container mt-5 mb-5">
    <div class="row">
      <div class="col"></div>
      <div class="col-md-6">
        <form action="config/update.php" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label class="form-label"><strong>Nama</strong></label>
            <input type="text" class="form-control" name="namaP" value="<?php echo $mempelaiPria['nama']; ?>" placeholder="Nama Mempelai Pria">
            <input type="text" class="form-control" name="namaW" value="<?php echo $mempelaiWanita['nama']; ?>" placeholder="Nama Mempelai Pria">
          </div>
          <div class="mb-3">
            <label class="form-label"><strong>Nama Lengkap</strong></label>
            <input type="text" class="form-control" name="namaLengkapP" value="<?php echo $mempelaiPria['namaLengkap']; ?>" placeholder="Nama Lengkap Mempelai Pria">
            <input type="text" class="form-control" name="namaLengkapW" value="<?php echo $mempelaiWanita['namaLengkap']; ?>" placeholder="Nama Lengkap Mempelai Wanita">
          </div>
          <div class="mb-3">
            <label class="form-label"><strong>Tanggal</strong></label>
            <input type="date" class="form-control" name="tanggal" value="<?php echo $tanggal['tanggal']; ?>" placeholder="Tanggal">
            <input type="time" class="form-control" name="waktu" value="<?php echo $tanggal['waktu']; ?>" placeholder="Jam">
          </div>
          <div class="container text-center">
            <div class="row justify-content-center">
              <div class="col">
                <label class="form-label"><strong>Foto Mempelai Pria</strong></label>
                <img src="wedding/<?php echo $fotoP ?>" height="300" width="200">
                <input type="file" class="form-control" name="fotoP">
              </div>
              <div class="col">
                <label class="form-label"><strong>Foto Mempelai Wanita</strong></label>
                <img src="wedding/<?php echo $fotoW ?>" height="300" width="200">
                <input type="file" class="form-control" name="fotoW">
              </div>
            </div>
          </div><br>
          <button type="submit" name="edit_mempelai" class="btn btn-primary">Submit</button>
        </form><br>
        <a href="/wedding" class="btn btn-success" role="button">Undangan</a>
        <a href="gallery" class="btn btn-info" role="button">Edit Gallery</a>
        <a href="timeline" class="btn btn-info" role="button">Edit Timeline</a>
      </div>
      <div class="col"></div>
    </div>
  </div>



</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>