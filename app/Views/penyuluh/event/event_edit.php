<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>

<!-- Code Here -->

<div class="container-fluid w-100" style="padding: 60px 100px 0 100px">
    <form action="/event/update/<?= $event['id'] ?>" method="POST">
        <div class="mb-3">
            <label for="judul_event" class="form-label">Judul</label>
            <input type="text" class="form-control" name="judul_event" id="judul_event" value="<?= $event['judul_event'] ?>" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="waktu_event" class="form-label">Waktu</label>
            <input type="date" class="form-control" name="waktu_event" id="waktu_event" min="<?= date('Y-m-d') ?>" value="<?= $event['waktu_event'] ?>">
        </div>
        <div class="mb-3">
            <label for="tempat_event">Tempat</label>
            <textarea class="form-control" name="tempat_event" id="tempat_event"><?= $event['tempat_event'] ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?= $this->endSection() ?>