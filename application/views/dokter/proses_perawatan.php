<script src="<?php echo base_url();?>assets/tinymce/js/tinymce/tinymce.dev.js"></script>
<script src="<?php echo base_url();?>assets/tinymce/js/tinymce/plugins/table/plugin.dev.js"></script>
<script src="<?php echo base_url();?>assets/tinymce/js/tinymce/plugins/paste/plugin.dev.js"></script>
<script src="<?php echo base_url();?>assets/tinymce/js/tinymce/plugins/spellchecker/plugin.dev.js"></script>
<script>
	tinymce.init({
		selector: "textarea",
		theme: "modern",
		plugins: [
			"advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
			"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
			"save table contextmenu directionality emoticons template paste textcolor importcss"
		],
		content_css: "css/development.css",
		add_unload_trigger: false,

		toolbar1: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons table",
		toolbar2: "custompanelbutton textbutton spellchecker",

		image_advtab: true,

		style_formats: [
			{title: 'Bold text', format: 'h1'},
			{title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
			{title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
			{title: 'Example 1', inline: 'span', classes: 'example1'},
			{title: 'Example 2', inline: 'span', classes: 'example2'},
			{title: 'Table styles'},
			{title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
		],

		template_replace_values : {
			username : "Jack Black"
		},

		template_preview_replace_values : {
			username : "Preview user name"
		},

		//file_browser_callback: function() {},

		templates: [ 
			{title: 'Some title 1', description: 'Some desc 1', content: '<strong class="red">My content: {$username}</strong>'}, 
			{title: 'Some title 2', description: 'Some desc 2', url: 'development.html'} 
		],

		setup: function(ed) {
			ed.addButton('custompanelbutton', {
				type: 'panelbutton',
				text: 'Panel',
				panel: {
					type: 'form',
					items: [
						{type: 'button', text: 'Ok'},
						{type: 'button', text: 'Cancel'}
					]
				}
			});

			ed.addButton('textbutton', {
				type: 'button',
				text: 'Text'
			});
		},

		spellchecker_callback: function(method, words, callback) {
			if (method == "spellcheck") {
				var suggestions = {};

				for (var i = 0; i < words.length; i++) {
					suggestions[words[i]] = ["First", "second"];
				}

				callback(suggestions);
			}
		}
	});
</script>
<!-- Traffic sources -->
<div class="panel panel-flat">
						<div class="panel-heading">
							<h6 class="panel-title">Selamat Datang, <b><?php echo $this->session->userdata('nama_dokter');?></b></h6>
                            <hr>
							<div class="heading-elements">
								
							</div>
						</div>

						<div class="panel-heading">
							<div class="row">
								
<span class='label border-left-primary label-striped'>Anda akan memasukkan detail hasil pemeriksaaan dengan Nomor Token: </span><button class="btn btn-primary btn-rounded legitRipple"><i class="icon-book3"></i> <?php echo $perawatan_id; ?></button>
<br /></br>

<form action="<?php echo base_url();?>index.php/dokter/simpan_pemeriksaan" method="POST">
<table width="80%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="20%" align="right" valign="top">Entri Hasil Pemeriksaan</td>
    <td width="3%" align="center" valign="top">:</td>
    <td width="77%">
    
    <input type="hidden" id="perawatan_id" name="perawatan_id" value="<?php echo $perawatan_id; ?>"/>
    <input type="hidden" id="dokter_id" name="dokter_id" value="<?php echo $dokter_id; ?>"/>
    <label>
      <textarea name="detail" id="detail" cols="45" rows="5" class="form-control" placeholder="Masukkan Hasil Pemeriksaan Di sini"></textarea>
    </label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><button type="submit" class="btn btn-primary btn-rounded legitRipple"><i class="icon-floppy-disk"></i>  Proses Pemeriksaan</button>
    <a href="<?php echo base_url();?>index.php/dokter/pasien" class="btn btn-primary btn-rounded legitRipple"><i class=" icon-exit3"></i>  Kembali </a>
    </td>
    
  </tr>
</table>
</form>
                    
							</div>
						</div>

						<div class="position-relative" id="traffic-sources"></div>
					</div>
					<!-- /traffic sources -->
