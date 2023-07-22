<?php
include 'koneksi.php';
include 'data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Gallery</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>

  <div class="container mt-5 mb-5">
    <div class="row">
      <div class="col"></div>
      <div class="col-md-6">
        <a href="edit" class="btn btn-secondary">Kembali</a><a href="/wedding" class="btn btn-primary">Undangan</a> <br><br>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahFoto">
          Tambah Foto Gallery
        </button><br><br>

        <!-- Modal -->
        <div class="modal fade" id="tambahFoto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Foto Gallery</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="config/add.php" method="POST" enctype="multipart/form-data">
                  <input type="file" class="form-control" name="foto">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="submit_gallery" class="btn btn-primary">Save changes</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="container text-center">
          <div class="row justify-content-center">

            <?php
            while ($row4 = mysqli_fetch_assoc($result7)) {
              $id = $row4['id'];
              $foto = $row4['foto'];

              echo '<div class="col-md-6">';
              echo '<label class="form-label"><strong>Foto Gallery Pernikahan</strong></label>';
              echo '<img src="wedding/' . $foto . ' ?>" height="300" width="200">';
              echo '<input type="text" name="id" value="' . $id . '" hidden><br>';
              echo '<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editGallery' . $id . '">Edit</button>';
              echo '<a href="config/delete.php?id=' . $id . '&delete_gallery=true" name="delete_gallery" class="btn btn-danger">Hapus</a>';
              echo '</div>';

              // Modal for editing
              echo '<div class="modal fade" id="editGallery' . $id . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">';
              echo '<div class="modal-dialog">';
              echo '<div class="modal-content">';
              echo '<div class="modal-header">';
              echo '<h1 class="modal-title fs-5" id="exampleModalLabel">Edit Foto Gallery</h1>';
              echo '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
              echo '</div>';
              echo '<div class="modal-body">';

              // Edit form content goes here
              echo '<form action="config/update.php" method="POST" enctype="multipart/form-data">';
              echo '<input type="text" name="id" value="' . $id . '" hidden><br>';
              echo '<img src="wedding/' . $foto . ' ?>" height="300" width="200">';
              echo '<input type="file" class="form-control" name="foto">';
              echo '</div>';
              echo '<div class="modal-footer">';
              echo '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>';
              echo '<button type="submit" name="edit_gallery" class="btn btn-primary">Save changes</button>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              echo '</form>';
            }
            ?>
          </div>
        </div>
      </div>
      <div class="col"></div>

    </div>
  </div>



</body>

</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>