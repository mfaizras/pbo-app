<?= view('template/header') ?>

<div class="main">
    <div class="card p-3">
      <div class="d-flex flex-row-reverse">
        <a href="<?= url_to('adminCategoryAdd') ?>" class="btn btn-primary">Tambah Category</a>
      </div>
    <table class="table">
  <thead>
    <tr>
      <th>Judul</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($subject_types as $subject_type): ?>
    <tr>
      <td><?= $subject_type['title'] ?></td>
      <td>
        <a href="<?= url_to('adminCategoryDelete',$subject_type['id']) ?>" class="btn btn-danger " >Delete</a>
        <a href="<?= url_to('adminCategoryEdit',$subject_type['id']) ?>" class="btn btn-info">Edit</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
    </div>
</div>

<?= view('template/footer') ?> 