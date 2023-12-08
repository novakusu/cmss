<div id="ngilang">
	<?= $this->session->flashdata('alert')?>
</div>
<div class="col-sm-12 ">
	<div class="bg-light rounded h-10 p-4">
		<form action="<?= site_url('admin/caraousel/simpan') ?> " method="post" enctype='multipart/form-data'>
			<h6 class="mb-4">File Input</h6>
			<div class="modal-body">
				<div class="row">
					<div class="col mb-3">
						<label class="form-label">Judul</label>
						<input type="text" class="form-control" placeholder="judul foto" name="judul" required />
					</div>
				</div>
				<div class="mb-3">
					<label for="formFile" class="form-label">Pilih Foto Dengan Ukuran(1:3)</label>
					<input class="form-control" type="file" name="foto">
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Simpan</button>
		</form>
	</div>
	<?php foreach ($caraousel as $aaa){ ?>
		<div class="col-sm-8 mt-4 ">
		<img class="card-img-top" src="<?= base_url('assets/upload/caraousel/'.$aaa['foto']) ?> ">
		<div class="card-body">
			<h5 class="card-title"><?=$aaa['judul'] ?></h5>
			<a href="<?php echo site_url('admin/caraousel/delete_data/'.$aaa['foto']) ?> " class="btn btn-sm btn-danger"
				onClick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')"><span class="ti ti-trash"></span>
			</a>
		</div>
	</div>
	<?php } ?>
</div>
