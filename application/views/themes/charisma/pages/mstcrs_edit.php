
			
			<form method="POST" action="<?php echo site_url('mstcrs/proses_edit'); ?>">
		
			<div class="col-lg-6 col-lg-offset-3">
			<table class="table table-bordered">
				<?php foreach($daftar->result() as $a):?>
				<tr>
					<input type="hidden" name="MstCrsID" value="<?php echo $a->MstCrsID; ?>" class="form-control "/></tr>
				<tr><td>Name</td>
					<td><div class="col-lg-9"><input type="text" name="MstCrsName" value="<?php echo $a->MstCrsName; ?>" class="form-control input-sm"/></td></tr>
				<tr><td>Symbol</td>
					<td><div class="col-lg-8"><input type="text" name="MstCrsSym" value="<?php echo $a->MstCrsSym; ?>" class="form-control input-sm"/></td></tr>
				<tr><td colspan="2">
					<button type="submit" name="simpan" value="Update"><i class="glyphicon glyphicon-save"></i></button></td></tr>
				<?php endforeach; ?>
				</table></div>
			</form>
            </div>
            
			<a href="<?php echo site_url ('mstcrs');?>"> 
            <label><i class="glyphicon glyphicon-arrow-left"></i></label></a>
	
		
			
			
		