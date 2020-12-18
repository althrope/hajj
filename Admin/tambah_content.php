<?php
session_start();
$nama = $_SESSION['username'];
if(!isset($_SESSION['username'])){
    header('Location: login.php');
}
include("proses/config.php");
include("partial/title.php");
?>
<body>
    <div id="wrapper">
    <?php
    include("partial/sidebar.php");
    include("partial/navbar.php");
    ?>
            </div>
        
            <div class="wrapper wrapper-content">

<div class="row">
    <div class="col-lg-12">
    <div class="ibox ">
        <div class="ibox-title">
            <h5>Tambah Content</h5>
            <div class="ibox-tools">
            </div>
        </div>
        <form action="proses/proses_content.php" method="POST" enctype="multipart/form-data">
            <div class="ibox-content">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10"><input type="text" name="judul" placeholder="Judul" class="form-control"></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group row"><label class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea id="" cols="30" rows="3" name="deskripsi" class="form-control" placeholder="Deskripsi"></textarea>
                        </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group row"><label class="col-sm-2 col-form-label">Isi</label>
                    <textarea class="summernote" name="isi" placeholder="isi"></textarea>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group row"><label class="col-sm-2 col-form-label">Author</label>
                    <div class="col-sm-10"><input type="text" name="author" placeholder="Author" class="form-control"></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group row"><label class="col-sm-2 col-form-label">Photo</label>
                                    <div class="col-sm-10"><input type="file" name="photo" class="form-control"></div>
                </div>
                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white btn-sm" type="reset">Batalkan</button>
                                        <input class="btn btn-primary btn-sm" type="submit" name="kirim" value="kirim">
                                    </div>
                                </div>
        </div>             
       
        </form>
    </div>
</div>
</div>
</div>

<?php
    include("partial/footer.php");
    ?>
</body>

</html>
