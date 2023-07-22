<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['edit_mempelai'])) {
        $namaP = $_POST['namaP'];
        $namaW = $_POST['namaW'];
        $namaLengkapP = $_POST['namaLengkapP'];
        $namaLengkapW = $_POST['namaLengkapW'];
        $tanggal = $_POST['tanggal'];
        $waktu = $_POST['waktu'];

        $sql = "UPDATE mempelai SET nama = '$namaP', namaLengkap = '$namaLengkapP' WHERE id = 1";
        $sql2 = "UPDATE mempelai SET nama = '$namaW', namaLengkap = '$namaLengkapW' WHERE id = 2";
        $sql3 = "UPDATE tanggal SET tanggal = '$tanggal', waktu = '$waktu' WHERE id = 1";

        if (isset($_FILES['fotoP']) || isset($_FILES['fotoW'])) {
            // Get the uploaded file details
            $fotoP = $_FILES['fotoP'];
            $fileName = $fotoP['name'];
            $fileTmpPath = $fotoP['tmp_name'];

            $fotoW = $_FILES['fotoW'];
            $fileName2 = $fotoW['name'];
            $fileTmpPath2 = $fotoW['tmp_name'];

            // Specify the path where you want to store the uploaded photo
            $uploadDirectory = '../uploads/';

            // Generate a unique filename for the photo
            $newFileName = uniqid() . '_' . $fileName;
            $destination = $uploadDirectory . $newFileName;

            $newFileName2 = uniqid() . '_' . $fileName2;
            $destination2 = $uploadDirectory . $newFileName2;

            // Move the uploaded file to the destination path
            if (move_uploaded_file($fileTmpPath, $destination)) {
                // Update the photo path in the database

                $stmt = $connection->prepare("SELECT foto FROM foto WHERE id = 1");
                $stmt->execute();
                $stmt->bind_result($filePath);
                $stmt->fetch();
                $stmt->close();
                unlink($filePath);

                $sql4 = "UPDATE foto SET foto = '$destination' WHERE id = 1"; // Replace 'your_table_name' and 'id' with your actual table and column names
                if ($connection->query($sql4) === TRUE) {
                    echo 'Photo updated successfully.';
                } else {
                    echo 'Error updating photo: ' . $connection->error;
                }
            } else {
                echo 'Error uploading file.';
            }

            if (move_uploaded_file($fileTmpPath2, $destination2)) {
                // Update the photo path in the database

                $stmt = $connection->prepare("SELECT foto FROM foto WHERE id = 2");
                $stmt->execute();
                $stmt->bind_result($filePath);
                $stmt->fetch();
                $stmt->close();
                unlink($filePath);

                $sql5 = "UPDATE foto SET foto = '$destination2' WHERE id = 2"; // Replace 'your_table_name' and 'id' with your actual table and column names
                if ($connection->query($sql5) === TRUE) {
                    echo 'Photo updated successfully.';
                } else {
                    echo 'Error updating photo: ' . $connection->error;
                }
            } else {
                echo 'Error uploading file.';
            }
        }

        if ($connection->query($sql) && $connection->query($sql2) && $connection->query($sql3) === TRUE) {
            echo "Record updated successfully";
            header("Location: ../edit");
            exit();
        } else {
            echo "Error updating record: " . $connection->error;
        }
    } elseif (isset($_POST['edit_gallery'])) {
        if (isset($_FILES['foto'])) {
            // Get the uploaded file details
            $id = $_POST['id'];
            $foto = $_FILES['foto'];
            $fileName = $foto['name'];
            $fileTmpPath = $foto['tmp_name'];

            // Specify the path where you want to store the uploaded photo
            $uploadDirectory = '../uploads/';

            // Generate a unique filename for the photo
            $newFileName = uniqid() . '_' . $fileName;
            $destination = $uploadDirectory . $newFileName;

            // Move the uploaded file to the destination path
            if (move_uploaded_file($fileTmpPath, $destination)) {
                // Update the photo path in the database

                $stmt = $connection->prepare("SELECT foto FROM gallery WHERE id = $id");
                $stmt->execute();
                $stmt->bind_result($filePath);
                $stmt->fetch();
                $stmt->close();
                unlink($filePath);

                $sql = "UPDATE gallery SET foto = '$destination' WHERE id = $id"; // Replace 'your_table_name' and 'id' with your actual table and column names
                if ($connection->query($sql) === TRUE) {
                    header("Location: ../gallery");
                    exit();
                } else {
                    echo 'Error updating photo: ' . $connection->error;
                }
            } else {
                echo 'Error uploading file.';
            }
        }
    } elseif (isset($_POST['edit_timeline'])) {
        if (isset($_FILES['foto'])) {
            // Get the uploaded file details
            $id = $_POST['id'];
            $foto = $_FILES['foto'];
            $fileName = $foto['name'];
            $fileTmpPath = $foto['tmp_name'];

            // Specify the path where you want to store the uploaded photo
            $uploadDirectory = '../uploads/';

            // Generate a unique filename for the photo
            $newFileName = uniqid() . '_' . $fileName;
            $destination = $uploadDirectory . $newFileName;

            // Move the uploaded file to the destination path
            if (move_uploaded_file($fileTmpPath, $destination)) {
                // Update the photo path in the database

                $stmt = $connection->prepare("SELECT foto FROM timeline WHERE id = $id");
                $stmt->execute();
                $stmt->bind_result($filePath);
                $stmt->fetch();
                $stmt->close();
                unlink($filePath);

                $sql = "UPDATE timeline SET foto = '$destination' WHERE id = $id"; // Replace 'your_table_name' and 'id' with your actual table and column names
                if ($connection->query($sql) === TRUE) {
                    
                } else {
                    echo 'Error updating photo: ' . $connection->error;
                }
            }
            $id = $_POST['id']; // The ID of the row you want to update
            $judul = $_POST['judul']; // The ID of the row you want to update
            $tanggal = $_POST['tanggal']; // The ID of the row you want to update
            $deskripsi = $_POST['deskripsi']; // The ID of the row you want to update

            $query = "UPDATE timeline SET judul = '$judul', tanggal = '$tanggal', deskripsi = '$deskripsi' WHERE id = $id";
            $result = mysqli_query($connection, $query);

            if ($result) {
                header("Location: ../timeline");
                exit();
            } else {
                die('Query error: ' . mysqli_error($connection));
            }
        }
    }
}
