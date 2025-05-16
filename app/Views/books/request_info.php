<?= $this->extend('layouts/home_layout') ?>

<?= $this->section('head') ?>
<title>Informasi Buku</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container text-center mt-5">
    <h1 class="display-4">⚠️ Halaman Tidak Tersedia</h1>
    <p class="lead mt-3">Silakan hubungi petugas yang sedang berjaga untuk meminjam buku pilihan kamu.</p>
    <a href="<?= base_url(); ?>" class="btn btn-outline-primary mt-4">
        <i class="ti ti-home"></i> Kembali ke Beranda
    </a>
</div>
<?= $this->endSection() ?>
