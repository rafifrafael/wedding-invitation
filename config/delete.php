<?php
include 'koneksi.php';

if (isset($_GET['delete_gallery']) && isset($_GET['id'])) {
    $photoId = $_GET['id']; // Assuming you are passing the photo ID as a GET parameter

    // Retrieve the file path from the database based on the photo ID
    $stmt = $connection->prepare("SELECT foto FROM gallery WHERE id = ?");
    $stmt->bind_param("i", $photoId);
    $stmt->execute();
    $stmt->bind_result($filePath);
    $stmt->fetch();
    $stmt->close();

    // Delete the file from the directory
    if (unlink($filePath)) {
        // File deletion successful, delete the record from the database
        $stmt = $connection->prepare("DELETE FROM gallery WHERE id = ?");
        $stmt->bind_param("i", $photoId);
        $stmt->execute();
        $stmt->close();

        header("Location: ../gallery");
        exit();
    } else {
        echo "Error deleting the photo.";
    }

    $mysqli->close();
} elseif (isset($_GET['delete_timeline']) && isset($_GET['id'])) {
    $id = $_GET['id']; // The ID of the row you want to delete

    // Retrieve the file path from the database based on the photo ID
    $stmt = $connection->prepare("SELECT foto FROM timeline WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($filePath);
    $stmt->fetch();
    $stmt->close();

    // Delete the file from the directory
    if (unlink($filePath)) {
        // File deletion successful, delete the record from the database
        $stmt = $connection->prepare("DELETE FROM timeline WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();

        header("Location: ../timeline");
        exit();
    } else {
        echo "Error deleting the photo.";
    }
}
