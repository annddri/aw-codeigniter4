<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<a href="/komik/create" class="btn text-bg-primary mt-3">Tambah Data Komik</a>

<h1>Daftar Komik</h1>

<?php if (session()->getFlashdata('pesan')) : ?>
  <div class="alert alert-success" role="alert">
    <?= session()->getFlashdata('pesan'); ?>
  </div>
<?php endif; ?>

<table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama Komik</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php foreach ($komik as $k ) : ?>
    <tr>
      <td scope="row"><?= $i++; ?></td>
      <td><img src="/img/<?= $k['sampul']; ?>" class="sampul"></td>
      <td><?= $k['judul']; ?></td>
      <td>
        <a href="/komik/<?= $k['slug']; ?>" class="btn text-bg-success text-decoration-none">Detail</a>
      </td>
    </tr>
  hpdy>
  <?php endforeach ?>
</table>
<?= $this->endSection(); ?>