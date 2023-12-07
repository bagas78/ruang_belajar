<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Pengaturan</h2>
  </div>
</header>

<div class="container mt-4">
	<div class="card">
		<div class="card-close">
			<div class="dropdown">
				<button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
				<div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
			</div>
		</div>
		<div class="card-header d-flex align-items-center">
			<h3 class="h4">Form</h3>
		</div>
		<div class="card-body">
			<form method="post" action="<?php echo base_url("pengaturan/post") ?>" enctype="multipart/form-data">
				<div class="preview">
        			<p>Banner</p>
        			<img id="preview" class="img img-thumbnail" style="width: 128px; height: 128px;" src="<?php echo base_url("assets/uploads/home-banner.jpg?".time()) ?>">
        		</div>
				<div class="form-group mt-3">
            	  <input accept=".jpg, .jpeg" id="gambar" name="banner" type="file" placeholder="Pilih gambar" class="form-control">
            	</div>
				<div class="form-group">
					<label class="form-control-label">Text Banner</label>
					<textarea name="text-banner" id="text_banner" class="form-control ckeditor"><?php echo $this->db->get('t_text')->row("text_banner") ?></textarea>
				</div>
				<div class="line">
					<hr>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="preview">
        					<p>Kompetensi Inti</p>
        					<img id="preview1" class="img img-thumbnail" style="width: 128px; height: 128px;" src="<?php echo base_url("assets/uploads/home-kompetensi-inti.jpg?".time()) ?>">
        				</div>
						<div class="form-group mt-3">
            			  <input accept=".jpg, .jpeg" id="gambar1" name="kompetensi-inti" type="file" placeholder="Pilih gambar" class="form-control">
            			</div>
					</div>
					<div class="col-md-4">
						<div class="preview">
        					<p>Kompetensi Dasar</p>
        					<img id="preview2" class="img img-thumbnail" style="width: 128px; height: 128px;" src="<?php echo base_url("assets/uploads/home-kompetensi-dasar.jpg?".time()) ?>">
        				</div>
						<div class="form-group mt-3">
            			  <input accept=".jpg, .jpeg" id="gambar2" name="kompetensi-dasar" type="file" placeholder="Pilih gambar" class="form-control">
            			</div>
					</div>
					<div class="col-md-4">
						<div class="preview">
        					<p>Tujuan Pembelajaran</p>
        					<img id="preview3" class="img img-thumbnail" style="width: 128px; height: 128px;" src="<?php echo base_url("assets/uploads/home-tujuan-pembelajaran.jpg?".time()) ?>">
        				</div>
						<div class="form-group mt-3">
            			  <input accept=".jpg, .jpeg" id="gambar3" name="tujuan-pembelajaran" type="file" placeholder="Pilih gambar" class="form-control">
            			</div>
					</div>
					<div class="col-md-4">
						<div class="preview">
        					<p>Indikator</p>
        					<img id="preview4" class="img img-thumbnail" style="width: 128px; height: 128px;" src="<?php echo base_url("assets/uploads/home-tujuan-indikator.jpg?".time()) ?>">
        				</div>
						<div class="form-group mt-3">
            			  <input accept=".jpg, .jpeg" id="gambar4" name="indikator" type="file" placeholder="Pilih gambar" class="form-control">
            			</div>
					</div>
					<div class="col-md-4">
						<div class="preview">
        					<p>Materi</p>
        					<img id="preview5" class="img img-thumbnail" style="width: 128px; height: 128px;" src="<?php echo base_url("assets/uploads/home-materi.jpg?".time()) ?>">
        				</div>
						<div class="form-group mt-3">
            			  <input accept=".jpg, .jpeg" id="gambar5" name="materi" type="file" placeholder="Pilih gambar" class="form-control">
            			</div>
					</div>
					<div class="col-md-4">
						<div class="preview">
        					<p>Latihan Soal</p>
        					<img id="preview6" class="img img-thumbnail" style="width: 128px; height: 128px;" src="<?php echo base_url("assets/uploads/home-latihan-soal.jpg?".time()) ?>">
        				</div>
						<div class="form-group mt-3">
            			  <input accept=".jpg, .jpeg" id="gambar6" name="latihan-soal" type="file" placeholder="Pilih gambar" class="form-control">
            			</div>
					</div>
				</div>
				<div class="line">
					<hr>
				</div>
				<div class="preview">
        			<p>About Author</p>
        			<img id="preview7" class="img img-thumbnail" style="width: 128px; height: 128px;" src="<?php echo base_url("assets/uploads/home-author.jpg?".time()) ?>">
        		</div>
				<div class="form-group mt-3">
            	  <input accept=".jpg, .jpeg" id="gambar7" name="about-author" type="file" placeholder="Pilih gambar" class="form-control">
            	</div>
				<div class="form-group">
					<label class="form-control-label">Text Author</label>
					<textarea name="text-footer" id="text_footer" class="form-control ckeditor"><?php echo $this->db->get('t_text')->row("text_author") ?></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Simpan</button>
					<button type="reset" class="btn btn-danger">Reset</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
  $("#gambar").change(function(event) {
    /* Act on the event */
    var output = document.getElementById('preview');
    output.src = URL.createObjectURL(event.target.files[0]);
  });
  $("#gambar1").change(function(event) {
    /* Act on the event */
    var output = document.getElementById('preview1');
    output.src = URL.createObjectURL(event.target.files[0]);
  });
  $("#gambar2").change(function(event) {
    /* Act on the event */
    var output = document.getElementById('preview2');
    output.src = URL.createObjectURL(event.target.files[0]);
  });
  $("#gambar3").change(function(event) {
    /* Act on the event */
    var output = document.getElementById('preview3');
    output.src = URL.createObjectURL(event.target.files[0]);
  });
  $("#gambar4").change(function(event) {
    /* Act on the event */
    var output = document.getElementById('preview4');
    output.src = URL.createObjectURL(event.target.files[0]);
  });
  $("#gambar5").change(function(event) {
    /* Act on the event */
    var output = document.getElementById('preview5');
    output.src = URL.createObjectURL(event.target.files[0]);
  });
  $("#gambar6").change(function(event) {
    /* Act on the event */
    var output = document.getElementById('preview6');
    output.src = URL.createObjectURL(event.target.files[0]);
  });
  $("#gambar7").change(function(event) {
    /* Act on the event */
    var output = document.getElementById('preview7');
    output.src = URL.createObjectURL(event.target.files[0]);
  });
</script>

<script type="text/javascript">
	$(document).ready(function($) {
		CKEDITOR.replaceAll('ckeditor');
</script> 