<?= $this->extend('templates/template') ?>

<?= $this->section('head') ?>
<link rel="stylesheet" href="/assets/styles/about.css">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<script>
    let status_editing = false;

    function toggle_editing() {
        // document.getElementById('nik').disabled = status_editing;
        $(".profile-input").attr('disabled', status_editing);
        $("#btn-save").attr('hidden', status_editing);
        $("#btn-edit").attr('hidden', !status_editing);
        status_editing = !status_editing;
    }
</script>
<div class="container-fluid py-5 w-100 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
            <div class="card w-100" style="width: 18rem;">
                <div class="card-body">
                    <h3 class="card-title" style="color: var(--color-three);font-weight: bold;">Profil Penyuluh</h3>
                    <p class="card-text">
                    <form action="/penyuluh/profile/<?= session()->get('user') ?>/update" method="post">
                        <div class="mb-3">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="number" class="form-control profile-input" name="nik" id="nik" value="<?= $profile['nik'] ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="nama-lengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control profile-input" name="nama-lengkap" id="nama-lengkap" value="<?= $profile['nama_lengkap'] ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="nomor-telepon" class="form-label">Nomor Telepon</label>
                            <input type="number" class="form-control profile-input" name="nomor-telepon" id="nomor-telepon" value="<?= $profile['nomor_telepon'] ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="wkkp" class="form-label">Wilayah Kerja</label>
                            <input type="text" class="form-control profile-input" name="wkpp" id="wkpp" value="<?= $profile['wkpp'] ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea name="alamat" id="alamat" rows="3" class="form-control profile-input" disabled><?= $profile['alamat'] ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal-lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control profile-input" name="tanggal-lahir" max="<?= date('Y-m-d') ?>" id="tanggal-lahir" value="<?= $profile['tanggal_lahir'] ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="pendidikan-terakhir" class="form-label">Pendidikan Terakhir</label>
                            <select class="form-select profile-input" name="pendidikan-terakhir" id="pendidikan-terakhir" disabled>
                                <option selected value="0">Pilih Salah Satu</option>
                                <option value="sma" <?php if ($profile['pendidikan_terakhir'] === 'sma') {
                                                        echo 'selected';
                                                    } ?>>SMA/SMK</option>
                                <option value="s1" <?php if ($profile['pendidikan_terakhir'] === 's1') {
                                                        echo 'selected';
                                                    } ?>>S1</option>
                                <option value="s2" <?php if ($profile['pendidikan_terakhir'] === 's2') {
                                                        echo 'selected';
                                                    } ?>>S2</option>
                                <option value="s3" <?php if ($profile['pendidikan_terakhir'] === 's3') {
                                                        echo 'selected';
                                                    } ?>>S3</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <button type="button" class="btn btn-success" id="btn-edit" onclick="toggle_editing()">Edit</button>
                            <button type="submit" class="btn btn-success" id="btn-save" hidden>Save</button>
                        </div>
                    </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>