

<form method="POST" action="<?php echo site_url('mstsalespic/proses_tambah_salespic'); ?>">
	<div class="col-lg-5 col-lg-offset-3">
	  <table class="table table table-bordered ">
	    <tr>
	      <input type="hidden" name="MstSalesPICID" class="form-control input-sm"/>
        </tr>
        <tr>
	      <td>Name</td>
	      <td><div class="col-lg-6"><input type="text" name="MstSalesPICName"  class="form-control input-sm" /></td>
        </tr>
		<tr>
	      <td>Email 1</td>
	      <td><div class="col-lg-7"><input type="text" name="MstSalesPICPICEmail1" placeholder="youremail@yahoo.com" class="form-control input-sm"/></td>
        </tr>
		
	      <!--<td>&nbsp;</td>-->
	      <td><button type="submit" name="simpan" value="Save"><i class="glyphicon glyphicon-save"></i></button></td><td><button type="reset" name="simpan" value="Reset"><i class="glyphicon glyphicon-pencil"></i></button></td>
        </tr>
    </table>	
    </form>
	
	<a href="<?php echo site_url ('mstsalespic');?>">
	<label><i class="glyphicon glyphicon-arrow-left" ></i></label></a>
	</div>
