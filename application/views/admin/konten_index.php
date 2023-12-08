<div id="ngilang">
	<?= $this->session->flashdata('alert')?>
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-rounded btn-fw" data-toggle="modal" data-target="#exampleModalCenter">Tambah Konten</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<form action="<?= site_url('admin/konten/simpan') ?>" method="post" enctype='multipart/form-data'>
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Tambah Konten</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col mb-3">
							<label class="form-label">Judul</label>
							<input type="text" class="form-control" placeholder="Nama" name="judul" required />
						</div>
					</div>
					<div class="row">
						<div class="col mb-3">
							<label class="form-label">Kategori</label>
							<select name="id_kategori" class="form-control">
								<?php foreach($kategori as $aaa) { ?>
								<option value="<?= $aaa['id_kategori'] ?>"><?= $aaa['nama_kategori'] ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col mb-3">
							<label class="form-label">Keterangan</label>
							<textarea name="keterangan" class="form-control"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col mb-3">
							<label class="form-label">Foto</label>
							<input type="file" name="foto" class="form-control" accept="image/png, image/jpeg">
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
						<th>Judul</th>
						<th>Kategori Konten</th>
						<th>tanggal</th>
						<th>Kreator</th>
						<th>Foto</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; foreach($konten as $aaa) { ?>
					<tr>
						<td><?= $no; ?></td>
						<td><?= $aaa['judul'] ?></td>
						<td><?= $aaa['nama_kategori'] ?></td>
						<td><?= $aaa['tanggal'] ?></td>
						<td><?= $aaa['nama'] ?></td>
						<td>
							<a href="<?= base_url('assets/upload/konten/'.$aaa['foto'])?>" target="_blank">
								<div class="col-sm-6 col-md-4 col-lg-3">
									<i class="mdi mdi-panorama"></i> Lihat foto
							</a>
						</td>
						<td>
							<a href="<?php echo site_url('admin/konten/delete_data/'.$aaa['foto']);?>"
								class="btn btn-sm btn-danger"
								onClick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')">
								<span class="ti ti-trash"></span>
							</a>
							<!-- Button trigger modal -->
							<button type="button" class="btn btn-warning btn-sm ti ti-pencil" data-toggle="modal"
								data-target="#konten<?= $no; ?>"><span><i class=""></span>
							</button>
							<!-- Modal -->
							<div class="modal fade" id="konten<?= $no; ?>" tabindex="-1" role="dialog"
								aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-lg" role="document">
									<form action="<?= site_url('admin/konten/update') ?>" method="post"
										enctype='multipart/form-data'>
										<input type="hidden" name="nama_foto" value="<?= $aaa['foto'] ?>">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLongTitle"><?= $aaa['judul'] ?>
												</h5>
												<button type="button" class="close" data-dismiss="modal"
													aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<div class="row">
													<div class="col mb-3">
														<label class="form-label">Judul</label>
														<input type="text" class="form-control"
															value="<?= $aaa['judul'] ?>" name="judul" />
													</div>
												</div>
												<div class="row">
													<div class="col mb-3">
														<label class="form-label">Kategori</label>
														<select name="id_kategori" class="form-control">
															<?php foreach($kategori as $uu) { ?>
															<option
																<?php if($uu['id_kategori']==$aaa['id_kategori']){echo"selected";} ?>
																value="<?= $uu['id_kategori'] ?>">
																<?= $uu['nama_kategori'] ?></option>
															<?php } ?>
														</select>
													</div>
												</div>
												<div class="row">
													<div class="col mb-3">
														<label class="form-label">Keterangan</label>
														<textarea name="keterangan"
															class="form-control"><?= $aaa['keterangan'] ?></textarea>
													</div>
												</div>
												<div class="row">
													<div class="col mb-3">
														<label class="form-label">Foto</label>
														<input type="file" name="foto" class="form-control"
															accept="image/png, image/jpeg">
													</div>
												</div>
												<button type="button" class="btn btn-secondary"
													data-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-primary">Simpan</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</td>
					</tr>
					<?php $no++;} ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
