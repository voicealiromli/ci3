<ul class="breadcrumb">
  <li class="btn-back"><a href="javascript:history.go(-1);" class="btn btn-mini btn-info">Back</a></li>
  <li><a href="<?php echo site_url()?>" class="btn btn-mini"><i class="icon-home"></i></a></li>
  <li><a href="<?php echo site_url('column')?>" class="btn btn-mini">Daftar Kolom</a></li>
  <li><a href="javascript:;" class="btn btn-mini disabled">Update Kolom</a></li>
</ul>

	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.chained.js"></script>
	<script type="text/javascript" charset="utf-8">
  $(function() {
    /* For jquery.chained.js */
    $("#lantai").chained("#gedung");
    $("#ruangan").chained("#lantai");
    $("#rak").chained("#ruangan");
    $("#row").chained("#rak");
  });
  </script>

<div class="page-header">
	<h2>Update Kolom</h2>
</div>

<?php echo form_open(site_url('column/u/'.$records->colID), array('class'=>"form-horizontal alt1", 'id'=>'form1'))?>
<input type="hidden" name="id" value="<?php echo $records->colID?>">
 <div class="control-group">
    <label class="control-label"><span class="important">Nama Kolom</span></label>
    <div class="controls">
   <select name="name_g" id="gedung">
   <option value="">- SELECT -</option>
   <?php foreach($all as $a):?>
   <option value="<?php echo $a->gedungID?>"<?php  if($a->gedungID == $records->gedung_id){echo 'selected="selected"';}?>><?php echo $a->gedung_name?></option>
   <?php endforeach;?>
   </select>
    <?php echo (form_error('name_g')) ? form_error('name_g') : ''; ?>
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label"><span class="important">Nama Lantai</span></label>
    <div class="controls">
   <select name="name_l" id="lantai">
   <option value="">- SELECT -</option>
   <?php foreach($floor as $f):?>
   <option value="<?php echo $f->floorID?>" class="<?php echo $f->gedung_id?>"<?php  if($f->floorID == $records->lantai_id){echo 'selected="selected"';}?>><?php echo $f->floor_name?></option>
   <?php endforeach;?>
   </select>
    <?php echo (form_error('name_l')) ? form_error('name_l') : ''; ?>
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label"><span class="important">Nama Ruangan</span></label>
    <div class="controls">
   <select name="name_r" id="ruangan">
   <option value="">- SELECT -</option>
   <?php foreach($room as $r):?>
   <option value="<?php echo $r->roomID?>" class="<?php echo $r->lantai_id?>"<?php  if($r->roomID == $records->ruangan_id){echo 'selected="selected"';}?>><?php echo $r->room_name?></option>
   <?php endforeach;?>
   </select>
    <?php echo (form_error('name_r')) ? form_error('name_r') : ''; ?>
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label"><span class="important">Nama Rak</span></label>
    <div class="controls">
   <select name="name_rk" id="rak">
   <option value="">- SELECT -</option>
   <?php foreach($rack as $rk):?>
   <option value="<?php echo $rk->rackID?>" class="<?php echo $rk->ruangan_id?>"<?php  if($rk->rackID == $records->rak_id){echo 'selected="selected"';}?>><?php echo $rk->rack_name?></option>
   <?php endforeach;?>
   </select>
    <?php echo (form_error('name_r')) ? form_error('name_r') : ''; ?>
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label"><span class="important">Nama Baris</span></label>
    <div class="controls">
   <select name="name_rw" id="row">
   <option value="">- SELECT -</option>
   <?php foreach($row as $rw):?>
   <option value="<?php echo $rw->rowID?>" class="<?php echo $rw->rak_id?>"<?php  if($rw->rowID == $records->row_id){echo 'selected="selected"';}?>><?php echo $rw->row_name?></option>
   <?php endforeach;?>
   </select>
    <?php echo (form_error('name_r')) ? form_error('name_r') : ''; ?>
    </div>
  </div>

  <div class="control-group">
    <label class="control-label"><span class="important">Nama Kolom</span></label>
    <div class="controls">
    <input type="text" class="input-xlarge" id="name" name="name" placeholder="Enter Column Name" value="<?php echo $records->col_name?>" />
    <?php echo (form_error('name')) ? form_error('name') : ''; ?>
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label">Informasi</label>
    <div class="controls">
    <textarea id="desc" name="desc"><?php echo $records->col_desc?></textarea>
    <?php echo (form_error('desc')) ? form_error('desc') : ''; ?>
    </div>
  </div>
   


  <div class="form-actions">
    <input type="submit" class="btn btn-primary btn-large" value="Save">
    <input type="reset" class="btn btn-large" value="Reset">
  </div>
	
</form>