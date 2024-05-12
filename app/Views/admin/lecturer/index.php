<?= view('template/header') ?>

<div class="main">
    <div class="card p-3">
      <div class="d-flex flex-row-reverse">
        <a href="<?= url_to('adminLectureAdd') ?>" class="btn btn-primary">Tambah Lecture</a>
      </div>
    <table class="table">
  <thead>
    <tr>
      <th>Nama</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($lecturers as $lecturer): ?>
    <tr>
      <td><?= $lecturer['name'] ?></td>
      <td>
        <a href="<?= url_to('adminLectureDelete',$lecturer['id']) ?>" class="btn btn-danger " >Delete</a>
        <a href="<?= url_to('adminLectureEdit',$lecturer['id']) ?>" class="btn btn-info">Edit</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
    </div>
</div>

<?= view('template/footer') ?> 