<html>
 <head>
	</head>
	<body>
			<form method="POST" action="<?php echo site_url('mstappr/proses_edit');?>">
			<div class="col-lg-6 col-lg-offset-3">
			<table class="table table-bordered">
				<?php foreach($daftar->result() as $a):?>
			
					<input type="hidden" name="MstApprID" value="<?php echo $a->MstApprID; ?>" class="form-control "></tr>
					<tr><td>Approval Name</td>
					<td><div class="col-lg-10"><input type="text" name="MstApprName" value="<?php echo $a->MstApprName; ?>" class="form-control input-sm"/>
					</td></tr>
					<tr><td>Approval 1</td>
					<td><div class="col-lg-10"><input type="text" name="MstAppr1" value="<?php echo $a->MstAppr1; ?>" class="form-control input-sm"/>
					</td></tr>
					<tr><td>Title</td>
					<td><div class="col-lg-10"><input type="text" name="MstApprTitle1" value="<?php echo $a->MstApprTitle1; ?>" class="form-control input-sm"/>
					
					</td></tr>
					
					<tr><td>Approval 2</td>
					<td><div class="col-lg-10"><input type="text" name="MstAppr2" value="<?php echo $a->MstAppr2; ?>" class="form-control input-sm"/>
					
					</td></tr>
					<tr><td>Title</td>
					<td><div class="col-lg-10"><input type="text" name="MstApprTitle2" value="<?php echo $a->MstApprTitle2; ?>" class="form-control input-sm"/>
					
					</td></tr>
					
					<tr><td>Approval 3</td>
					<td><div class="col-lg-10"><input type="text" name="MstAppr3" value="<?php echo $a->MstAppr3; ?>" class="form-control input-sm"/>
					
					</td></tr>
					<tr><td>Title</td>
					<td><div class="col-lg-10"><input type="text" name="MstApprTitle3" value="<?php echo $a->MstApprTitle3; ?>" class="form-control input-sm"/>
					
					</td></tr>
					
					<tr><td>Approval 4</td>
					<td><div class="col-lg-10"><input type="text" name="MstAppr4" value="<?php echo $a->MstAppr4; ?>" class="form-control input-sm"/>
					
					</td></tr>
					<tr><td>Title</td>
					<td><div class="col-lg-10"><input type="text" name="MstApprTitle4" value="<?php echo $a->MstApprTitle4; ?>" class="form-control input-sm"/>
					</td></tr>
					<tr>
					<div class="col-lg-10"><input type="hidden" name="MstEmpID" value="<?php echo $a->MstEmpID; ?>" class="form-control input-sm"/>
					</td></tr>
					
					<td colspan="2"><button type="submit" name="simpan" value="Update"><i class="glyphicon glyphicon-save"></i></button></td></tr>
					
				<?php endforeach; ?>
				</table>
			</form>
			<a href="<?php echo site_url ('mstappr');?>">
	<button class="btn btn-round "><i class="glyphicon glyphicon-arrow-left"></i></button></a>
		
		</div></div>
		
	</body>
</html>
