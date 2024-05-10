<?= view('template/header') ?>

<div class="main ">
    <a href="<?= url_to('addPost') ?>" class="btn btn-primary">Tambah Post</a>
    <a href="<?= url_to('adminSubject') ?>" class="btn btn-primary">Tambah Subject</a>
    <a href="<?= url_to('adminLecture') ?>" class="btn btn-primary">Tambah Dosen</a>
    <a href="<?= url_to('adminCategory') ?>" class="btn btn-primary">Tambah Kategori</a>
</div>

<?= view('template/footer') ?> 