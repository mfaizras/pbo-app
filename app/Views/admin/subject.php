<?= view('template/header') ?>

<div class="main">
    <div class="card p-3">
        <form action="<?= url_to('adminSubjectStore') ?>" method="post">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" name="title">
          </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kategori</label>
                <select name="subject_type_id" class="form-control" id="subject_id">
                    <option value="">--- Pilih Salah Satu Kategori ---</option>  
                    <?php foreach($subjectTypes as $subjectType): ?>
                        <option value="<?= $subjectType['id'] ?>"><?= $subjectType['title'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Dosen</label>
                <select name="lecture_id" class="form-control" id="subject_id">
                    <option value="">--- Pilih Salah Satu Dosen ---</option>  
                    <?php foreach($lecturers as $lecturer): ?>
                        <option value="<?= $lecturer['id'] ?>"><?= $lecturer['name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tahun akademik</label>
            <input type="text" class="form-control" id="academic_year" name="academic_year">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<?= view('template/footer') ?> 