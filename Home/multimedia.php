<?php
  include("partials/head.php");
  include("partials/navbar.php");
  include("proses/config.php");
?>
    
    <div class="hero-wrap" style="background-image: url('images/gb.4.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>Multimedia</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Multimedia</h1>
          </div>
        </div>
      </div>
    </div>

    
    <section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3"> 
          <div class="col-md-40 heading-section ftco-animate text-justify">
            <h2 class="mb-4 text-center">Galeri Kami</h2>
            <p>Galeri Haji Indonesia</p> <br>
        </div>
    </div>
    <div class="d-md-flex">
    <?php
        $sql = "SELECT * FROM content";
        $query = mysqli_query($db,$sql);
        $i = 0;
        while($row=$query->fetch_object()){
            if($i % 4 == 0){
                    ?>
                        </div>
                        <div class="d-md-flex">
                    <?php
            }
    ?>
	    	<a href="images/<?=$row->photo?>" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/<?=$row->photo?>);">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
    <?php
        
        $i++;
        }
    ?>
    </div>
    </section>

<?php
  include("partials/footer.php");
?>