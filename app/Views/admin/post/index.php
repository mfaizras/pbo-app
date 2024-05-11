<?= view('template/header') ?>

<div class="main">
    <div class="card p-3">
      <div class="d-flex flex-row-reverse">
        <a href="<?= url_to('addPost') ?>" class="btn btn-primary">Tambah Post</a>
      </div>
    <table class="table">
  <thead>
    <tr>
      <th>Title</th>
      <th>Desctiption</th>
      <th>Subject</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($posts as $post): ?>
    <tr>
      <td><?= $post->title ?></td>
      <td><?= $post->description ?></td>
      <td><?= $post->subject ?></td>
      <td>
        <a href="<?= url_to('adminPostDelete',$post->id) ?>" class="btn btn-danger" >Delete</a>
        <a href="<?= url_to('adminPostEdit',$post->id) ?>" class="btn btn-info">Edit</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
    </div>
</div>

<?= view('template/footer') ?> 