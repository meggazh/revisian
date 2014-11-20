<html>
 <head>
	</head>
	<body>
		
	
		<div class="col-lg-6 col-lg-offset-3 ">
			<form method="POST" action="<?php echo site_url('mstgrpsales/proses_edit'); ?>">
			<table class="table table-bordered">
				<?php foreach($daftar->result() as $a):?>
					<input type="hidden" name="MstGRPSalesID" value="<?php echo $a->MstGRPSalesID; ?>"/>
					
					<tr><td >Group Sales Description</td>
					<td><div class="col-lg-12"><input type="text" name="MstGRPSalesDesc" value="<?php echo $a->MstGRPSalesDesc; ?>" class="form-control input-sm"/></td></tr>
                    
                    <tr><td> Abbrevation</td>
					<td><div class="col-lg-12"><input type="text" name="MstGRPSalesAbbr" value="<?php echo $a->MstGRPSalesAbbr; ?>" class="form-control input-sm"/></td></tr>
                    <input type="hidden" name="MstEmpID" value="<?php echo $a->MstEmpID; ?>"/>
					<tr><td colspan="2"><button type="submit" name="simpan" value="Update"><i class="glyphicon glyphicon-save"></i></button></td></tr>
                   
				<?php endforeach; ?></table>
			</form>
			
		
		
	
	<a href="<?php echo site_url ('mstgrpsales');?>">
	<button class="btn btn-round " ><i class="glyphicon glyphicon-arrow-left" ></i></button></a>
	
		
	</body>
</html>
