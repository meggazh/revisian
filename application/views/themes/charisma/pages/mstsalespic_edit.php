<html xmlns="http://www.w3.org/1999/xhtml">
 <head>

	</head>
	<body>
		
			<div class="col-lg-6 col-lg-offfset-3">
			<form method="POST" action="<?php echo site_url('mstsalespic/proses_edit'); ?>">
			<table class="table table-bordered">
				<?php foreach($daftar->result() as $a):?>
				<tr>
					<input type="hidden" name="MstSalesPICID" value="<?php echo $a->MstSalesPICID; ?>" class="form-control"/></tr>
				<tr><td>Name</td>
					<td><div class="col-lg-6"><input type="text" name="MstSalesPICName" value="<?php echo $a->MstSalesPICName; ?>" class="form-control input-sm"/></td></tr>
				<tr><td>Email </td>
					<td><div class="col-lg-8"><input type="text" name="MstSalesPICPICEmail1" value="<?php echo $a->MstSalesPICPICEmail1; ?>" class="form-control input-sm"/></td></tr>
				
					<td><button type="submit" name="simpan" value="Save"><i class="glyphicon glyphicon-save"></i></button></td>
				<?php endforeach; ?>
			</table>
			</form>
			
			<a href="<?php echo site_url ('mstsalespic');?>">
	<button class="btn btn-round " ><i class="glyphicon glyphicon-arrow-left" ></i></button></a>
	</div>
			</div>
			
	
		
	</body>
</html>
	