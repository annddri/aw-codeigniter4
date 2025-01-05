<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<h1>Daftar Komik</h1>

<table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama Komik</th>
      <th scope="col">Harga</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php foreach ($komik as $k ) : ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><img src="img/<?= $k['sampul']; ?>" class="sampul"></td>
      <td><?= $k['judul']; ?></td>
      <td>
        <a href="" class="btn text-bg-success text-decoration-none">Detail</a>
      </td>
    </tr>
  </tbody>
  <?php endforeach ?>
</table>
<?= $this->endSection(); ?>