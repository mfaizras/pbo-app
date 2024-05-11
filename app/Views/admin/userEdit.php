<?= view('template/header') ?>

<div class="main">
    <div class="card p-3">
        <form action="<?= url_to('adminUserUpdate',$id) ?>" method="post">
          <div class="mb-3">
            <input type="hidden" name="id" value="<?= $user['id'] ?>">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="<?= $user['username'];?>">
          </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Role</label>
                <select name="role" class="form-control" id="subject_id">
                    <option value="">--- Pilih Salah Satu Role ---</option>  
                    <option value="student">Mahasiswa</option>  
                    <option value="admin" <?= $user['role'] == 'admin' ? 'selected':'' ?>>Admin</option>  
                    </select>
                </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<?= view('template/footer') ?> 