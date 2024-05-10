<?= view('template/header') ?>

<div class="main">
    <div class="card p-3">
        <form action="<?= url_to('adminCategoryStore') ?>" method="post">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" name="title">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<?= view('template/footer') ?> 