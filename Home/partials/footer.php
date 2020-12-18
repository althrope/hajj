<footer class="ftco-footer ftco-section img">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>Website ini dibuat untuk memenuhi tugas besar mata kuliah Pemrograman Web II.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://twitter.com/bts_twt" target='blank'><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://facebook.com/ridha.edward.styles" target="blank"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://instagram.com/osw_onge" target="blank"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <?php
                $sql = "SELECT * FROM content order by create_at desc limit 2";
                $query = mysqli_query($db,$sql);
                while($row = $query->fetch_object()){
              ?>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url('images/<?=$row->photo?>');"></a>
                <div class="text">
                  <h3 class="heading"><a href="blog-single.php?id=<?=$row->id?>"> <?=$row->judul?></a></h3>
                  <div class="meta">
                    <div><a href="blog-single.php?id=<?=$row->id?>"><span class="icon-calendar"></span><?=$row->create_at?></a></div>
                    <div><a href="blog-single.php?id=<?=$row->id?>"><span class="icon-person"></span><?=$row->author?></a></div>
                  </div>
                </div>
              </div>
              <?php
                }
              ?>
            </div>
          </div>
          <div class="col-md-2">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Site Links</h2>
              <ul class="list-unstyled">
                <li><a href="index.php" class="py-2 d-block">Home</a></li>
                <li><a href="regulasi.php" class="py-2 d-block">Regulasi</a></li>
                <li><a href="publikasi.php" class="py-2 d-block">Publikasi</a></li>
                <li><a href="multimedia.php" class="py-2 d-block">Multimedia</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Contact Us</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Jalan Srijaya Negara, Palembang, Sumatera Selatan</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">0812 3456 789</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">haji@hajiindonesia.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            <p> This website is made by jj rdh spt</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>