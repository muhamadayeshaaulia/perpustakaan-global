<?= $this->extend('layouts/home_layout') ?>

<?= $this->section('head') ?>
<title>Home</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="px-4 pt-5 my-5 text-center border-bottom">
  <h1 class="display-4 fw-bold text-body-emphasis">Library<span class="text-primary">Global</span></h1>
  <div class="col-lg-6 mx-auto">
    <p class="lead mb-4">
      Temukan buku-buku menarik untuk memperluas pengetahuan dan imajinasi Anda.
      BukuHub adalah teman setia pencinta buku dan pembelajar di mana saja, kapan saja.
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
<?= $this->endSection() ?>
