<?php
include("config.php");
if(isset($_POST['kirim'])){
    $id= $_POST['id'];
    $judul= $_POST['judul'];
    $deskripsi= $_POST['deskripsi'];
    $isi= $_POST['isi'];
    $author= $_POST['author'];
    if(isset($_POST['temp_photo'])){
        $photo = $_POST['temp_photo'];
    }
    $target_dir = "../../upload_file/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    if($_FILES['photo']['size']!=0){
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
            $sql = "UPDATE `content` SET `judul`='$judul',`deskripsi`='$deskripsi',`isi`='$isi',`author`='$author',`photo`='$target_file' WHERE id=".$id;
            $query = mysqli_query($db, $sql);
            echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
            if( $query ) {
                unlink($photo);
                ?>
                    <script>
                        alert("Edit Content Sukses");
                        window.location.href = "../content.php";
                    </script>
                <?php
            } else {
                ?>
                    <script>
                        alert("Edit Content Gagal");
                        window.location.href = "../edit_contents.php?id="+$id;
                    </script>
                <?php
            }
        } else {
            ?>
                <script>
                    alert("Sorry, there was an error uploading your file.");
                    window.location.href = "../edit_contents.php?id="+$id;
                </script>
            <?php
        }
    }else{
        $sql = "UPDATE `content` SET `judul`='$judul',`deskripsi`='$deskripsi',`isi`='$isi',`author`='$author',`photo`='$temp_photo' WHERE id=".$id;
        $query = mysqli_query($db, $sql);
            echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
            if( $query ) {
                ?>
                    <script>
                        alert("Edit Content Sukses");
                        window.location.href = "../content.php";
                    </script>
                <?php
            } else {
                ?>
                    <script>
                        alert("Edit Content Gagal");
                        window.location.href = "../edit_contents.php?id=".$id;
                    </script>
                <?php
            }
    }
}else{
    echo "akses dilarang";
}
?>