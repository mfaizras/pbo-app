<?= view('template/header') ?>

<div class="main">
    <div class="row g">   
        <div class="col-lg-4 col-6 p-3"><a href="<?= url_to('adminUser') ?>" class="btn btn-primary container-fluid">User Manager</a></div>
        <div class="col-lg-4 col-6 p-3"><a href="<?= url_to('adminPost') ?>" class="btn btn-primary container-fluid">Post Manager</a></div>
        <div class="col-lg-4 col-6 p-3"><a href="<?= url_to('adminSubject') ?>" class="btn btn-primary container-fluid">Subject Manager</a></div>
        <div class="col-lg-4 col-6 p-3"><a href="<?= url_to('adminLecture') ?>" class="btn btn-primary container-fluid">Lecture Manager</a></div>
        <div class="col-lg-4 col-6 p-3"><a href="<?= url_to('adminCategory') ?>" class="btn btn-primary container-fluid">Category Manager</a></div>
    </div>
</div>

<?= view('template/footer') ?> 