<?= view('template/header') ?>

<div class="main">
    <div class="card p-3">
        <form action="" method="post">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" name="title">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
              <textarea name="description" class="form-control" id="description" cols="30" rows="5"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mata Kuliah</label>
                <select name="subject_id" class="form-control" id="subject_id">
                    <option value="">--- Pilih Salah satu Mata Kuliah ---</option>  
                    <?php foreach($subjects as $subject): ?>
                        <option value="<?= $subject['id'] ?>"><?= $subject['title'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                  <!-- <label for="exampleInputEmail1" class="form-label">File</label> -->
                  <!-- <input type="text" class="form-control" id="title" name="title"> -->
                  <table class="table table-bordered mt-3" id="rundownTable">
                        <thead>
                            <td style="width: 30%">
                                File Name
                            </td>
                            <td style="width: 30%">
                                File Link
                            </td>
                            <td style="width: 20%">
                                Action
                            </td>

                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    <div class="d-flex flex-row-reverse">
                        <div class="p-2">
                            <a onclick="myCreateFunction()" class="btn btn-primary rounded-pill">Tambah File</a>
                        </div>
                    </div>
                </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<script>
        var count = 0;

        function myCreateFunction() {
            count++;
            var table = document.getElementById("rundownTable");
            var row = table.insertRow();
            var fileName = row.insertCell(0);
            var links = row.insertCell(1);
            var action = row.insertCell(2);
            fileName.innerHTML =
                "<input type='text' class='form-control' name = 'files["+count+"][filename]' value = '' placeholder = 'File Name'> ";
            links.innerHTML =
                "<input type='text' class='form-control' name = 'files["+count+"][filelink]' value = '' placeholder = 'URL File'> ";
            action.innerHTML = "<a onclick='myDeleteFunction(this)' class='btn btn-danger container-fluid'>Delete</a>";
        }

        function myDeleteFunction(button) {
            console.log(count + " test");
            var row = button.parentNode.parentNode; // Get the row
            var rowIndex = row.rowIndex; // Get the row index
            document.getElementById("rundownTable").deleteRow(rowIndex);
            count--;
        }
    </script>

<?= view('template/footer') ?> 