<!-- <?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<h1>Form Tambah Data Komik</h1>
<form action="/komik/save" method="post" class="formTambah">
    <?= @csrf_field(); ?>
    <div class="mb-3">
      <label for="judul" class="form-label">Judul</label>
      <input type="text" class="form-control" id="judul" name="judul">
    </div>
    <div class="mb-3">
      <label for="penulis" class="form-label">Penulis</label>
      <input type="text" class="form-control" id="penulis" name="penulis">
    </div>
    <div class="mb-3">
      <label for="penerbit" class="form-label">Penerbit</label>
      <input type="text" class="form-control" id="penerbit" name="penerbit">
    </div>
    <div class="mb-3">
      <label for="sampul" class="form-label">Sampul</label>
      <input type="text" class="form-control" id="sampul" name="sampul">
    </div>
    <button type="submit" class="btn text-bg-primary mt-2">Tambah Data</button>
</form>

<?= $this->endSection(); ?> -->

<?php 
session_start();
session_unset();
$_SESSION = [];
session_abort();

return redirect()->to('/komik');
?>


