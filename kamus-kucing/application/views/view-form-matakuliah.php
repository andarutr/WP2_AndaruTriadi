<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Matakuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <?php if(validation_errors()){ ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <?= validation_errors(); ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php } ?>
    	<div class="card shadow">
  			<div class="card-body">
		    	<h5>Form Mata Kuliah!</h5>
            <form action="<?= base_url('/matakuliah/cetak'); ?>" method="POST">
    		    	<div class="mb-3">
                <label for="kode" class="form-label">Kode MTK</label>
                <input type="number" class="form-control" name="kode" id="kode">
              </div>
              <div class="mb-3">
                <label for="nama" class="form-label">Nama MTK</label>
                <input type="text" class="form-control" name="nama" id="nama">
              </div>
              <div class="mb-3">
                <label for="sks" class="form-label">SKS</label>
                <input class="form-control" list="datalistOptions" id="sks" name="sks" placeholder="Pilih SKS">
                <datalist id="datalistOptions">
                  <option value="2">
                  <option value="3">
                  <option value="4">
                </datalist>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
		    </div>
		</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>