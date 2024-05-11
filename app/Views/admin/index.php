<?= view('template/header') ?>

<div class="main">
    <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3 gap-3">   
        <a href="<?= url_to('adminUser') ?>" class="btn btn-primary">User Manager</a>
        <a href="<?= url_to('addPost') ?>" class="btn btn-primary">Tambah Post</a>
        <a href="<?= url_to('adminSubject') ?>" class="btn btn-primary">Tambah Subject</a>
        <a href="<?= url_to('adminLecture') ?>" class="btn btn-primary">Tambah Dosen</a>
        <a href="<?= url_to('adminCategory') ?>" class="btn btn-primary">Tambah Kategori</a>
    </div>
</div>

<?= view('template/footer') ?> 