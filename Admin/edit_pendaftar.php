<?php
session_start();
$nama = $_SESSION['username'];
if(!isset($_SESSION['username'])){
    header('Location: login.php');
}
include("proses/config.php");
include("partial/title.php");
$sql = "SELECT * FROM pendaftar where id = ".$_GET['id'];
$query = mysqli_query($db, $sql);
?>
<body>
    <div id="wrapper">
    <?php
    include("partial/sidebar.php");
    include("partial/navbar.php");
    ?>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Edit Data</h5>
                            <div class="ibox-tools">
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form action="proses/edit_daftar.php" method="POST" enctype="multipart/form-data">
                            <?php
                                while($row = $query->fetch_object()){
                                    
                            ?>
                                <input type="hidden" name="id" value="<?=$row->id?>">
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10"><input type="text" name="nama" value="<?=$row->nama?>" placeholder="Nama" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10"><input type="text" name="email" value="<?=$row->email?>" placeholder="Email" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Usia</label>
                                    <div class="col-sm-10"><input type="text" name="usia" value="<?=$row->usia?>" placeholder="Usia" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10"><select class="form-control m-b" name="jk">
                                        <option value="Laki-Laki" <?php if($row->jk == "Laki-Laki") echo "selected=selected"?>>Laki-Laki</option>
                                        <option value="Perempuan" <?php if($row->jk == "Perempuan") echo "selected=selected"?>>Perempuan</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <textarea id="" cols="30" rows="3" name="alamat" value="<?=$row->alamat?>" class="form-control" placeholder="Alamat"><?=$row->alamat?></textarea>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">No HP</label>
                                    <div class="col-sm-10"><input type="text" name="nope" value="<?=$row->nope?>" placeholder="No HP" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">No KTP</label>
                                    <div class="col-sm-10"><input type="text" name="noktp" placeholder="No KTP" value="<?=$row->noktp?>" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">No Paspor</label>
                                    <div class="col-sm-10"><input type="text" name="nopaspor" placeholder="No Paspor" value="<?=$row->nopaspor?>" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Size Baju<br/>
                                    <small class="text-navy"></small></label>
                                    <div class="col-sm-10">
                                       <div><label> <input type="radio" <?php if($row->size_baju=='S'){echo 'checked';}?> value="S" id="optionsRadios1" name="ukuran">S</label></div>
                                        <div><label> <input type="radio" <?php if($row->size_baju=='M'){echo 'checked';}?> value="M" id="optionsRadios2" name="ukuran">M</label></div>
                                        <div><label> <input type="radio" <?php if($row->size_baju=='L'){echo 'checked';}?> value="L" id="optionsRadios1" name="ukuran">L</label></div>
                                        <div><label> <input type="radio" <?php if($row->size_baju=='XL'){echo 'checked';}?> value="XL" id="optionsRadios2" name="ukuran">XL</label></div>
                                        <div><label> <input type="radio" <?php if($row->size_baju=='XXL'){echo 'checked';}?> value="XXL" id="optionsRadios1" name="ukuran">XXL</label></div>  
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Tipe Paket<br/>
                                    <small class="text-navy"></small></label>
                                    <div class="col-sm-10">
                                       <div><label> <input type="radio" <?php if($row->tipe_haji=='Umroh'){echo 'checked';}?> value="Umroh" id="optionsRadios1" name="tipe">Umroh</label></div>
                                        <div><label> <input type="radio" <?php if($row->tipe_haji=='Haji Reguler'){echo 'checked';}?> value="Haji Reguler" id="optionsRadios2" name="tipe">Haji Reguler</label></div>
                                        <div><label> <input type="radio" <?php if($row->tipe_haji=='Haji Plus'){echo 'checked';}?> value="Haji Plus" id="optionsRadios1" name="tipe">Haji Plus</label></div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Photo</label>
                                    <div class="col-sm-10"><input type="file" name="photo" class="form-control"></div>
                                    <input type="hidden" name="temp_photo" value="<?=$row->photo?>" class="form-control">
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white btn-sm" type="reset">Batalkan</button>
                                        <input class="btn btn-primary btn-sm" type="submit" name="kirim" value="kirim">
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    include("partial/footer.php");
    ?>
</body>

</html>
