<?php
include 'koneksi.php'; 
$name = "Ripki";
$email = "ripki@example.com";

// query insert
$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil ditambahkan!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
