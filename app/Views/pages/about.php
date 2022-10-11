<?= $this->extend('templates/template') ?>

<?= $this->section('head') ?>
<link rel="stylesheet" href="assets/styles/about.css">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Code Here -->

<div class="container-fluid position-absolute w-100 h-100 p-0">
    <!-- <div class="container-fluid w-100 h-100 p-0 position-absolute top-0 left-0" style="background:url('assets/images/background-not-found.jpg') no-repeat;background-position: center;">
        <div class="container-fluid w-100 h-100 top-0 start-0" style="backdrop-filter: brightness(100%);"></div>
    </div>
    <div class="container-fluid w-100 h-100 p-0 position-absolute top-0 left-0" style="background-image: linear-gradient(to right, rgba(0,0,0,0.25), rgba(0,0,0,0.5), rgba(0,0,0,0.75), rgba(0,0,0,0.95), rgba(0,0,0,0.95), black);">
        
    </div> -->
    <div class="row w-100 h-100">
        <div class="col p-0">
            <div class="container-fluid w-100 h-100 p-0" style="background:url('assets/images/background-not-found.jpg') no-repeat;background-position: center;">
                <div class="container-fluid w-100 h-100" style="backdrop-filter: brightness(50%);"></div>
            </div>
        </div>
        <div class="col p-0">
            <div class="container-fluid w-100 h-100" style="background-color: var(--color-three);padding: 80px 80px">
                <img class="mx-auto d-block" src="assets/images/taja-logo-light.png" height="130px">
                <p style="color: white;">
                    TAJA dirancang sebagai sebuah media informasi yang dapat digunakan oleh para petani
                    di Kabupaten Tanggamus untuk mempelajari berbagai teknik pertanian guna meningkatkan
                    hasil pertanian. Disini, kami memberikan wadah untuk pelatihan dan panduan tentang cara menanam
                    yang memberikan hasil terbaik, penggunaan pupuk yang tepat guna memaksimalkan hasil,
                    pemilihan bibit yang unggul, dan lain-lain.
                </p>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>