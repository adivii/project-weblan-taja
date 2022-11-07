<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>

<!-- Code Here -->

<div class="container-fluid w-100" style="padding: 60px 100px 0 100px">
    <table class="table">
        <thead style="background-color: var(--color-three); color: white;">
            <tr>
                <th scope="col">Judul</th>
                <th scope="col">Waktu</th>
                <th scope="col">Tempat</th>
                <th scope="col">Operasi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($events as $event) { ?>
                <tr>
                    <td><?= $event['judul_event'] ?></td>
                    <td><?= date_format(date_create($event['waktu_event']), "d F Y, H:i") . " WIB" ?></td>
                    <td><?= $event['tempat_event'] ?></td>
                    <td>
                        <button type="button" class="btn btn-primary card-text-font\" onClick=""><i class="fa-solid fa-pen-to-square"></i>Edit</button>
                        <form action="/admin/event/delete/<?= $event['id'] ?>" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i>Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>