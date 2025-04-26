<?php
if (isset($_POST['update'])) {
    include_once('config.php');
    $id = $_POST['id'];
    $grade = $_POST['grade'];
    $room = $_POST['room'];
    $capacity = $_POST['capacity'];
    $fill = $_POST['fill'];

    $sql = "UPDATE grades SET grade='$grade', room='$room', capacity='$capacity', fill='$fill' WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: ?m=kelas&s=view");
    } else {
        echo "<script>alert('Data gagal disimpan'); window.location='?m=kelas&s=edit';</script>";
    }
} else {
    echo "Jangan langsung buka file ini. Tambah Data <a href='?m=kelas&s=edit'>Klik disini</a>";
}