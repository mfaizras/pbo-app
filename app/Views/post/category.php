<?= view('template/header') ?>

<div class="page-wrapper">
                <div class="page-content">
                    <h2 class="page-header text-uppercase">DAFTAR <?= $categories['title']; ?></h2>
                    <?php $count = 0; foreach($posts as $post): ?>
                    <a href="<?= url_to('postBySubject',$post['id']) ?>" class="<?php if($count < count($color)) {
                    echo $color[$count];
                    $count++;
                    } else {
                        $count = 0;
                        echo $color[$count];
                    }
                    ?>">
                        <?= $post['title'] ?> (<?= $post['lecturer_name'] ?>)
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>

<?= view('template/footer') ?> 