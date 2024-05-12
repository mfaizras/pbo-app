<?= view('template/header') ?>

<div class="main">
    <div class="card p-3">
      <div class="d-flex flex-row-reverse">
        <a href="<?= url_to('adminSubjectAdd') ?>" class="btn btn-primary">Tambah Subject</a>
      </div>
    <table class="table">
  <thead>
    <tr>
      <th>Nama</th>
      <th>Kategori</th>
      <th>Dosen</th>
      <th>Tahun Akademik</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($subjects as $subject): ?>
    <tr>
      <td><?= $subject['title'] ?></td>
      <td><?= $subject['subject_type'] ?></td>
      <td><?= $subject['lecturer_name'] ?></td>
      <td><?= $subject['academic_year'] ?></td>
      <td>
        <a href="<?= url_to('adminSubjectDelete',$subject['id']) ?>" class="btn btn-danger " >Delete</a>
        <a href="<?= url_to('adminSubjectEdit',$subject['id']) ?>" class="btn btn-info">Edit</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
    </div>
</div>

<?= view('template/footer') ?> 