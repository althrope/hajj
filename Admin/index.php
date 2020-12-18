<?php
session_start();
$act=1;
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
        <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Data Pendaftar</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Tables</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Data Tables Pendaftar</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Data Pendaftar</h5>
                        <div class="ibox-tools">
                            <a href="tambah_pendaftar.php" class="btn btn-success">Tambah Pendaftar</a>
                        </div>
                    </div>
                    
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Usia</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>No. KTP</th>
                        <th>No. Paspor</th>
                        <th>Size Baju</th>
                        <th>Tipe Haji</th>
                        <th>Photo</th>
                        <th>Tanggal Daftar</th>
                        <th>Option</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sql = "SELECT * FROM pendaftar";
                        $query = mysqli_query($db, $sql);
                        $i=1;
                        foreach ($query as $key) {
                    ?>
                    <tr class="gradeX">
                        <td><?=$i++?></td>
                        <td><?=$key['nama']?></td>
                        <td><?=$key['email']?></td>
                        <td><?=$key['usia']?></td>
                        <td><?=$key['jk']?></td>
                        <td><?=$key['alamat']?></td>
                        <td><?=$key['nope']?></td>
                        <td><?=$key['noktp']?></td>
                        <td><?=$key['nopaspor']?></td>
                        <td><?=$key['size_baju']?></td>
                        <td><?=$key['tipe_haji']?></td>
                        <td><img src="../Home/images/<?=$key['photo']?>" style="width:100px"></td>
                        <td><?=$key['create_at']?></td>
                        <td><a href="edit_pendaftar.php?id=<?=$key['id']?>" class="btn btn-success">Edit</a><a href="proses/hapus_daftar.php?id=<?=$key['id']?>" class="btn btn-danger">Hapus</a></td>
                    </tr>
                    <?php
                          }
                    ?>
                    </tbody>
                    <tfoot>
                    <tr>
                    <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Usia</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>No. KTP</th>
                        <th>No. Paspor</th>
                        <th>Size Baju</th>
                        <th>Tipe Haji</th>
                        <th>Photo</th>
                        <th>Tanggal Daftar</th>
                        <th>Option</th>
                    </tr>
                    </tfoot>
                    </table>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </div>
        
        <?php
    include("partial/footer.php");
    ?>