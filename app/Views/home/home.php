<?= $this->extend('layouts/home_layout') ?>

<?= $this->section('head') ?>
<title>Home</title>
<style>
  .whatsapp-icon {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #25d366;
    border-radius: 50%;
    padding: 15px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    z-index: 1000;
  }
  .whatsapp-icon img {
    width: 40px;
    height: 40px;
  }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="px-4 pt-5 my-5 text-center border-bottom">
  <h1 class="display-4 fw-bold text-body-emphasis">Library<span class="text-primary">Global</span></h1>
  <div class="col-lg-6 mx-auto">
    <p class="lead mb-4">
      Temukan buku-buku menarik untuk memperluas pengetahuan dan imajinasi Anda.
      LibraryGlobal adalah teman setia pencinta buku dan pembelajar di mana saja, kapan saja.
    </p>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
      <!--<a href="<?= base_url('login'); ?>" class="btn btn-primary btn-lg px-4 me-sm-3">Login petugas</a>-->
      <a href="<?= base_url('book'); ?>" class="btn btn-outline-secondary btn-lg px-4">Daftar buku</a>
    </div>
  </div>

  <!-- Carousel dengan tombol navigasi -->
  <div class="container px-5">
    <div id="carouselImages" class="carousel slide mb-5" data-bs-ride="carousel">
      <!-- Slide indikator -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselImages" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselImages" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselImages" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <!-- Isi carousel -->
      <div class="carousel-inner rounded-3 shadow-lg">
        <div class="carousel-item active">
          <img src="<?= base_url('assets/images/dashboard.jpg'); ?>" class="d-block w-100" alt="Gambar 1">
        </div>
        <div class="carousel-item">
          <img src="<?= base_url('assets/images/dashboard2.jpg'); ?>" class="d-block w-100" alt="Gambar 2">
        </div>
        <div class="carousel-item">
          <img src="<?= base_url('assets/images/dashboard3.jpg'); ?>" class="d-block w-100" alt="Gambar 3">
        </div>
      </div>

      <!-- Tombol navigasi kiri -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselImages" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
        <span class="visually-hidden">Sebelumnya</span>
      </button>

      <!-- Tombol navigasi kanan -->
      <button class="carousel-control-next" type="button" data-bs-target="#carouselImages" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
        <span class="visually-hidden">Berikutnya</span>
      </button>
    </div>
  </div>
</div>

<!-- WhatsApp Icon -->
<div class="whatsapp-icon">
  <a href="https://wa.me/6285174145156?text=Halo%20admin%2C%20saya%20mau%20pinjam%20buku.%20Bagaimana%20ya%20caranya%3F" target="_blank">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
  </a>
</div>


<?= $this->endSection() ?>
