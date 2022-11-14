<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>

<!-- Code Here -->

<div class="container-fluid w-100" style="padding: 60px 100px 0 100px">
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;height: 100%; background-color:var(--color-five); filter:drop-shadow(5px 5px 5px gray)">
                <div class="card-body">
                <table style="width: 100%; height: 100%">
                        <tr>
                            <th><h1><i class="fa-regular fa-calendar-days"></i></h1></th>
                            <th></th>
                        </tr>
                        <tr>
                            <td><h5 class="card-title">Upcoming Events</h5></td>
                            <td style="text-align: center"><h1 class="card-text"><?= $events_count ?></h1></td>
                        </tr>
                        <tr>
                            <td><a href="/event/create" class="btn btn-success" style="background-color: black; border-color: black">Add New</a></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;height: 100%; background-color:var(--color-five); filter:drop-shadow(5px 5px 5px gray)">
                <div class="card-body">
                    <table style="width: 100%; height: 100%">
                            <tr>
                                <th><h1><i class="fa-solid fa-people-roof"></i></h1></th>
                                <th></th>
                            </tr>
                            <tr>
                                <td><h5 class="card-title">Active Farmers</h5></td>
                                <td style="text-align: center"><h1 class="card-text"><?= $farmers_count ?></h1></td>
                            </tr>
                            <tr>
                                <td><a href="/event/create" class="btn btn-success" style="background-color: var(--color-five); border-color: var(--color-five); color: var(--color-five)">A</a></td>
                                <td></td>
                            </tr>
                        </table>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;height: 100%; background-color:var(--color-five); filter:drop-shadow(5px 5px 5px gray)">
                <div class="card-body">
                <table style="width: 100%; height: 100%">
                            <tr>
                                <th><h1><i class="fa-solid fa-note-sticky"></i></h1></th>
                                <th></th>
                            </tr>
                            <tr>
                                <td><h5 class="card-title">Tutorial</h5></td>
                                <td style="text-align: center"><h1 class="card-text"><?= $farmers_count ?></h1></td>
                            </tr>
                            <tr>
                                <td><a href="/event/create" class="btn btn-success" style="background-color: var(--color-five); border-color: var(--color-five); color: var(--color-five)">A</a></td>
                                <td></td>
                            </tr>
                        </table>

                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>