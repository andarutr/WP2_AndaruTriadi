<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Data Matakuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
    	<div class="card shadow">
  			<div class="card-body">
		    	<h5 class="mb-3">Tampil Data Mata Kuliah! <a href="<?= base_url('/matakuliah'); ?>" class="badge bg-primary"> >kembali</a></h5>
    		    	<div class="mb-3">
                <label for="kode" class="form-label">Kode MTK</label>
                <input type="number" class="form-control" value="<?= $kode; ?>" id="kode" disabled>
              </div>
              <div class="mb-3">
                <label for="nama" class="form-label">Nama MTK</label>
                <input type="text" class="form-control" value="<?= $nama; ?>" id="nama" disabled>
              </div>
              <div class="mb-3">
                <label for="sks" class="form-label">SKS</label>
                <input class="form-control" list="datalistOptions" id="sks" value="<?= $sks; ?>" placeholder="Pilih SKS" disabled>
              </div>
		    </div>
		</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>