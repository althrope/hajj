<?php
include("config.php");
$sql = "SELECT * FROM pendaftar where id = ".$_GET['id'];
$query = mysqli_query($db, $sql);
while($row = $query->fetch_object()){
    unlink($row->photo);
}
$sql = "DELETE FROM `pendaftar` WHERE id = ".$_GET['id'];
$query = mysqli_query($db, $sql);
if( $query ) {
    ?>
        <script>
            alert("Hapus Pendaftar Sukses");
            window.location.href = "../index.php";
        </script>
    <?php
} else {
    ?>
        <script>
            alert("Hapus Pendaftar Gagal");
            window.location.href = "../index.php";
        </script>
    <?php
}