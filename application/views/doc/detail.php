<ul class="breadcrumb">  <li class="btn-back"><a href="javascript:history.go(-1);" class="btn btn-mini btn-info">Kembali</a></li>  <li><a href="<?php echo site_url()?>" class="btn btn-mini"><i class="icon-home"></i></a></li>  <li><a href="<?php echo site_url('doc')?>" class="btn btn-mini">Daftar Dokumen</a></li>  <li><a href="javascript:;" class="btn btn-mini disabled">Update Dokumen</a></li></ul><div class="page-header"><div class="btn-group pull-right">	<a href="<?php echo site_url('doc/a')?>" class="btn btn-primary pull-right"><i class="icon-plus-sign icon-white"></i> Buat Baru</a>	<a href="javascript:;" class="btn btn-danger pull-right" id="deletelink" rel="<?php echo site_url('doc/d/'.$records->id)?>" title="Hapus dokumen"><i class="icon-trash icon-white"></i> Hapus Dokumen</a>  </div>  <h2>Profil Dokumen</h2></div><div class="row-fluid"><div class="span6"><?php echo form_open(site_url('doc/u/'.$records->id), array('class'=>"form-horizontal alt1", 'id'=>'form1'))?><input type="hidden" name="id" value="<?php echo $records->id?>">  <div class="control-group">    <label class="control-label"> Nomor </label>    <div class="controls">    <input type="text" class="input-xlarge" disabled id="no" name="no" placeholder="Isi Nomor" value="<?php echo $records->no?>" />    <?php echo (form_error('no')) ? form_error('no') : ''; ?>    </div>  </div>    <div class="control-group">    <label class="control-label"><span class="important"> Perihal </span></label>    <div class="controls">	<textarea id="title" name="title" disabled class="input-xlarge" placeholder="Perihal" rows="5"><?php echo $records->title?></textarea>           <?php echo (form_error('title')) ? form_error('title') : ''; ?>    </div>  </div>     <div class="control-group">    <label class="control-label"> Kategori Dokumen </label>    <div class="controls">    <select name="category" disabled>	<option value="">- SELECT -</option>	<?php foreach($cat as $c):?>		<option value="<?php echo $c->categoryID?>" <?php echo ($c->categoryID == $records->cat_id)? 'selected="selected"' : NULL ?>><?php echo $c->category_name?></option>	<?php endforeach;?>	</select>    <?php echo (form_error('category')) ? form_error('category') : ''; ?>    </div>  </div>    
  <div class="control-group">
    <label class="control-label">Tanggal Dokumen</label>
    <div class="controls">       
	<input type="text" class="input-small" id="date" name="date" disabled placeholder="dd-mm-yyyy" value="<?php echo reverse_date($records->date)?>"/>
	 <?php echo (form_error('date')) ? form_error('date') : ''; ?>
    </div>         
   </div>
 <div class="control-group">    <label class="control-label"> Asal / Pihak yang dituju </label>    <div class="controls">    <input type="text" class="input-xlarge" disabled id="source" name="source" placeholder="Isi Sumber" value="<?php echo $records->source?>" />    <?php echo (form_error('source')) ? form_error('source') : ''; ?>    </div>  </div>    <div class="control-group">    <label class="control-label"> Jumlah Halaman </label>    <div class="controls">	    <input type="text" class="input-small" id="page" disabled name="page" placeholder="Isi LDE" value="<?php echo $records->page?>" />		    <?php echo (form_error('page')) ? form_error('page') : ''; ?>    </div>  </div>    <div class="control-group">    <label class="control-label">Catatan</label>    <div class="controls">    <textarea name="desc" id="desc" class="input-xlarge" disabled placeholder="Deskripsi atau catatan" rows="5"><?php echo $records->desc?></textarea>    <?php echo (form_error('desc')) ? form_error('desc') : ''; ?>    </div>  </div>     <div class="clearfix">&nbsp;</div><legend>Informasi Lokasi Penyimpanan</legend>	  <div class="control-group">    <label class="control-label"> Almari Besi </label>    <div class="controls">    <input type="text" class="input-mini" id="ab" name="ab" disabled value="<?php echo $records->ab?>" />    <?php echo (form_error('ab')) ? form_error('ab') : ''; ?>    </div>  </div>    <div class="control-group">    <label class="control-label"> Susunan </label>    <div class="controls">    <input type="text" class="input-mini" id="sap" name="sap" disabled value="<?php echo $records->sap?>" />    <?php echo (form_error('sap')) ? form_error('sap') : ''; ?>    </div>  </div>    <div class="control-group">    <label class="control-label"> Odner </label>    <div class="controls">    <input type="text" class="input-mini" id="od" name="od" disabled value="<?php echo $records->od?>" />    <?php echo (form_error('od')) ? form_error('od') : ''; ?>    </div>  </div>    <div class="control-group">    <label class="control-label"> Filing Cabinet </label>    <div class="controls">    <input type="text" class="input-mini" id="fe" name="fe" disabled value="<?php echo $records->fe?>" />    <?php echo (form_error('fe')) ? form_error('fe') : ''; ?>    </div>  </div>    <div class="control-group">    <label class="control-label"> Laci </label>    <div class="controls">    <input type="text" class="input-mini" id="laci" name="laci" disabled value="<?php echo $records->laci?>" />    <?php echo (form_error('laci')) ? form_error('laci') : ''; ?>    </div>  </div>    <div class="control-group">    <label class="control-label"> Hang Map </label>    <div class="controls">    <input type="text" class="input-mini" id="hm" name="hm" disabled value="<?php echo $records->hm?>" />    <?php echo (form_error('hm')) ? form_error('hm') : ''; ?>    </div>  </div>	</form> </div><div class="span6"><legend>Daftar File</legend><?php echo form_open_multipart(site_url('doc/upload/'), array('class'=>"form-horizontal alt1", 'id'=>'form1'))?><input type="hidden" name="id" value="<?php echo $records->id?>">	<table class="table table-condensed">  <thead>    <tr>      <th width="50">#</th>      <th>File</th>      <th width="100">size</th>      <th width="150"></th>          </tr>  </thead>  <tbody>      <?php if($file):	$i = 1;?>  <?php foreach($file as $key):?>    <?php if($records->flag == 0):?>    	<tr>      <td><?php echo $i?>.</td>     <td><?php echo $key->atc_filename?></td>       <td><?php echo substr($key->atc_size/100, 0, -2)?> KB</td>	  <td>		  <?php if($this->model_session->auth_display('view_dan_download', 4)):?>	  <a class="btn btn-mini" target="_blank" href="<?php echo site_url('media/viewer/'.$key->atc_id.'?url='.current_url())?>" title="Lihat file"><i class="icon-eye-open"></i> [<?php echo $key->atc_vcnt?>]</a>      	  				<a href="javascript:;" class="btn btn-mini" id="hidelink" rel="<?php echo site_url('doc/download/'.$key->atc_id.'/'.$records->id_s)?>" title="Download file"><i class="icon-download"></i> [<?php echo $key->atc_dcnt?>]</a>	<?php endif;?>      </td>    </tr>	<?php endif;?>  <?php 	$i++;	endforeach;?>  <?php else:?>  <tr><td colspan="4"><strong>Tidak ada Lampiran</strong></td></tr>  <?php endif;?>  </tbody>  </table></form></div></div>