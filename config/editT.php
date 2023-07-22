<?php
include 'koneksi.php';
include 'data.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Timeline</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Timeline
        </button>

        <!-- Modal -->
        <form action="config/add.php" method="POST" enctype="multipart/form-data">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Timeline</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Judul</label>
                                <input type="text" class="form-control" name="judul" placeholder="Judul" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal</label>
                                <input type="text" class="form-control" name="tanggal" placeholder="Tanggal" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" rows="3" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Foto</label>
                                <input type="file" class="form-control" name="foto">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="submit_timeline" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result8) > 0) {
                    $counter = 1;
                    while ($row = mysqli_fetch_assoc($result8)) {
                        $id = $row['id'];
                        $judul = $row['judul'];
                        $tanggal = $row['tanggal'];
                        $deskripsi = $row['deskripsi'];
                        $foto = $row['foto'];

                        echo '<tr>';
                        echo '<td>' . $counter . '</td>';
                        echo '<td>' . $judul . '</td>';
                        echo '<td>' . $tanggal . '</td>';
                        echo '<td>' . $deskripsi . '</td>';
                        echo '<td><img src="wedding/' . $foto . ' ?>" height="50" width="40"></td>';
                        echo '<td><button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editTimeline' . $id . '">Edit</button></td>';
                        echo '<td><a href="config/delete.php?id=' . $id . '&delete_timeline=true" name="delete_timeline" class="btn btn-danger btn-sm">Hapus</a></td>';
                        echo '</tr>';

                        // Modal for editing
                        echo '<div class="modal fade" id="editTimeline' . $id . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">';
                        echo '<div class="modal-dialog">';
                        echo '<div class="modal-content">';
                        echo '<div class="modal-header">';
                        echo '<h1 class="modal-title fs-5" id="exampleModalLabel">Edit Timeline</h1>';
                        echo '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
                        echo '</div>';
                        echo '<div class="modal-body">';

                        // Edit form content goes here
                        echo '<form action="config/update.php" method="POST" enctype="multipart/form-data">';
                        echo '<div class="mb-3">';
                        echo '<input type="text" class="form-control" name="id" value="' . $id . '" hidden>';
                        echo '<label class="form-label">Judul</label>';
                        echo '<input type="text" class="form-control" name="judul" value="' . $judul . '">';
                        echo '</div>';

                        echo '<div class="mb-3">';
                        echo '<label class="form-label">Tanggal</label>';
                        echo '<input type="text" class="form-control" name="tanggal" value="' . $tanggal . '">';
                        echo '</div>';

                        echo '<div class="mb-3">';
                        echo '<label class="form-label">Deskripsi</label>';
                        echo '<textarea class="form-control" name="deskripsi" rows="3">' . $deskripsi . '</textarea>';
                        echo '</div>';

                        echo '<div class="mb-3">';
                        echo '<label class="form-label">Foto</label>';
                        echo '<br><img src="wedding/' . $foto . ' ?>" height="300" width="200">';
                        echo '<input type="file" class="form-control" name="foto">';
                        echo '</div>';

                        echo '</div>';
                        echo '<div class="modal-footer">';
                        echo '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>';
                        echo '<button type="submit" name="edit_timeline" class="btn btn-primary">Save changes</button>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</form>';

                        $counter++;
                    }
                }
                ?>





            </tbody>
        </table>
        <a href="edit" class="btn btn-secondary">Kembali</a> <a href="/wedding" class="btn btn-primary">Undangan</a>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</html>