	<form method="POST" action="<?php echo site_url('mststatusprod/proses_tambah_sts'); ?>">
	<div class="col-lg-7 col-lg-offset-2">
	  <table class="table table-bordered">
	    <tr>
	      <div class="col-lg-8"><input type="hidden" name="MstStatusProdID"/>
        </tr>
        <tr>
	      <td>Group</td>
	      <td><div class="col-lg-8"><input type="text" name="MstStatusProdGroup"  class="form-control input-sm"/></td>
        </tr>
		<tr>
	      <td>SubGroup</td>
	      <td><div class="col-lg-8"><input type="text" name="MstStatusProdSubGroup" class="form-control input-sm"/></td>
        </tr>
		<tr>
	      <td>Job</td>
	      <td ><div class="col-lg-8"><input type="text" name="MstStatusProdJob"  class="form-control input-sm"/></td>
        </tr>
	      <td align="center"><button type="submit" name="simpan" value="Save"><i class="glyphicon glyphicon-save"></i></button></td>
	      <td align="center" ><button type="reset" name="simpan" value="Reset"><i class="glyphicon glyphicon-pencil"></i></button></td>
        </tr>
    </table>	
    </form>
    
    <a href="<?php echo site_url ('mststatusprod');?>">
	<label><i class="glyphicon glyphicon-arrow-left" ></i></label></a>