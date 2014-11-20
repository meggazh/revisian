<form method="POST" action="<?php echo site_url('mstcrs/proses_tambah_crs'); ?>">
			<div class="col-lg-6 col-lg-offset-3">
		 
				<table class="table table table-bordered ">
				
						<div class="col-lg-9"><input type="hidden" name="MstCrsID"  readonly disabled class="form-control input-sm">
					<tr>
						<td>Name</td>
						<td ><div class="col-lg-10"><input type="text" name="MstCrsName"  class="form-control input-sm"/></td>
					</tr>
					<tr>
						<td>Symbol</td>MstCrsSym
						<td><div class="col-lg-10"><input type="text" name="MstCrsSym"  class="form-control input-sm"/></td>
					</tr>
                    
					<td><button type="submit" name="simpan" value="Update"><i class="glyphicon glyphicon-save"></i></button></td>
					<td >
				<button type="reset" name="simpan" value="Reset"><i class="glyphicon glyphicon-pencil"></i></button></td></tr>
			</table>	
		</form>
       <a href="<?php echo site_url ('mstcrs/index');?>" >
	<label><i class="glyphicon glyphicon-arrow-left"></i></label></a>