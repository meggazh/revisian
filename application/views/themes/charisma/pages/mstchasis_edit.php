<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
      
	</head>
	<body>
			<form method="POST" action="<?php echo site_url('mstchasis/proses_edit'); ?>">
			<div class="col-lg-5 col-lg-offset-3">
			<table class="table table-bordered table-condensed">
				<?php foreach($daftar->result() as $a):?>
				<tr>
					<input type="hidden" name="MstChasID" value="<?php echo $a->MstChasID; ?>"class="form-control input-sm"/></tr>
				<tr><td>Chasis No</td>
					<td><div class="col-lg-8"><input type="text" name="MstChasNo" value="<?php echo $a->MstChasNo; ?>" class="form-control input-sm"/></td></tr>
				<tr><td>Maker( Vendor )</td>
					<td><div class="col-lg-8"><input type="text" name="MStChasMaker" value="<?php echo $a->MStChasMaker; ?>" class="form-control input-sm"/></td></tr>
				<tr><td>Model</td>
					<td><div class="col-lg-8"><input type="text" name="MStChasModel" value="<?php echo $a->MStChasModel; ?>" class="form-control input-sm"/></td></tr>
				<tr><td>Type</td>
					<td><div class="col-lg-8"><input type="text" name="MStChasType" value="<?php echo $a->MStChasType;?>" class="form-control input-sm"/></td></tr>
                <tr>
					<div class="col-lg-8"><input type="hidden" name="MstEmpID" value="<?php echo $a->MstEmpID;?>" class="form-control input-sm"/></tr>
				<tr>
					<td><button type="submit" name="simpan" value="Update"><i class="glyphicon glyphicon-save"></i></button></td></tr>
					
				<?php endforeach; ?>
			</table>
			</form>
				<a href="<?php echo site_url ('mstchasis');?>">
	<button class="btn btn-round "><i class="glyphicon glyphicon-arrow-left"></i></button></a>
		
	</body>
</html>
