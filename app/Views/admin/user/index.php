<?= view('template/header') ?>

<div class="main">
    <div class="card p-3">
      <div class="d-flex flex-row-reverse">
        <a href="<?= url_to('adminUserAdd') ?>" class="btn btn-primary">Tambah User</a>
      </div>
    <table class="table">
  <thead>
    <tr>
      <th>Nama</th>
      <th>Username</th>
      <th>Role</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($users as $user): ?>
    <tr>
      <td><?= $user['name'] ?></td>
      <td><?= $user['username'] ?></td>
      <td><?= $user['role'] ?></td>
      <td>
        <a href="<?= url_to('adminUserDelete',$user['id']) ?>" class="btn btn-danger <?= $user['role'] == 'admin'?'disabled':'' ?>" >Delete</a>
        <a href="<?= url_to('adminUserEdit',$user['id']) ?>" class="btn btn-info">Edit</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
    </div>
</div>

<?= view('template/footer') ?> 