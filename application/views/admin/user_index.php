<div id="ngilang">
	<?= $this->session->flashdata('alert')?>
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-rounded btn-fw" data-toggle="modal" data-target="#exampleModalCenter">Tambah User</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
	aria-hidden="true">
	<div class="modal-dialog modal-md mt-5" role="document">
		<form action="<?= site_url('admin/user/simpan') ?>" method="post">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Tambah User</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col mb-3">
							<label class="form-label">Nama</label>
							<input type="text" class="form-control" placeholder="Nama" name="nama" required />
						</div>
					</div>
					<div class="row">
						<div class="col mb-3">
							<label class="form-label">Username</label>
							<input type="text" class="form-control" placeholder="Username" name="username" required />
						</div>
					</div>
					<div class="row">
						<div class="col mb-3">
							<label class="form-label">Password</label>
							<input name="password" type="password" class="form-control" placeholder="password"
								required />
						</div>
					</div>
					<div class="row">
						<div class="col mb-3">
							<label class="form-label">Level</label>
							<select name="level" class="form-control">
								<option value="Admin">Admin</option>
								<option value="Kontributor">Kontributor</option>
							</select>
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
		<h4 class="card-title">Data Pengguna</h4>
		<div class="table-responsive pt-3">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Username</th>
						<th>Nama</th>
						<th>Level</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($user as $aaa) { ?>
					<tr>
						<td><?= $aaa['username'] ?></td>
						<td><?= $aaa['nama'] ?></td>
						<td><?= $aaa['level'] ?></td>
						<td>
							<a href="<?php echo site_url('admin/user/delete_data/'.$aaa['id_user']);?>"
								class="btn btn-sm btn-danger"
								onClick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')"><span
									class="ti ti-trash"></span></a>
							<a data-toggle="modal" data-target="#edit<?=$aaa['id_user'] ?>">
								<span class="btn btn-warning btn-sm ti ti-pencil"><i class=""></span>
							</a>
							<div class="modal fade" id="edit<?=$aaa['id_user'] ?>" tabindex="-1" role="dialog"
								aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-md mt-5" role="document">
									<form action="<?= base_url('admin/user/update') ?>" method="post">
										<input type="hidden" name="id_user" value="<?=$aaa['id_user'] ?>">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLongTitle">Perbarui Nama User
												</h5>
												<button type="button" class="close" data-dismiss="modal"
													aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<div class="row">
													<div class="col mb-3">
														<label class="form-label">Nama</label>
														<input type="text" class="form-control"
															value="<?= $aaa['nama'] ?>" name="nama" />
													</div>
												</div>
												<div class="row">
													<div class="col mb-3">
														<label class="form-label">Username</label>
														<input type="text" class="form-control"
															value=" <?= $aaa['username'] ?>" name="username" readonly />
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
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
