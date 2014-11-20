<html>
 <head> 
	</head>
	<body>
        <hr>
        <fieldset>
        <div class="col-lg-6 col-lg-offset-2">
			<form method="POST" action="<?php echo site_url('mststatusprod/proses_edit'); ?>">
            <table class="table table-bordered">
				<?php foreach($daftar->result() as $a):?>
				<tr><input type="hidden" name="MstStatusProdID" value="<?php echo $a->MstStatusProdID; ?>"/></tr>
                <tr>
                	<td>Product Group</td>
					<td><div class="col-lg-11"><input type="text" name="MstStatusProdGroup" value="<?php echo $a->MstStatusProdGroup; ?>" class="form-control input-xs"/></td>
                </tr>
                <tr>
                	<td>Product SubGroup</td>
					<td><div class="col-lg-11"><input type="text" name="MstStatusProdSubGroup" value="<?php echo $a->MstStatusProdSubGroup; ?>" class="form-control input-xs"/></td>
                </tr>
                <tr>
                	<td>Product Job</td>
					<td><div class="col-lg-11"><input type="text" name="MstStatusProdJob" value="<?php echo $a->MstStatusProdJob; ?>" class="form-control input-xs"/></td>
                </tr>
                <tr>
					<td colspan="2"><button type="submit" name="simpan" value="Save"><i class="glyphicon glyphicon-save"></i></button></td>
					
				
				<?php endforeach; ?>
				</tr>
               </table>
            </form>
		
        
         <a href="<?php echo site_url ('mststatusprod');?>">
	<button class="btn btn-round " ><i class="glyphicon glyphicon-arrow-left" ></i></button></a>
	</body>
</html>
	