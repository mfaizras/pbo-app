<?= view('template/header') ?>

<div class="main">
    <div class="card p-3">
        <form action="" method="post">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="hidden" class="form-control" id="title" name="id" value="<?= $lecture['id'] ?>">

            <input type="text" class="form-control" id="name" name="name" value="<?= $lecture['name'] ?>">
          </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Status</label>
                <select name="status" class="form-control" id="status">
                    <option value="1" <?= $lecture['status'] == 1?'selected':'' ?>>Aktif</option>  
                    <option value="0" <?= $lecture['status'] == 0?'selected':'' ?>>Tidak Aktif</option>  
                    </select>
                </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<?= view('template/footer') ?> 