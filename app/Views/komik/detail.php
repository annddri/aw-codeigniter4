<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/img/<?= $komik['sampul']; ?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $komik['judul']; ?></h5>
        <p class="card-text"><b>Penulis: </b><?= $komik['penulis']; ?></p>
        <p class="card-text"><small class="text-body-secondary"><b>Penerbit: </b> <?= $komik['penerbit']; ?></small></p>
        <a href="" class="btn text-bg-warning">Edit</a>
        <a href="" class="btn text-bg-danger">Delete</a>
        <br> <br>
        <a href="/komik">Kembali ke halaman utama</a>
      </div>


      
    </div>
  </div>
</div>

<?= $this->endSection(); ?>