<ul class="breadcrumb">
  <li class="btn-back"><a href="javascript:history.go(-1);" class="btn btn-mini btn-info">Kembali</a></li>
  <li><a href="<?php echo site_url()?>" class="btn btn-mini"><i class="icon-home"></i></a></li>
  <li><a href="javascript:;" class="btn btn-mini disabled">Daftar Dokumen</a></li>
</ul>

<div class="page-header">
	<?php if($this->model_session->auth_display('document', 3)):?>
	
		<a href="<?php echo site_url('doc/a')?>" class="btn btn-primary pull-right"><i class="icon-plus-sign icon-white"></i> Buat Baru</a>
		<a href="<?php echo site_url('doc/search')?>" class="btn btn-warning pull-right"><i class="icon-zoom-in icon-white"></i> Pencarian Lanjutan</a>
		
		<select onchange="navigateTo(this, 'window', false);" class="pull-right" style="margin-right:10px;">
		<option value="<?php echo site_url('doc')?>"> Filter </option>
		<?php foreach($cat as $c):?>
		<option value="<?php echo site_url('doc/filter/'.$c->categoryID)?>" <?php echo ($c->categoryID == $this->uri->segment(3))?'selected':null;?>><?php echo $c->category_name?></option>
		<?php endforeach;?>
		</select>

  <?php endif?>
	<h2>Daftar Dokumen</h2>
</div>

<link rel="stylesheet" href="<?php echo base_url('assets/css/datatable.css')?>">

<table class="table table-condensed display" id="xtable">
	<thead>
		<tr>
			<th width="60">#</th>			<th>No. Surat</th>						<th>Perihal</th>			<th>Jenis</th>			<th>Asal / Pihak yang dituju</th>						<th>Tanggal Surat</th>						<th>Lihat</th>					
		</tr>
	</thead>
	<tbody>
		<tr>
			<td colspan="7" class="dataTables_empty">Loading data from server</td>
		</tr>
	</tbody>
</table>
  
<script type="text/javascript" language="javascript" src="<?php echo base_url('assets/js/jquery.dataTables.min.js')?>"></script>
<script type="text/javascript" charset="utf-8">
var oTable;

$(document).ready(function() {
	
	oTable = $('#xtable').dataTable( {
		"bJQueryUI": true,
		"sPaginationType": "full_numbers",
		"aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0 ] } ],
		"iDisplayLength": 25,
		"bProcessing": true,
		"bServerSide": true,
		"bAutoWidth": false,
		"sAjaxSource": "<?php echo site_url('doc/json_data_filter/'.$this->uri->segment(3))?>"
		
	} );	
	
} );

function navigateTo(sel, target, newWindow) {
    var url = sel.options[sel.selectedIndex].value;
    if (newWindow) {
        window.open(url, target, '--- attributes here, see below ---');
    } else {
        window[target].location.href = url;
    }
}
</script>