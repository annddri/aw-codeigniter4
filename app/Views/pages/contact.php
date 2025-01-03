<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<h1>Contact Us</h1>

<?php foreach($tes2 as $tes) :  ?>
<ul>
    <li><?= $tes['tipe']; ?></li>
    <li><?= $tes['alamat']; ?></li>
    <li><?= $tes['kota']; ?></li>
</ul>
<?php endforeach; ?>

<?= $this->endSection(); ?>