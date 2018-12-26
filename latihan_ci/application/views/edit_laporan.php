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
			<?php echo form_open('laporan/update') ?>
			  

			   <div class="form-group">
			    <label for="text">No Id</label>
			    <input type="text" name="noid" value="<?php echo $data_laporan->noid ?>" class="form-control" placeholder="Masukkan No id">
			  </div>


			  <div class="form-group">
			    <label for="text">Tanggal</label>
			    <input type="date" name="tanggal" value="<?php echo $data_laporan->tanggal ?>" class="form-control" placeholder="Masukkan Tanggal">
			  </div>

			  <div class="form-group">
			    <label for="text">Waktu</label>
			    <input type="time" name="waktu" value="<?php echo $data_laporan->waktu ?>" class="form-control" >
			  </div>

			  <div class="form-group">
			    <label for="text">Mata Kuliah</label>
			    <input type="text" name="mata_kuliah" value="<?php echo $data_laporan->mata_kuliah ?>" class="form-control" >
			  </div>

			  <div class="form-group">
			    <label for="text">Kelas</label>
			    <input type="text" name="kelas" value="<?php echo $data_laporan->kelas ?>" class="form-control" placeholder="Masukkan Kelas" >
			  </div>

			  <div class="form-group">
			    <label for="text">SKS</label>
			    <input type="text" name="sks" value="<?php echo $data_laporan->sks ?>" class="form-control" >
			  </div>

			  
			  <div class="form-group">
			    <label for="text">Kode Instruksi</label>
			    <input type="text" name="kode_instruktur" value="<?php echo $data_laporan->kode_instruktur ?>" class="form-control" placeholder="Masukkan kode_instruktur">
			  </div>
			  
			  <button type="submit" class="btn btn-md btn-success">Update</button>
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