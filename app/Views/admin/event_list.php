<?= $this->extend('templates/admin_template') ?>

<?= $this->section('content') ?>

<!-- Code Here -->

<div class="container-fluid w-100" style="padding: 60px 100px 0 100px">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Judul</th>
                <th scope="col">Waktu</th>
                <th scope="col">Tempat</th>
                <th scope="col">Operasi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>