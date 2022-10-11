<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>

<!-- Code Here -->

<div class="container-fluid position-absolute w-100 h-100" style="background:url('assets/images/background-home.jpeg') no-repeat;background-position: center;">
    <div class="container-fluid w-100 h-100 position-absolute top-0 start-0" style="backdrop-filter: brightness(50%);"></div>
    <div class="card position-relative top-50 start-50 translate-middle w-50 text-center" style="border: none;background: transparent;color: white;">
        <div class="card-body">
            <h5 class="card-title" style="font-size: 24pt;font-weight: bold;">UNTUK PERTANIAN TANGGAMUS</h5>
            <p class="card-text">Petani Mandiri, Pertanian Maju, Tanggamus Jaya</p>
        </div>
    </div>
</div>

<?= $this->endSection() ?>