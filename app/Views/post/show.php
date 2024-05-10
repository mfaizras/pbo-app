<?= view('template/header') ?>

<div class="main">
    <div class="card p-5 bg-body-secondary">
        <h1><?= $post['title'] ?></h1>
        <p><?= $post['description'] ?></p>

        <?php if(!empty($files)): ?>
            <h5>File dan Asset</h5>
            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">         
            <?php foreach($files as $file): ?>
                    <a href="<?= $file['filelink'] ?>" class="btn btn-primary"><i class="fa-solid fa-download"></i> <?= $file['filename'] ?></a>
            <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<?= view('template/footer') ?> 