	<form method="POST" action="<?php echo site_url('mstgrpsales/proses_tambah_grpsales'); ?>">
			
		
			
<!--Button Add New Grpsales-->
	<div class="col-lg-6 col-lg-offset-3">
	  <table class="table table-condensed table-bordered ">
	    <tr>
	      <input type="hidden" name="MstGRPSalesID" class="form-control" /></tr>
        </tr>
        <tr>
	      <td>Group Sales Description</td>
	      <td><div class="col-lg-11"><input type="text" name="MstGRPSalesDesc"  class="form-control input-sm" required /></td>
        </tr>
         <tr>
	      <td>Abbrevation</td>
	      <td><div class="col-lg-11"><input type="text" name="MstGRPSalesAbbr"  class="form-control input-sm" required/></td>
        </tr>
         <input type="hidden" name="MstEmpID"  class="form-control input-sm"/></td>

	     <!-- <td>&nbsp;</td>-->
	      <tr><td><button type="submit" name="simpan" value="Save" id="submitButton"><i class="glyphicon glyphicon-save"></i></button></td><td><button type="reset" name="simpan" value="Reset"><i class="glyphicon glyphicon-pencil"></i></button></td>
        </tr>
    </table>	
    </form>
	
<a href="<?php echo site_url ('mstgrpsales');?>">
	<label><i class="glyphicon glyphicon-arrow-left"></i></label></a>
	</div>
	</div>
	
	

	