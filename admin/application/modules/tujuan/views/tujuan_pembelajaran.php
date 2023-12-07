<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Tujuan Pembelajaran</h2>
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

<div class="container mt-4">
  <div class="card">
        <div class="card-close">
          <div class="dropdown">
            <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
            <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow" x-placement="bottom-end" style="display: none; position: absolute; transform: translate3d(-94px, 26px, 0px); top: 0px; left: 0px; will-change: transform;"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
          </div>
        </div>
        <div class="card-header d-flex align-items-center">
          <h3 class="h4">Form</h3>
        </div>
        <div class="card-body">
          <div class="preview">
            <p>Preview</p>
            <img id="preview" class="img img-thumbnail" style="width: 128px; height: auto;" src="<?= (!empty($data->menu_foto) ? base_url('assets/uploads/'.$data->menu_foto."?".time()) : base_url('assets/uploads/default-image.jpg')) ?>">
          </div>
          <form class="mt-4" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label class="form-control-label">Gambar</label>
              <input accept=".jpg, .jpeg" id="gambar" name="gambar" type="file" placeholder="Pilih gambar" class="form-control">
            </div>
            <div class="form-group">       
              <label class="form-control-label">Post</label>
              <textarea id="post" name="post" class="form-control" style="height: 450px"><?= $data->menu_detail ?></textarea>
            </div>
            <div class="form-group">       
              <input type="submit" value="Simpan" class="btn btn-primary">
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
</script>

<script type="text/javascript">
  $(document).ready(function($) {
    CKEDITOR.replace('post',{
        filebrowserImageBrowseUrl : '<?php echo base_url('assets/plugins/kcfinder');?>'
    });
  });
</script>