<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>
<body>

	<div class="container" style="margin-top: 80px">
		<div class="col-md-12">
			<?php echo form_open('laporan/simpan') ?>
			  
			   <div class="form-group">
			    <label for="text">No  Id</label>
			    <input type="text" name="noid" class="form-control" >
			  </div>


			  <div class="form-group">
			    <label for="text">Tanggal</label>
			    <input type="Date" name="tanggal" class="form-control" placeholder="Masukkan Tanggal">
			  </div>

			  <div class="form-group">
			    <label for="text">Waktu</label>
			    <input type="time" name="waktu" class="form-control" >
			  </div>

			  <div class="form-group">
			    <label for="text">Mata Kuliah</label>
			    <input type="text" name="mata_kuliah" class="form-control" >
			  </div>

			  <div class="form-group">
			    <label for="text">Kelas</label>
			    <input type="text" name="kelas" class="form-control" >
			  </div>

			  <div class="form-group">
			    <label for="text">sks</label>
			    <input type="text" name="sks" class="form-control" >
			  </div>

			  <div class="form-group">
			    <label for="text">Kode Instruktur</label>
			    <input type="text" name="kode_instruktur" class="form-control" >
			  </div>
			  
			  <button type="submit" class="btn btn-md btn-success">Simpan</button>
			  <button type="reset" class="btn btn-md btn-warning">reset</button>
			<?php echo form_close() ?>
		</div>
	</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script>
	$('#table').DataTable( {
    autoFill: true
} );
</script>
</body>
</html>