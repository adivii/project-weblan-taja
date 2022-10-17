<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>

<!-- Code Here -->

<div class="container-fluid position-absolute w-100 h-100 p-0">
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