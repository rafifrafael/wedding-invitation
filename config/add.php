<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['submit_timeline'])) {
    if (isset($_FILES['foto'])) {
      $file = $_FILES['foto'];
  
      // File properties
      $file_name = $file['name'];
      $file_tmp = $file['tmp_name'];
      $file_size = $file['size'];
      $file_error = $file['error'];
  
      // Check for errors
      if ($file_error === 0) {
        // Generate a unique file name to avoid conflicts
        $file_destination = '../uploads/' . uniqid() . '_' . $file_name;
  
        // Move the uploaded file to the desired directory
        if (move_uploaded_file($file_tmp, $file_destination)) {
          // Prepare data for insertion
          $judul = $_POST['judul'];
          $tanggal = $_POST['tanggal'];
          $deskripsi = $_POST['deskripsi'];
  
          // Prepare the SQL statement
          $stmt = $connection->prepare("INSERT INTO timeline (judul, tanggal, deskripsi, foto) VALUES (?, ?, ?, ?)");
          $stmt->bind_param("ssss", $judul, $tanggal, $deskripsi, $file_destination);
          $stmt->execute();
          $stmt->close();
  
          header("Location: ../timeline");
          exit();
        } else {
          echo "Error: File upload failed.";
        }
      } else {
        echo "Error: File upload error.";
      }
    }
  }
   elseif (isset($_POST['submit_ucapan'])) {
    // Prepare data for insertion
    $nama = $_POST['nama'];
    $ucapan = $_POST['ucapan'];

    // Prepare the SQL statement
    $sql = "INSERT INTO ucapan (nama, ucapan) VALUES ('$nama', '$ucapan')";

    // Execute the SQL statement
    if ($connection->query($sql) === TRUE) {
      header("Location: ../#ucapan");
      exit();
    } else {
      echo "Error: " . $sql . "<br>" . $connection->error;
    }
  } elseif (isset($_POST['submit_gallery'])) {
    if (isset($_FILES['foto'])) {
      $file = $_FILES['foto'];
    
      // File properties
      $file_name = $file['name'];
      $file_tmp = $file['tmp_name'];
      $file_size = $file['size'];
      $file_error = $file['error'];
    
      // Check for errors
      if ($file_error === 0) {
        // Generate a unique file name to avoid conflicts
        $file_destination = '../uploads/' . uniqid() . '_' . $file_name;
    
        // Move the uploaded file to the desired directory
        if (move_uploaded_file($file_tmp, $file_destination)) {
          // File upload successful, store the file path in the database
          $stmt = $connection->prepare("INSERT INTO gallery (foto) VALUES (?)");
          $stmt->bind_param("s", $file_destination);
          $stmt->execute();
    
          // Close statement and database connection
          $stmt->close();
          $connection->close();
    
          header("Location: ../gallery");
          exit();
        } else {
          echo "Error moving the file.";
        }
      } else {
        echo "Error uploading the file.";
      }
    }
  }
}

// Close the connection
$connection->close();
?>
