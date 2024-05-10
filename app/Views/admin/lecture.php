<?= view('template/header') ?>

<div class="main">
    <div class="card p-3">
        <form action="<?= url_to('adminLectureStore') ?>" method="post">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Status</label>
                <select name="status" class="form-control" id="status">
                    <option value="1">Aktif</option>  
                    <option value="0">Tidak Aktif</option>  
                    </select>
                </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<?= view('template/footer') ?> 