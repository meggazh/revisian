<html>
 <head>
	</head>
	<body>
		
		<div class="col-lg-5 col-lg-offset-3">
			<form method="POST" action="<?php echo site_url('mstpayment/proses_edit'); ?>">
			<table class="table table-bordered" >
				<?php foreach($daftar->result() as $a):?>
				<tr>
				
					<input type="hidden" name="MstPayID" value="<?php echo $a->MstPayID; ?>" class="form-control input-sm"/></tr>
				<tr>
					<td>Term of Payment</td>
					<td><input type="text" name="MstPaySyarat" value="<?php echo $a->MstPaySyarat; ?>" class="form-control input-sm"/></td></tr>
				<tr>
                <tr>
					<input type="hidden" name="MstEmpID" value="<?php echo $a->MstEmpID; ?>" class="form-control input-sm"/>
                </tr>
				<tr>
					<td colspan="2"><button type="submit" name="simpan" value="Update"><i class="glyphicon glyphicon-save"></i></button></td></tr>
				<?php endforeach; ?>
			</table>
			</form>
	   <a href="<?php echo site_url ('mstpayment');?>">
	<button class="btn btn-round "><i class="glyphicon glyphicon-arrow-left"></i></button></a>
		</div>
	</body>
</html>