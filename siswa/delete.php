<?php
include_once('config.php');
$id = $_GET['id'];

$sql = "DELETE FROM grades WHERE id='$id'";
$result = mysqli_query($conn, $sql);
if ($result) {
    header("Location: ?m=kelas&s=view");
} else {
    echo "<script>alert('Data gagal dihapus'); window.location='?m=kelas&s=view';</script>";
}