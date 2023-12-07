<div class="d-block">
	<h3>Daftar Materi</h3>
	<?php foreach ($list_materi as $key => $var): ?>
		<div class="card-body">
			<div class="media d-block d-md-flex mt-3">
				<img class="d-flex mb-3 mx-auto z-depth-1" src="<?php echo base_url("admin/assets/uploads/".$var['materi_foto']) ?>" alt="Generic placeholder image" style="width: 100px;">
				<div class="media-body text-center text-md-left ml-md-3 ml-0">
					<a href="<?php echo base_url("materi/show_post/".$var['materi_id']."/".urlencode(str_replace(" ", "-", $var['materi_judul']))) ?>"><h5 class="mt-0 font-weight-bold"><?php echo $var['materi_judul'] ?></h5></a>
					<?php echo explode(".", $var['materi_post'])[0]."." ?>
				</div>
			</div>
			<div class="float-right">
				<a href="<?php echo base_url("materi/show_post/".$var['materi_id']."/".urlencode(str_replace(" ", "-", $var['materi_judul']))) ?>" class="btn btn-sm btn-info">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
			</div>
			<div class="clearfix"></div>
		</div> 
		<hr>
	<?php endforeach ?>
	<div class="float-right pr-4">
		<?php echo $this->pagination->create_links(); ?>
	</div>
	<div class="clearfix"></div>
</div>

<script type="text/javascript">
	$("table").DataTable();
</script>