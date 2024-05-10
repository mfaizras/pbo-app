<?= view('template/header') ?>

<div class="page-content">
    <div class="card p-3 bg-body-tertiary">
        <h1><?= $subject['title'] ?></h1>
                        <hr>
                        <ul class="file-list">
                            <?php foreach($posts as $post): ?>
                            <li>
                                <label><strong><?= $post['title'] ?></strong></label> 
                                <p><?= $post['description'] ?></p>
                                <a href="<?= url_to('showPost',$post['id']) ?>" class="download-link">Lihat Post</a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
    </div>
</div>

<?= view('template/footer') ?> 