<?php
include("config.php");
if(isset($_POST['kirim'])){
    $judul= $_POST['judul'];
    $deskripsi= $_POST['deskripsi'];
    $isi= $_POST['isi'];
    $author= $_POST['author'];
    $target_dir = "../../upload_file/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO `content`(`id`, `judul`, `deskripsi`, `isi`, `author`, `create_at`, `photo`) VALUES (null,'$judul','$deskripsi','$isi','$author',current_timestamp,'$target_file')";
        $query = mysqli_query($db, $sql);
        echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
        if( $query ) {
            ?>
                <script>
                    alert("Upload Content Sukses");
                    window.location.href = "../content.php";
                </script>
            <?php
        } else {
            ?>
                <script>
                    alert("Upload Content Gagal");
                    window.location.href = "../tambah_content.php";
                </script>
            <?php
        }
    } else {
        ?>
            <script>
                alert("Sorry, there was an error uploading your file.");
                window.location.href = "../tambah_content.php";
            </script>
        <?php
    } 

} else {
    die("Akses dilarang...");
}

?>