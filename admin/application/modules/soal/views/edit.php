<style type="text/css">
	.up{
		background: indianred;
    color: white;
    padding: 3px;
    border-width: 1px;
    border-color: #999;
    border-style: solid;
    border-radius: 4px;
    margin-top: 5px;
	}
	.up-1{
		background: #17a2b8;
    color: white;
    padding: 3px;
    border-width: 1px;
    border-color: #999;
    border-style: solid;
    border-radius: 4px;
    margin-top: 5px;
	}
</style>

<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Tambah Soal</h2>
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
			<form method="post">
				<div class="form-group">
					<label class="form-control-label">NAMA SOAL</label>
					<input required="" autocomplete="off" type="text" name="soal_nama" value="<?php echo $soal['soal_nama'] ?>" placeholder="NAMA SOAL" class="form-control">
				</div>
				<?php foreach (unserialize($soal['soal_data']) as $i => $var): ?>
					<div class="line">
						<hr>
					</div>
					<div class="form-group">
						<label class="form-control-label"><b>[ NO : <?= $i ?> ]</b> PERTANYAAN</label>
						<textarea placeholder="Masukkan pertanyaan" class="form-control" name="soal[<?= $i ?>][pertanyaan]"><?php echo @$var['pertanyaan'] ?></textarea>

						<!-- gambar -->
						<input hidden type="text" class="gambar" name="soal[<?= $i ?>][gambar]" value="<?php echo @$var['gambar'] ?>">
						<input id="img-soal<?= $i ?>" type="file" class="upload mt-2 w-25" style="display:none;">
						<label class="up" for="img-soal<?= $i ?>">Upload image <i class="fa fa-upload"></i></label>

						<button <?=(@$var['gambar'] == '')?"hidden":""?> type="button" class="view btn btn-success btn-sm"><i class="fa fa-eye"></i></button>
						<button <?=(@$var['gambar'] == '')?"hidden":""?> type="button" class="del btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
						<br/><small class="message"></small>
						<!-- gambar -->

					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<label class="form-control-label">Jawaban <b>a</b> :</label>
								<textarea required="" placeholder="Masukkan Jawaban a" class="form-control" name="soal[<?= $i ?>][a]"><?php echo @$var['a'] ?></textarea>

								<!-- gambar -->
								<input hidden type="text" class="gambar" name="soal[<?= $i ?>][gambar_a]" value="<?php echo @$var['gambar_a'] ?>">
								<input id="img-a<?= $i ?>" type="file" class="upload mt-2 w-25" style="display:none;">
								<label class="up-1" for="img-a<?= $i ?>">Upload image <i class="fa fa-upload"></i></label>

								<button <?=(@$var['gambar_a'] == '')?"hidden":""?> type="button" class="view btn btn-success btn-sm"><i class="fa fa-eye"></i></button>
								<button <?=(@$var['gambar_a'] == '')?"hidden":""?> type="button" class="del btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
								<br/><small class="message"></small>
								<!-- gambar -->

							</div>
							<div class="col-md-6">
								<label class="form-control-label">Jawaban <b>b</b> :</label>
								<textarea required="" placeholder="Masukkan Jawaban b" class="form-control" name="soal[<?= $i ?>][b]"><?php echo @$var['b'] ?></textarea>

								<!-- gambar -->
								<input hidden type="text" class="gambar" name="soal[<?= $i ?>][gambar_b]" value="<?php echo @$var['gambar_b'] ?>">
								<input id="img-b<?= $i ?>" type="file" class="upload mt-2 w-25" style="display:none;">
								<label class="up-1" for="img-b<?= $i ?>">Upload image <i class="fa fa-upload"></i></label>

								<button <?=(@$var['gambar_b'] == '')?"hidden":""?> type="button" class="view btn btn-success btn-sm"><i class="fa fa-eye"></i></button>
								<button <?=(@$var['gambar_b'] == '')?"hidden":""?> type="button" class="del btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
								<br/><small class="message"></small>
								<!-- gambar -->

							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label class="form-control-label">Jawaban <b>c</b> :</label>
								<textarea required="" placeholder="Masukkan Jawaban c" class="form-control" name="soal[<?= $i ?>][c]"><?php echo @$var['c'] ?></textarea>

								<!-- gambar -->
								<input hidden type="text" class="gambar" name="soal[<?= $i ?>][gambar_c]" value="<?php echo @$var['gambar_c'] ?>">
								<input id="img-c<?= $i ?>" type="file" class="upload mt-2 w-25" style="display:none;">
								<label class="up-1" for="img-c<?= $i ?>">Upload image <i class="fa fa-upload"></i></label>

								<button <?=(@$var['gambar_c'] == '')?"hidden":""?> type="button" class="view btn btn-success btn-sm"><i class="fa fa-eye"></i></button>
								<button <?=(@$var['gambar_c'] == '')?"hidden":""?> type="button" class="del btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
								<br/><small class="message"></small>
								<!-- gambar -->

							</div>
							<div class="col-md-6">
								<label class="form-control-label">Jawaban <b>d</b> :</label>
								<textarea required="" placeholder="Masukkan Jawaban d" class="form-control" name="soal[<?= $i ?>][d]"><?php echo @$var['d'] ?></textarea>

								<!-- gambar -->
								<input hidden type="text" class="gambar" name="soal[<?= $i ?>][gambar_d]" value="<?php echo @$var['gambar_b'] ?>">
								<input id="img-d<?= $i ?>" type="file" class="upload mt-2 w-25" style="display:none;">
								<label class="up-1" for="img-d<?= $i ?>">Upload image <i class="fa fa-upload"></i></label>

								<button <?=(@$var['gambar_d'] == '')?"hidden":""?> type="button" class="view btn btn-success btn-sm"><i class="fa fa-eye"></i></button>
								<button <?=(@$var['gambar_d'] == '')?"hidden":""?> type="button" class="del btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
								<br/><small class="message"></small>
								<!-- gambar -->

							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<label class="form-control-label">Kunci Jawaban</label>
								<select name="soal[<?= $i ?>][kunci]" class="form-control">
									<option value="">Pilih Kunci Jawaban</option>
									<option <?php echo (@$var['kunci'] == 'a') ? 'selected' : '' ?> value="a">a</option>
									<option <?php echo (@$var['kunci'] == 'b') ? 'selected' : '' ?> value="b">b</option>
									<option <?php echo (@$var['kunci'] == 'c') ? 'selected' : '' ?> value="c">c</option>
									<option <?php echo (@$var['kunci'] == 'd') ? 'selected' : '' ?> value="d">d</option>
								</select>
							</div>
						</div>
					</div>
				<?php endforeach ?>
				<div class="line">
					<hr>
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
	
