<?= $this->extend('templates/template') ?>

<?= $this->section('header') ?>

<!-- include libraries(jQuery, bootstrap) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<?= $this->endSection() ?>
<?= $this->section('content') ?>

<!-- Code Here -->

<div class="container-fluid w-100" style="padding: 60px 100px 0 100px">
    <form action="/tutorial/save/<?= session()->get('level') ?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="judul_tutorial" class="form-label">Judul</label>
            <input type="text" class="form-control" name="judul_tutorial" id="judul_tutorial" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="content_tutorial">Content</label>
            <textarea id="summernote" class="form-control" name="content_tutorial" id="content_tutorial"></textarea>
        </div>
        <div class="mb-3">
            <label for="cover_image">Cover</label>
            <input type="file" class="form-control" name="cover_image" id="cover_image" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 300
        });
    });
</script>

<?= $this->endSection() ?>