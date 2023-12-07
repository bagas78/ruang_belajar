<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Soal Uraian</h2>
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

<div class="container mt-4" id="data-soal">
	<div align="right">
		<a href="<?php echo base_url('soal/uraian_add') ?>" class="btn btn-success"><i class="far fa-plus-square"></i> Tambah Soal</a>
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
			<h3 class="h4">Tabel Soal</h3>
		</div>
		<div class="card-body">
			<div class="table-responsive table-hover">
				<table class="table" id="tbl-siswa">
					<thead>
						<tr>
							<th>NO</th>
							<th>NAMA SOAL</th>
							<th>TANGGAL DIBUAT</th>
							<th>TANGGAL PERBARUAN</th>
							<th>AKSI</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($soal as $key => $var): ?>
							<tr>
								<td><?php echo $key+1 ?></td>
								<td><?php echo $var['soal_uraian_nama'] ?></td>
								<td><?php echo date("d-m-y", strtotime($var['soal_uraian_dibuat'])) ?></td>
								<td><?php echo date("d-m-Y", strtotime($var['soal_uraian_diperbarui'])) ?></td>
								<td>
									<a href="<?php echo base_url('soal/uraian_edit/'.$var['soal_uraian_id']) ?>" class="btn btn-warning text-light"><i class="fas fa-edit"></i> Edit</a>
									<button onclick="del_soal_uraian('<?php echo $var['soal_uraian_id'] ?>')" id="btn-hapus" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
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
	function del_soal_uraian(soal_uraian_id) {
		var conf = confirm("Anda yakin akan menghapus data soal ?");
		if (conf) {
			$.post('<?php echo base_url('soal/uraian_del') ?>', {'soal_uraian_id': soal_uraian_id}, function(data, textStatus, xhr) {
				if (data == '1') {
					location.reload();
				}
			});
		}
	}
</script>