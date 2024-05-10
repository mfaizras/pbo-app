<?= view('template/header') ?>

<div class="main">
    <div class="recent-post">
        <?php foreach($posts as $post): ?>
            <div class="post">
                <h4><a href="#"><?= $post->title ?></a></h4>
                <p class="fst-italic"><?= $post->subject ?> - <?= $post->lecturer_name ?></p>
            </div>
        <?php endforeach;  ?>
    </div>
</div>

<?= view('template/footer') ?> 