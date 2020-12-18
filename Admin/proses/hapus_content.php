<?php
include("config.php");
$sql = "SELECT * FROM content where id = ".$_GET['id'];
$query = mysqli_query($db, $sql);
while($row = $query->fetch_object()){
    unlink($row->photo);
}
$sql = "DELETE FROM `content` WHERE id = ".$_GET['id'];
$query = mysqli_query($db, $sql);
if( $query ) {
    ?>
        <script>
            alert("Hapus Content Sukses");
            window.location.href = "../content.php";
        </script>
    <?php
} else {
    ?>
        <script>
            alert("Hapus Content Gagal");
            window.location.href = "../content.php";
        </script>
    <?php
}