<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>

<!-- Code Here -->

<div class="container-fluid w-100" style="padding: 60px 100px 0 100px">
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;height: 10rem;">
                <div class="card-body">
                    <h5 class="card-title">Upcoming Events</h5>
                    <p class="card-text"><?= $events_count ?> events</p>
                    <a href="#" class="btn btn-success">Add New</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;height: 10rem;">
                <div class="card-body">
                    <h5 class="card-title">Active Farmers</h5>
                    <p class="card-text"><?= $farmers_count ?> farmers</p>
                </div>
            </div>
        </div>
        <div class="col"></div>
        <div class="col"></div>
    </div>
</div>

<?= $this->endSection() ?>