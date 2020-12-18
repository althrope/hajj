<?php
  include("proses/config.php");
  include("partials/head.php");
  include("partials/navbar.php");
?>
    
    <div class="hero-wrap" style="background-image: url('images/gb.7.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>Publikasi</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Publikasi</h1>
          </div>
        </div>
      </div>
    </div>

    
    <!-- <section class="ftco-section">
      <div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-5 heading-section ftco-animate text-center">
            <h2 class="mb-4">INFO</h2>
            <p>Info Terkini Pemberangkatan Haji <script>document.write(new Date().getFullYear());</script></p>
          </div>
        </div>
      	<div class="row">
      		<div class="col-md-4 ftco-animate">
      			<div class="cause-entry">
    					<a href="#" class="img" style="background-image: url(images/icon.png);"></a>
    					<div class="text p-3 p-md-4">
    						<h3><a href="#">Pemberangkatan Jemaah Haji 2019</a></h3>
    						<p>Kita berangkat guys.</p>
                <div class="progress custom-progress-success">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
    					</div>
    				</div>
      		</div>      
      </div>
      <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
    </section> -->

    <section class="ftco-section">
    <div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-5 heading-section ftco-animate text-center">
            <h2 class="mb-4">BERITA TERKINI</h2>
            <p>Berita Terkait Ibadah Haji dan Umrah <script>document.write(new Date().getFullYear());</script></p>
          </div>
        </div>
      <div class="container">
        <div class="row d-flex">
        <?php
          $sql = "SELECT * FROM content order by create_at desc";
          $query = mysqli_query($db,$sql);
          while($row = $query->fetch_object()){
        ?>
        <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.php?id=<?=$row->id?>" class="block-20" style="background-image: url('images/<?=$row->photo?>');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#"><?=$row->create_at?></a></div>
                  <div><a href="#"><?=$row->author?></a></div>
                </div>
                <h3 class="heading mt-3"><a href="blog-single.php?id=<?=$row->id?>"><?=$row->judul?></a></h3>
                <p><?=$row->deskripsi?></p>
                <p><a href="blog-single.php?id=<?=$row->id?>">See more <i class="ion-ios-arrow-forward"></i></a></p>
              </div>
            </div>
          </div>
          <?php
            }
          ?>
        <!-- <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div> -->
      </div>
    </section>

<?php
  include("partials/footer.php");
?>