<?= $this->extend('templates/template') ?>

<?= $this->section('head') ?>
<link rel="stylesheet" href="/assets/styles/about.css">
<?= $this->endSection() ?>

<?= $this->section('content') ?>


<section class="vh-100" style="background-color: var(--color-two);">
  <div class="container-fluid py-5 h-100 w-100" style="overflow-y: scroll;">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-width : 0;border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block" style="border-radius: 1rem 0 0 1rem;background:url('/assets/images/background-home.jpeg') no-repeat;background-position: -1050px 0;background-size: cover;">
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="/penyuluh/save" method="POST">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <img class="mx-auto d-block" src="/assets/images/taja-logo.png" height="130px">
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Tambahkan Penyuluh</h5>
                  <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <h4>Check your entries</h4>
                      </hr />
                      <?php echo session()->getFlashdata('error'); ?>
                    </div>
                  <?php endif; ?>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="username">Username</label>
                    <input type="text" id="username" name="username" class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="password-re">Konfirmasi Password</label>
                    <input type="password" id="password-re" name="password-re" class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="nik">NIK</label>
                    <input type="number" id="nik" name="nik" class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="nama-lengkap">Nama Lengkap</label>
                    <input type="text" id="nama-lengkap" name="nama-lengkap" class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="nomor-telepon">Nomor Telepon</label>
                    <input type="number" id="nomor-telepon" name="nomor-telepon" class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="wkpp">Wilayah Kerja</label>
                    <input type="text" id="wkpp" name="wkpp" class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" rows="3" class="form-control form-control-lg"></textarea>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="tanggal-lahir">Tanggal Lahir</label>
                    <input type="date" id="tanggal-lahir" name="tanggal-lahir" max="<?= date('Y-m-d') ?>" class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="pendidikan-terakhir">Pendidikan Terakhir</label>
                    <select class="form-select" name="pendidikan-terakhir" id="pendidikan-terakhir">
                      <option selected value="0">Pilih Salah Satu</option>
                      <option value="sma">SMA/SMK</option>
                      <option value="s1">S1</option>
                      <option value="s2">S2</option>
                      <option value="s3">S3</option>
                    </select>
                  </div>

                  <div class="pt-1 mb-4">
                    <input class="btn btn-dark btn-lg btn-block" type="submit" value="Register">
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>