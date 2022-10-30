<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>

<!-- Code Here -->

<div class="container-fluid w-100" style="padding: 60px 100px 0 100px">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Upcoming Event</h5>
            <p class="card-text"><?= $events_count ?> events</p>
        </div>
    </div>
</div>

<?= $this->endSection() ?>