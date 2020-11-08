<ul class="breadcrumb">
  <li class="btn-back"><a href="javascript:history.go(-1);" class="btn btn-mini btn-info">Kembali</a></li>
  <li><a href="<?php echo site_url()?>" class="btn btn-mini"><i class="icon-home"></i></a></li>
  <li><a href="<?php echo site_url('floor')?>" class="btn btn-mini">Daftar Lantai</a></li>
  <li><a href="javascript:;" class="btn btn-mini disabled">Update Lantai</a></li>
</ul>

<div class="page-header">
	<h2>informasi Lantai</h2>
</div>

<?php echo form_open(site_url('floor/u/'.$records->floorID), array('class'=>"form-horizontal alt1", 'id'=>'form1'))?>
<input type="hidden" name="id" value="<?php echo $records->floorID?>" />
 <div class="control-group">
    <label class="control-label"><span class="important">Nama Gedung</span></label>
    <div class="controls">
   <select name="name_g">
   <option>- SELECT -</option>
   <?php foreach($all as $a):?>
   <option value="<?php echo $a->gedungID?>" <?php  if($a->gedungID == $records->gedung_id){echo 'selected="selected"';}?>><?php echo $a->gedung_name?></option>
   <?php endforeach;?>
   </select>
    <?php echo (form_error('name')) ? form_error('name') : ''; ?>
    </div>
  </div>

  <div class="control-group">
    <label class="control-label"><span class="important">Nama Lantai</span></label>
    <div class="controls">
    <input type="text" class="input-xlarge" id="name" name="name" placeholder="Masukan nama lantai" value="<?php echo $records->floor_name?>" />
    <?php echo (form_error('name')) ? form_error('name') : ''; ?>
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label">Informasi</label>
    <div class="controls">
    <textarea id="desc" name="desc"><?php echo $records->floor_desc?></textarea>
    <?php echo (form_error('desc')) ? form_error('desc') : ''; ?>
    </div>
  </div>
   


  <div class="form-actions">
    <input type="submit" class="btn btn-primary btn-large" value="Save">
    <input type="reset" class="btn btn-large" value="Reset">
  </div>
	
</form>