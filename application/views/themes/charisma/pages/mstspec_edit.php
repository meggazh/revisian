
			<form method="POST" action="<?php echo site_url('mstspec/proses_edit'); ?>">
				<div class="col-lg-6">
	  				<table class="table table-bordered">
				<?php foreach($daftar->result() as $a):?>
					<input type="hidden" name="MstSpecID" value="<?php echo $a->MstSpecID; ?>" />
					<tr>
                    	<td>Description</td>
                    	<td><div class="col-lg-9"><input type="text" name="MstSpecDesc" value="<?php echo $a->MstSpecDesc; ?>" class="form-control input-sm"/></td>
                    </tr>
                    <tr>
                    	<td>Penggerak </td>
						<td><div class="col-lg-9"><input type="text" name="MstSpecPenggerak" value="<?php echo $a->MstSpecPenggerak; ?>" class="form-control input-sm"/></td>
                    </tr>
                    <tr>
   						<td>Base</td>
						<td><div class="col-lg-9"><input type="text" name="MstSpecBase" value="<?php echo $a->MstSpecBase; ?>" class="form-control input-sm"/></td>
                    </tr>
                    <tr>
                    	<td>Cross member</td>
						<td><div class="col-lg-9"><input type="text" name="MstSpecCrossMember" value="<?php echo $a->MstSpecCrossMember; ?>" class="form-control input-sm"/></td>
                    </tr>
                    <tr>
                    	<td>Wall</td>
                    	<td><div class="col-lg-9"><input type="text" name="MstSpecWall" value="<?php echo $a->MstSpecWall; ?>" class="form-control input-sm"/></td>
                     </tr>
                    
                        <tr>
                    	<td>Side Door</td>
                    	<td><div class="col-lg-9"><input type="text" name="MstSpecSideDoor" value="<?php echo $a->MstSpecSideDoor; ?>" class="form-control input-sm"/></td>
                     </tr>
                     <tr>
                    	<td>Wing</td>
                    	<td><div class="col-lg-9"><input type="text" name="MstSpecWing" value="<?php echo $a->MstSpecWing; ?>" class="form-control input-sm"/></td>
                     </tr>
					 <tr>
                    	<td>Inner Roof</td>
                    	<td><div class="col-lg-9"><input type="text" name="MstSpecInnerRoof" value="<?php echo $a->MstSpecInnerRoof; ?>" class="form-control input-sm"/></td>
                     </tr>
					 </table>
					 </div>
					 
					 <div class="col-lg-5">
					 <table class="table table-bordered">
                     
                    <tr>
                    	<td>Side Guard</td>
                    	<td><div class="col-lg-9"><input type="text" name="MstSpecSideGuard" value="<?php echo $a->MstSpecSideGuard; ?>" class="form-control input-sm"/></td></tr>
                     <tr><td>Back Bumper</td>
                     <td><div class="col-lg-9"><input type="text" name="MstSpecBackBumper" value="<?php echo $a->MstSpecBackBumper; ?>" class="form-control input-sm"/></td>
                     </tr>
                     <tr>
                    	<td>Lamp</td>
                    	<td><div class="col-lg-9"><input type="text" name="MstSpecLamp" value="<?php echo $a->MstSpecLamp; ?>" class="form-control input-sm"/></td>
                     </tr>
                     <tr><td>Painting  </td>
                     <td><div class="col-lg-9"><input type="text" name="MstSpecPainting" value="<?php echo $a->MstSpecPainting; ?>" class="form-control input-sm"/></td>
                     </tr>
                     <tr>
                    	<td>BackDoor</td>
                    	<td><div class="col-lg-9"><input type="text" name="MstSpecBackDoor" value="<?php echo $a->MstSpecBackDoor; ?>" class="form-control input-sm"/></td>
                     </tr>
                     <tr>
                    	<td>Rear Door</td>
                    	<td><div class="col-lg-9"><input type="text" name="MstSpecRearDoor" value="<?php echo $a->MstSpecRearDoor; ?>" class="form-control input-sm"/></td>
                     </tr>
                     <tr>
                    	<td>Stair</td>
                    	<td><div class="col-lg-9"><input type="text" name="MstSpecTangga" value="<?php echo $a->MstSpecTangga; ?>" class="form-control input-sm"/></td>
                     </tr>
				   
                    <!-- <tr>
                    	<td>Last UpDate</td>
                    	<td><div class="col-lg-9"><input type="text" name="MstSpecLastUpDate" value="<?php echo $a->MstSpecLastUpDate; ?>" class="form-control input-sm"/></td>
                     </tr> -->
                     <tr>
                    	<td>Emp ID</td>
                    	<td><div class="col-lg-9"><input type="text" name="MstEmpID" value="<?php echo $a->MstEmpID; ?>" class="form-control input-sm"/></td>
                     </tr>
					 </table>
					 </div>
					 <div class="col-lg-11">
					<table class="table ">
					 <?php
					      $today = date("Y-m-d H:i:s");                   
					?><input type="hidden" class="="col-lg-4"" name="MstSpecLastUpDate" value="<?php echo $today; ?>" class="form-control input-sm"/>
                     <tr>
					    <td><center><a href="<?php echo site_url ('mstspec_view');?>">
	                         <button class="btn btn-round " ><i class="glyphicon glyphicon-arrow-left" ></i></button></a></td>
						<td><center><button type="submit" name="simpan" value="Save"><i class="glyphicon glyphicon-save"></i></button></td>
                     </tr>
			   </table>
			   </div>
				<?php endforeach; ?>
             
                </form>
				
			
	
	</body>
</html>
	