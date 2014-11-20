<form method="POST" action="<?php echo site_url('mstpayment/proses_tambah_pay'); ?>">
<!--Button Add New Approval-->
		
		<div class="col-lg-5 col-lg-offset-3">
	<center>  <table class="table table-bordered">
	    <tr>
	      <input type="hidden" name="MstPayID" class="form-control"/>
        </tr>
        <tr>
	      <td>Term of Payment</td>
	      <td><div class="col-lg-11"><input type="text" name="MstPaySyarat" placeholder="" class="form-control input-sm" /></div></td>
        </tr>
         <tr>
	      <input type="hidden" name="MstEmpID" placeholder="" class="form-control  input-sm" />
        </tr>
	     <!-- <td>&nbsp;</td>-->
	      <td><button type="submit" name="simpan" value="Simpan"><i class="glyphicon glyphicon-save"></i></button></td><td><button type="reset" name="simpan" value="Reset"><i class="glyphicon glyphicon-pencil"></i></button></a></td>
        </tr>
    </table>	
    </form>

	<a href="<?php echo site_url ('mstpayment');?>">
	<label><i class="glyphicon glyphicon-arrow-left"></i></label></a>
	
	</div>