<?php 
    $query = "SELECT * FROM mempelai WHERE id = 1";
    $result = mysqli_query($connection, $query);
    $query2 = "SELECT * FROM mempelai WHERE id = 2";
    $result2 = mysqli_query($connection, $query2);
    $query3 = "SELECT * FROM tanggal WHERE id = 1";
    $result3 = mysqli_query($connection, $query3);
    $query4 = "SELECT * FROM foto WHERE id = 1";
    $result4 = mysqli_query($connection, $query4);
    if ($result4->num_rows > 0) {
        $row = $result4->fetch_assoc();
        $fotoP = $row['foto'];
    }

    $query5 = "SELECT * FROM foto WHERE id = 2";
    $result5 = mysqli_query($connection, $query5);
    if ($result5->num_rows > 0) {
        $row2 = $result5->fetch_assoc();
        $fotoW = $row2['foto'];
    }
    
    $query6 = "SELECT * FROM ucapan";
    $result6 = mysqli_query($connection, $query6);

    $query7 = "SELECT * FROM gallery";
    $result7 = mysqli_query($connection, $query7);
    
    $query8 = "SELECT * FROM timeline";
    $result8 = mysqli_query($connection, $query8);

    if (!$result) {
        die('Query error: ' . mysqli_error($connection));
    }

    // Get the first row from the result set
    $mempelaiPria = mysqli_fetch_assoc($result);
    $mempelaiWanita = mysqli_fetch_assoc($result2);
    $tanggal = mysqli_fetch_assoc($result3);

    // Close the database connection
    mysqli_close($connection);
?>