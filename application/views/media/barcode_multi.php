<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Barcode :: <?php echo $this->config->item('app_abbr')?> :: <?php echo $this->config->item('app_name').' '.$this->config->item('app_ver')?></title>
<link rel="shortcut icon" href="<?php echo base_url()?>assets/img/favicon.ico" type="image/x-icon">
<style media="screen">
/*! normalize.css v1.0.0 | MIT License | git.io/normalize */
article,aside,details,figcaption,figure,footer,header,hgroup,nav,section,summary{display:block}audio,canvas,video{display:inline-block;*display:inline;*zoom:1}audio:not([controls]){display:none;height:0}[hidden]{display:none}html{font-size:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}html,button,input,select,textarea{font-family:sans-serif}body{margin:0}a:focus{outline:thin dotted}a:active,a:hover{outline:0}h1{font-size:2em;margin:.67em 0}h2{font-size:1.5em;margin:.83em 0}h3{font-size:1.17em;margin:1em 0}h4{font-size:1em;margin:1.33em 0}h5{font-size:.83em;margin:1.67em 0}h6{font-size:.75em;margin:2.33em 0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:bold}blockquote{margin:1em 40px}dfn{font-style:italic}mark{background:#ff0;color:#000}p,pre{margin:1em 0}code,kbd,pre,samp{font-family:monospace,serif;_font-family:'courier new',monospace;font-size:1em}pre{white-space:pre;white-space:pre-wrap;word-wrap:break-word}q{quotes:none}q:before,q:after{content:'';content:none}small{font-size:75%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-0.5em}sub{bottom:-0.25em}dl,menu,ol,ul{margin:1em 0}dd{margin:0 0 0 40px}menu,ol,ul{padding:0 0 0 40px}nav ul,nav ol{list-style:none;list-style-image:none}img{border:0;-ms-interpolation-mode:bicubic}svg:not(:root){overflow:hidden}figure{margin:0}form{margin:0}fieldset{border:1px solid #c0c0c0;margin:0 2px;padding:.35em .625em .75em}legend{border:0;padding:0;white-space:normal;*margin-left:-7px}button,input,select,textarea{font-size:100%;margin:0;vertical-align:baseline;*vertical-align:middle}button,input{line-height:normal}button,html input[type="button"],input[type="reset"],input[type="submit"]{-webkit-appearance:button;cursor:pointer;*overflow:visible}button[disabled],input[disabled]{cursor:default}input[type="checkbox"],input[type="radio"]{box-sizing:border-box;padding:0;*height:13px;*width:13px}input[type="search"]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}textarea{overflow:auto;vertical-align:top}table{border-collapse:collapse;border-spacing:0}

body {
	font-family:Arial, Helvetica, sans-serif;
}
.report-form-box 
{
	padding:20px;
	border:solid 1px #333;
	display:block;
	margin-bottom:10px;
}

.barcode-container 
{
	margin-bottom:20px;
}

.controls 
{
	display:block;
}

.controls-label
{
	display:inline-block;
	width:150px;
	font-weight:bold;
}

.corporate-title 
{
	padding-top:2px;
	font-size:12px;
	font-weight:bold;
}

.corporate-title img 
{
	vertical-align:middle;
	margin-right:10px;
	width:30px;
}
</style>
<link href="<?php echo base_url('assets/css/print-barcode.css')?>" rel="stylesheet" media="print">
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-barcode.min.js')?>"></script>
</head>

<body>
<?php if($records):?>
	<?php foreach($records as $key):?>
	
	<div class="report-form-box">
	
		<div id="barcodeView_<?php echo $key->id?>" class="barcode-container"></div>
		
		<script type="text/javascript">
		$("#barcodeView_<?php echo $key->id?>").barcode("<?php echo $key->code?>", "code128", {barWidth:2, barHeight:60, fontSize:16});
		</script>
		
		<div class="controls">
		<label class="controls-label">Nama Kapal</label>:
		<span><?php echo $key->nama_kapal?></span>
		</div>
	
		<?php if($this->uri->segment(3)=='sertifikat'):?>
		<div class="controls">
		<label class="controls-label">Masa Berlaku</label>:
		<span><?php echo reverse_date($key->masa_berlaku)?></span>
		</div>
		<?php endif;?>
		
		<div class="controls">
		<label class="controls-label">Tanggal Entri</label>:
		<span><?php echo $key->cdt?></span>
		</div>
	
		<p class="corporate-title"><img src="<?php echo base_url('assets/img/logo-small.jpg')?>"><?php echo $sys['DEPARTEMEN']?></p>
	
	</div>
	
	<?php endforeach;?>
	
	<button onClick="javascript:window.print()" class="hide" value="Cetak">Cetak</button>
	
<?php else:?>

	<p>Mohon pilih barcode yang akan dicetak terlebih dahulu. <button onClick="javascript:history.go(-1)">Kembali</button></p>
<?php endif;?>

</body>
</html>
