<div id="ngilang">
	<?= $this->session->flashdata('alert')?>
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-rounded btn-fw" data-toggle="modal" data-target="#exampleModalCenter">Tambah Kategori</button>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
	aria-hidden="true">
	<div class="modal-dialog modal-md mt-5" role="document">
		<form action="<?= site_url('admin/kategori/simpan') ?>" method="post">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Tambah Kategori</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col mb-3">
							<label class="form-label">Nama Kategori</label>
							<input type="text" class="form-control" placeholder="Nama" name="nama_kategori" required />
						</div>
					</div>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</div>
		</form>
	</div>
</div>
<div class="card">
	<div class="card-body">
		<h4 class="card-title">Kategori Konten</h4>

		<div class="table-responsive pt-3">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Kategori Konten</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; foreach($kategori as $aaa) { ?>
					<tr>
						<td><?= $no; ?></td>
						<td><?= $aaa['nama_kategori'] ?></td>
						<td>
							<a href="<?php echo site_url('admin/kategori/delete_data/'.$aaa['id_kategori']);?>"
								class="btn btn-sm btn-danger"
								onClick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')"><span
									class="ti ti-trash"></span></a>
							<a data-toggle="modal" data-target="#edit<?=$aaa['id_kategori'] ?>">
								<span class="btn btn-warning btn-sm ti ti-pencil"><i class=""></span>
							</a>
							<div class="modal fade" id="edit<?=$aaa['id_kategori'] ?>" tabindex="-1" role="dialog"
								aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-md mt-5" role="document">
									<form action="<?= base_url('admin/kategori/update') ?>" method="post">
										<input type="hidden" name="id_kategori" value="<?=$aaa['id_kategori'] ?>">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLongTitle">Perbarui Kategori
												</h5>
												<button type="button" class="close" data-dismiss="modal"
													aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<div class="row">
													<div class="col mb-3">
														<label class="form-label">Nama Kategori Konten</label>
														<input type="text" class="form-control"
															value="<?= $aaa['nama_kategori'] ?>" name="nama_kategori" />
													</div>
												</div>
												<button type="button" class="btn btn-secondary"
													data-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-primary">Simpan</button>
											</div>
										</div>
									</form>
								</div>
						</td>
					</tr>
					<?php $no++;} ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
