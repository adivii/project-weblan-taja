<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>

<!-- Code Here -->

<div class="container-fluid w-100" style="padding: 60px 100px 0 100px">
    <form>
        <div class="mb-3">
            <label for="judul_event" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul_event" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="waktu_event" class="form-label">Waktu</label>
            <input type="date" class="form-control" id="waktu_event">
        </div>
        <div class="mb-3">
            <textarea class="form-control" id="tempat_event"></textarea>
            <label for="tempat_event">Tempat</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?= $this->endSection() ?>