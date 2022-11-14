<?= $this->extend('templates/template') ?>

<?= $this->section('head') ?>
<link rel="stylesheet" href="/assets/styles/about.css">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<input type="text" name="" id="" value="<?= $profile['nik'] ?>" readonly>
<input type="text" name="" id="" value="<?= $profile['nama_lengkap'] ?>" readonly>
<input type="text" name="" id="" value="<?= $profile['nomor_telepon'] ?>" readonly>
<input type="text" name="" id="" value="<?= $profile['wkpp'] ?>" readonly>
<input type="text" name="" id="" value="<?= $profile['alamat'] ?>" readonly>
<input type="text" name="" id="" value="<?= date_format(date_create($profile['tanggal_lahir']), 'd F Y') ?>" readonly>
<input type="text" name="" id="" value="<?= $profile['pendidikan_terakhir'] ?>" readonly>

<?= $this->endSection() ?>