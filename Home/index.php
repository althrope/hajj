<?php
  include("proses/config.php");
  include("partials/head.php");
  include("partials/navbar.php");
?>
  
    
    <div class="hero-wrap" style="background-image: url('images/gb.2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Selamat Datang di Website Haji Indonesia</h1>
            <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Created by JJ SPT RDH</p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-counter ftco-intro" id="section-counter">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-5 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-1 align-items-stretch">
              <div class="text">
              	<span>Telah Melayani</span>
                <strong class="number" data-number="14328056">0</strong>
                <span>Jemaah di 190 kota di Indonesia</span>
              </div>
            </div>
          </div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-donation-1"></span></div>
              <div class="media-body pl-4">
                <h3 class="heading">Calon Jemaah Haji</h3>
                <p>Daftar segera dan jadilah salah satu calon jemaah haji selanjutnya.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-charity"></span></div>
              <div class="media-body pl-4">
                <h3 class="heading">Mitra Haji</h3>
                <p>Jadilah salah satu mitra penyelenggaraan perjalanan ibadah haji Indonesia.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-donation"></span></div>
              <div class="media-body pl-4">
                <h3 class="heading">Infaq</h3>
                <p> Mrilah kita mengeluarkan sebagian dari harta atau pendapatan/penghasilan untuk membantu sesama</p>
              </div>
            </div>    
          </div>
        </div>
    	</div>
    </section>


    <!-- <section class="ftco-section bg-light">
    	<div class="container-fluid">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-5 heading-section ftco-animate text-center">
            <h2 class="mb-4">INFO</h2>
            <p>Info Terkini Pemberangkatan Haji <script>document.write(new Date().getFullYear());</script></p>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="carousel-cause owl-carousel">
            <?php

            ?>
	    				<div class="item">
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
    			</div>
    		</div>
    	</div>
    </section> -->

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Recent from blog</h2>
          </div>
        </div>
        <div class="row d-flex">
        <?php
          $sql = "SELECT * FROM content order by create_at desc limit 3";
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
        </div>
      </div>
    </section>

  <?php
    include("partials/footer.php");
  ?>