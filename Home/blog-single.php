<?php
  include("proses/config.php");
  include("partials/head.php");
  include("partials/navbar.php");
  $sql = "SELECT * FROM content where id=".$_GET['id'];
  $query = mysqli_query($db,$sql);
  while($row = $query->fetch_object()){
?>

    <div class="hero-wrap" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),url('images/<?=$row->photo?>');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span class="mr-2"><a href="publikasi.php">Blog</a></span> <span><?=$row->judul?></span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?=$row->judul?></h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">
          <?=$row->isi?>
          </div> <!-- .col-md-8 -->
          <div class="col-md-4 sidebar ftco-animate">
         
            <div class="sidebar-box ftco-animate">
              <h3>Recent Blog</h3>
              <?php
                $sql = "SELECT * FROM content order by create_at desc limit 3";
                $query = mysqli_query($db,$sql);
                while($row = $query->fetch_object()){
              ?>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/<?=$row->photo?>);"></a>
                <div class="text">
                  <h3 class="heading"><a href="blog-single.php?id=<?=$row->id?>"><?=$row->judul?></a></h3>
                  <div class="meta">
                    <div><a href="blog-single.php?id=<?=$row->id?>"><span class="icon-calendar"></span> <?=$row->create_at?></a></div>
                    <div><a href="blog-single.php?id=<?=$row->id?>"><span class="icon-person"></span> <?=$row->author?></a></div>
                  </div>
                </div>
              </div>
              <?php
            }
              ?>
            </div>
        </div>
      </div>
    </section> <!-- .section -->

 <?php
  }
  include("partials/footer.php");
 ?>