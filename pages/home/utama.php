
<main id="main">
  <section id="services" class="services">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Layanan Kami</h2>
        <p>Layanan digital yang menyediakan Internet, Telepon Rumah dan TV Interaktif (IndiHome TV) dengan beragam pilihan paket serta layanan tambahan yang bisa dipilih sesuai kebutuhan Anda.</p>
      </div>
      <div class="row">
        <?php 
        $data = $db->query("SELECT * FROM content ORDER BY id DESC", 0);
        while($row = $data->fetch_assoc()) {
        
        ?>
          <div class="col-md-8 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" style="margin-top:10px;">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Up To <?= $row['kuota'] ?></a></h4>
              <p class="description"><?= $row['status'] ?></p>
              <p class="description">_____________________</p>
              <p class="description"><?= $row['layanansatu'] ?></p>
              <p class="description"><?= $row['layanandua'] ?></p>
              <p class="description"><?= $row['layanantiga'] ?></p>
            </div>
          </div>
        <?php } ?>
        <?php 
        $data = $db->query("SELECT * FROM tv_content ORDER BY id DESC", 0);
        while($row = $data->fetch_assoc()) {
          ?>
          <div class="col-md-8 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" style="margin-top:10px;">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href=""><?= $row['nama_tv'] ?></a></h4>
              <p class="description">_____________________</p>
              <p class="description"><?= $row['layanan_tv'] ?> Gratis <br>selama berlangganan</p>
            </div>
          </div>
        <?php } ?>
        <?php 
        $data = $db->query("SELECT * FROM telepon_content ORDER BY id DESC", 0);
        while($row = $data->fetch_assoc()) {
          ?>
          <div class="col-md-8 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" style="margin-top:10px;">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href=""><?= $row['nama_telepon'] ?></a></h4>
              <p class="description">_____________________</p>
              <p class="description"><?= $row['layanan_telepon'] ?> Gratis <br>ke semua  operator</p>
            </div>
          </div>
        <?php } ?>
      </div>            
    </div>
  </section>
  <section id="more-services" class="more-services">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Jenis Produk</h2>
        <p>Beberapa Jenis Yang Kami Tawarkan</p>
      </div>
      <div class="row">
        <div class="col-md-6 d-flex align-items-stretch">
          <div class="card" style='background-image: url("assets/img/more-services-1.jpg");' data-aos="fade-up" data-aos-delay="100">
            <div class="card-body">
              <h5 class="card-title"><a href="">Internet</a></h5>
              <p class="card-text">Akses internet broadband cepat hingga 300 Mbps.</p>
              <div class="read-more"><a href="index.php?m=produk&s=internet"><i class="icofont-arrow-right"></i> Lihat Lebih Lanjut</a></div>
            </div>
          </div>
        </div>
        <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="card" style='background-image: url("assets/img/tv.jpg");' data-aos="fade-up" data-aos-delay="200">
            <div class="card-body">
              <h5 class="card-title"><a href="">TV</a></h5>
              <p class="card-text">Nikmati fitur menarik seperti Pause & Rewind, VoD dan lain-lain.</p>
              <div class="read-more"><a href="index.php?m=produk&s=tv"><i class="icofont-arrow-right"></i> Lihat Lebih Lanjut</a></div>
            </div>
          </div>
        </div>
        <div class="col-md-6 d-flex align-items-stretch mt-4">
          <div class="card" style='background-image: url("assets/img/more-services-3.jpg");' data-aos="fade-up" data-aos-delay="100">
            <div class="card-body">
              <h5 class="card-title"><a href="">Telepon</a></h5>
              <p class="card-text">Bebas nelpon hingga 1000 menit sesuai pilihan paket.</p>
              <div class="read-more"><a href="index.php?m=produk&s=telepon"><i class="icofont-arrow-right"></i> Lihat Lebih Lanjut</a></div>
            </div>
          </div>
        </div>
        <div class="col-md-6 d-flex align-items-stretch mt-4">
          <div class="card" style='background-image: url("assets/img/paket.jpg");' data-aos="fade-up" data-aos-delay="100">
            <div class="card-body">
              <h5 class="card-title"><a href="">Paket</a></h5>
              <p class="card-text">Pilih layanan IndiHome yang anda inginkan untuk melengkapi kebutuhan anda.</p>
              <div class="read-more"><a href="index.php?m=produk&s=paket"><i class="icofont-arrow-right"></i> Lihat Lebih Lanjut</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>