<?php
include("config.php");
if(isset($_POST['kirim'])){
    $id = $_POST['id'];
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
    if(isset($_POST['temp_photo'])){
        $photo = $_POST['temp_photo'];
    }
    $target_dir = "../../upload_file/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);

    if($_FILES['photo']['size']!=0){
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
            $sql = "UPDATE `pendaftar` SET `nama`='$nama',`email`='$email',`usia`=$usia,`jk`='$jk',`alamat`='$alamat',`nope`='$nope',`noktp`='$noktp',`nopaspor`='$nopaspor',`size_baju`='$ukuran',`tipe_haji`='$tipe',`photo`='$target_file' WHERE id = $id";
            $query = mysqli_query($db, $sql);
            echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
            if( $query ) {
                unlink($photo);
                ?>
                    <script>
                        alert("Edit Pendaftaran Sukses");
                        window.location.href = "../index.php";
                    </script>
                <?php
            } else {
                ?>
                    <script>
                        alert("Edit Pendaftaran Gagal");
                        window.location.href = "../edit_pendaftar.php?id=".$id;
                    </script>
                <?php
            }
        } else {
            ?>
                <script>
                    alert("Sorry, there was an error uploading your file.");
                    window.location.href = "../edit_pendaftar.php?id=".$id;
                </script>
            <?php
        } 
    }else{
            $sql = "UPDATE `pendaftar` SET `nama`='$nama',`email`='$email',`usia`=$usia,`jk`='$jk',`alamat`='$alamat',`nope`='$nope',`noktp`='$noktp',`nopaspor`='$nopaspor',`size_baju`='$ukuran',`tipe_haji`='$tipe',`photo`='$photo' WHERE id = $id";
            $query = mysqli_query($db, $sql);
            echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
            if( $query ) {
                ?>
                    <script>
                        alert("Edit Pendaftaran Sukses");
                        window.location.href = "../index.php";
                    </script>
                <?php
            } else {
                ?>
                    <script>
                        alert("Edit Pendaftaran Gagal");
                        window.location.href = "../edit_pendaftar.php?id=".$id;
                    </script>
                <?php
            }
    }
}else{
    echo "akses dilarang";
}
?>