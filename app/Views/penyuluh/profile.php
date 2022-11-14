<?= $this->extend('templates/template') ?>

<?= $this->section('head') ?>
<link rel="stylesheet" href="/assets/styles/about.css">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="container-fluid py-5 w-100 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
            <div class="card w-100" style="width: 18rem;">
                <div class="card-body">
                    <h3 class="card-title" style="color: var(--color-three);font-weight: bold;">Profil Penyuluh</h3>
                    <p class="card-text">
                        <div class="mb-3">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="text" class="form-control" name="" id="nik" value="<?= $profile['nik'] ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="nama-lengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="" id="nama-lengkap" value="<?= $profile['nama_lengkap'] ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="nomor-telepon" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" name="" id="nomor-telepon" value="<?= $profile['nomor_telepon'] ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="wkkp" class="form-label">Wilayah Kerja</label>
                            <input type="text" class="form-control" name="" id="wkpp" value="<?= $profile['wkpp'] ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="" id="alamat" value="<?= $profile['alamat'] ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal-lahir" class="form-label">Tanggal Lahir</label>
                            <input type="text" class="form-control" name="" id="tanggal-lahir" value="<?= date_format(date_create($profile['tanggal_lahir']), 'd F Y') ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="pendidikan-terakhir" class="form-label">Pendidikan Terakhir</label>
                            <input type="text" class="form-control" name="" id="pendidikan-terakhir" value="<?= $profile['pendidikan_terakhir'] ?>" readonly>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>