//upload soal
$(document).on('change', '.upload', function() {

  var target = $(this);
  var name = $(this).closest('div').find(".gambar");
  var message = $(this).closest('div').find(".message");
  message.empty();

  //view + del
  var view = $(this).closest('div').find(".view");
  var del = $(this).closest('div').find(".del");

  var file = this.files[0];
  var imagefile = file.type;
  var match= ["image/jpeg","image/png","image/jpg"];

  if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]))){
    
    target.val('');
    message.html("<span style='color:red;'>Please Select A valid Image File</span>");
    return false;
  
  }else{

    var x = 'pilihan';
    var file_data = target.prop('files')[0];   
    var form_data = new FormData();                  
    form_data.append('file', file_data);

    $.ajax({
        url: '<?=base_url('soal/upload/')?>'+x, 
        dataType: 'json', 
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        type: 'post',
        success: function(response){

            message.html('loading');

            if (response == 0) {
              target.val('');
              name.val('');
              message.html("<span style='color:red;'>Invalid file Size, Max 2MB</span>");
            }
            if (response == 1) {
              target.val('');
              name.val('');
              message.html("<span style='color:red;'>File Already Exists</span>");
            }
            if (response != 0 && response != 1) {
              name.val(response['name']);
              message.html("<span style='color:green;'>Success Upload</span>");

              view.removeAttr('hidden');
              del.removeAttr('hidden');
            }
           
        }
     });
  }  

});


$(document).on('click', '.del', function() {

	var target = $(this);
  var name = $(this).closest('div').find(".gambar");
  var message = $(this).closest('div').find(".message");
  message.empty();

  //view + del
  var view = $(this).closest('div').find(".view");
  var del = $(this).closest('div').find(".del");

  $.ajax({
  	url: '<?=base_url('soal/upload_delete/pilihan')?>',
  	type: 'POST',
  	dataType: 'json',
  	data: {image: name.val()},
  })
  .done(function(response) {
  	
  	if (response == 1) {

  		message.html('<span style="color:green;">Deleted Successfully</span>');
  		view.attr('hidden', 'true');
    	del.attr('hidden', 'true');
    	name.val('');

  	}else{

  		message.html('<span style="color:red;">Errors Occured</span>');
  	}

  });
  

});

$(document).on('click', '.view', function() {

	var image = $(this).closest('div').find(".gambar").val();

  if (image != '') {
  	 window.open('<?=base_url('assets/pilihan_ganda/')?>'+image, '_blank')
  }

});

</script>