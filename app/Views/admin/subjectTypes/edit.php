<?= view('template/header') ?>

<div class="main">
    <div class="card p-3">
        <form action="" method="post">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Judul</label>
            <input type="hidden" class="form-control" id="title" name="id" value="<?= $subject_type['id'] ?>">
            <input type="text" class="form-control" id="title" name="title" value="<?= $subject_type['title'] ?>">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<?= view('template/footer') ?> 