<?php
include("config.php");
if(isset($_POST['kirim'])){
    $nama= $_POST['nama'];
    $email= $_POST['email'];
    $usia= $_POST['usia'];
    $jk= $_POST['jk'];
    $alamat= $_POST['alamat'];
    $nope= $_POST['nope'];
    $noktp= $_POST['noktp'];
    $nopaspor= $_POST['nopaspor'];
    $ukuran= $_POST['ukuran'];
    $tipe= $_POST['tipe'];
    $target_dir = "../../upload_file/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);

    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO pendaftar (`id`, `nama`, `email`, `usia`, `jk`, `alamat`, `nope`, `noktp`, `nopaspor`, `size_baju`, `tipe_haji`,`photo`,`create_at`) VALUES (null,'$nama','$email',$usia,'$jk','$alamat','$nope','$noktp','$nopaspor','$ukuran','$tipe','$target_file',current_timestamp)";
        $query = mysqli_query($db, $sql);
        echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
        if( $query ) {
            ?>
                <script>
                    alert("Pendaftaran Sukses");
                    window.location.href = "../index.php";
                </script>
            <?php
        } else {
            ?>
                <script>
                    alert("Pendaftaran Gagal");
                    window.location.href = "../tambah_pendaftar.php";
                </script>
            <?php
        }
    } else {
        ?>
            <script>
                alert("Sorry, there was an error uploading your file.");
                window.location.href = "../tambah_pendaftar.php";
            </script>
        <?php
    } 

} else {
    die("Akses dilarang...");
}

?>