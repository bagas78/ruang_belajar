<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Akses Level</h2>
  </div>
</header>

<?php if ($this->session->flashdata('success') == 'y'): ?>
<div class="container mt-4">
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Success!</strong> Perubahan telah disimpan.
    </div>
</div>
<?php elseif($this->session->flashdata('success') == 'n'): ?>
  <div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Failed!</strong> Perubahan gagal disimpan.
  </div>
<?php endif ?>

<div class="container mt-4" id="data-admin">
	<div align="right">
		<a href="<?php echo base_url('administrator/level_add') ?>" class="btn btn-success"><i class="far fa-plus-square"></i> Tambah Level</a>
	</div>
</div>

<div class="container mt-4">
	<div class="card">
		<div class="card-close">
			<div class="dropdown">
				<button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
				<div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
			</div>
		</div>
		<div class="card-header d-flex align-items-center">
			<h3 class="h4">Tabel Akses Level</h3>
		</div>
		<div class="card-body">
			<div class="table-responsive table-hover">
				<table class="table" id="tbl-admin">
					<thead>
						<tr>
							<th>NO</th>
							<th>NAMA LEVEL</th>
							<th>AKSI</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($level as $key => $var): ?>
							<tr>
								<td><?php echo $key+1 ?></td>
								<td><?php echo $var['level_nama'] ?></td>
								<td style="vertical-align: middle;">
									<a href="<?php echo base_url("administrator/level_edit/".$var['level_id']) ?>" class="btn btn-warning text-light"><i class="fas fa-edit"></i> Edit</a>
									<button onclick="del_level('<?php echo $var['level_id'] ?>')" id="btn-hapus" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function($) {
		var table = $('table').DataTable();
	});
	function del_level(level_id) {
		var conf = confirm("Anda yakin akan menghapus data akses level ?");
		if (conf) {
			$.post('<?php echo base_url('administrator/level_delete_post') ?>', {'level_id': level_id}, function(data, textStatus, xhr) {
				if (data == '1') {
					location.reload();
				}
			});
		}
	}
</script>