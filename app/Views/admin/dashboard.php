<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>

<!-- Code Here -->

<div class="container-fluid w-100" style="padding: 60px 100px 0 100px">
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;height: 8rem; background-color:var(--color-two); filter:drop-shadow(5px 5px 5px gray)">
                <div class="card-body">
                    <table style="width:100%">
                        <tr>
                            <th>
                                <h1><i class="fa-solid fa-user" style="color:white"></i></h1>
                                <h5 class="card-title" style="color:white"><b>Account</b></h5>
                            </th>
                            <th style="text-align: center">
                            <h1 class="card-text" style="color:white"><?= $penyuluh_count + $farmers_count ?> </h1>
                            </th>
                        </tr>
                    </table>
                    <!-- <a href="/admin/event/create" class="btn btn-success" style="background-color: var(--color-three); border-color: var(--color-three)">Add New</a> -->
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;height: 8rem; background-color:var(--color-two); filter:drop-shadow(5px 5px 5px gray)">
                <div class="card-body">
                    <table style="width:100%">
                        <tr>
                            <th>
                                <h1><i class="fa-solid fa-people-roof" style="color:white"></i></h1>
                                <h5 class="card-title" style="color:white"><b>Farmers</b></h5>
                                </th>
                            <th style="text-align: center">
                                <h1 class="card-text" style="color:white"><?= $farmers_count ?> </h1>
                            </th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="card" style="width: 18rem;height: 8rem; background-color:var(--color-two); filter:drop-shadow(5px 5px 5px gray)">
            <div class="card-body">
                <table style="width:100%">
                    <tr>
                        <th>
                            <h1><i class="fa-solid fa-users-line" style="color:white"></i></h1>
                            <h5 class="card-title" style="color:white"><b>Penyuluh</b></h5>
                            </th>
                        <th style="text-align: center">
                            <h1 class="card-text" style="color:white"><?= $penyuluh_count ?> </h1>
                        </th>
                    </tr>
                </table>
            </div>
        </div>  
    </div>
</div>
</div>

<?= $this->endSection() ?>