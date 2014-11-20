<form method="POST" action="<?php echo site_url('mstspec/proses_tambah_spec'); ?>">
	<div class="col-lg-6">
	  <table class="table table-bordered">
	    <tr>
	      <input type="hidden" name="MstSpecID"/>
        </tr>
        <tr>
	      <td>Description</td>
	      <td><div class="col-lg-9"><input type="text" name="MstSpecDesc"  class="form-control input-sm"/></td>
        </tr>
		<tr>
	      <td>Activator </td>
	      <td><div class="col-lg-8"><input type="text" name="MstSpecPenggerak" class="form-control input-sm"/></td>
        </tr>
		<tr>
	      <td>Base</td>
	      <td><div class="col-lg-8"><input type="text" name="MstSpecBase"  class="form-control input-sm"/></td>
        </tr>
		<tr>
	      <td>Cross Member</td>
	      <td><div class="col-lg-8"><input type="text" name="MstSpecCrossMember"  class="form-control input-sm"/></td>
        </tr>
		<tr>
	      <td>Wall</td>
	      <td><div class="col-lg-8"><input type="text" name="MstSpecWall"  class="form-control input-sm"/></td>
        </tr>
        <tr>
	      <td>Side Door</td>
	      <td><div class="col-lg-8"><input type="text" name="MstSpecSideDoor"  class="form-control input-sm"/></td>
        </tr>
        <tr>
	      <td>Wing</td>
	      <td><div class="col-lg-8"><input type="text" name="MstSpecWing"  class="form-control input-sm"/></td>
        </tr>
        <tr>
	      <td>Inner Roof</td>
	      <td><div class="col-lg-8"><input type="text" name="MstSpecInnerRoof"  class="form-control input-sm"/></td>
        </tr>
        </table></div>
        
        <div class="col-lg-6">
        <table class="table table-bordered" align="right">
        <tr>
	      <td>Side Guard</td>
	      <td><div class="col-lg-8"><input type="text" name="MstSpecSideGuard" class="form-control input-sm"/></td>
        </tr>
        <tr>
	      <td>Back Bumper</td>
	      <td><div class="col-lg-8"><input type="text" name="MstSpecBackBumper"  class="form-control input-sm"/></td>
        </tr>
         <tr>
	      <td>Lamp</td>
	      <td><div class="col-lg-8"><input type="text" name="MstSpecLamp"  class="form-control input-sm"/></td>
        </tr>
         <tr>
	      <td>Painting</td>
	      <td><div class="col-lg-8"><input type="text" name="MstSpecPainting"  class="form-control input-sm"/></td>
        </tr>
         <tr>
	      <td>Back Door</td>
	      <td><div class="col-lg-8"><input type="text" name="MstSpecBackDoor" class="form-control input-sm"/></td>
        </tr>
         <tr>
	      <td>Rear Door</td>
	      <td><div class="col-lg-8"><input type="text" name="MstSpecRearDoor"  class="form-control input-sm"/></td>
        </tr>
         <tr>
	      <td>Stair</td>
	      <td><div class="col-lg-8"><input type="text" name="MstSpecTangga"  class="form-control input-sm"/></td>
        </tr>
		<?php
          	$today = date("Y-m-d H:i:s");                   
         	?>
         <tr>
	      
	      <div class="col-lg-8"><input type="hidden" name="MstEmpID"  class="form-control input-sm"/>
        </tr>
	</table>
	</div>
	<div class="col-lg-11">
	<table>
		<tr>
		  <td><center>
		      <a href="<?php echo site_url ('mstspec');?>">
	          <button class="btn btn-round " ><i class="glyphicon glyphicon-arrow-left" ></i></button></a>
		  </td>
	      <td><button type="submit" name="simpan" value="Save"><i class="glyphicon glyphicon-save"></i></button><input type="hidden" name="MstSpecLastUpDate"value="<?php echo $today; ?>" class="form-control input-sm"/></td>
        </tr>
    </table>
	</div>	
    </form>
	
	
	