

<form method="POST" action="<?php echo site_url('mstchasis/proses_tambah_chasis'); ?>">
	
			<div class="col-lg-6 col-lg-offset-2">
			
	  <table   class="table table-bordered table-condensed " width="80%" >
		
	      <!--<td>ID Chasis</td>-->
		<tr>
		<td>No Chasis</td>
	      <td><input type="text" name="MstChasNo" class="form-control" value="<?php echo $new_id; ?>" readonly/></td>
       </tr>
	   <tr>
	      <td>Maker ( Vendor )</td>
	      <td ><input type="text" name="MStChasMaker"  class="form-control input-sm" /></div></td>
        </tr>
	    <tr>
	      <td>Model</td>
	      <td><input type="text" name="MStChasModel"  class="form-control input-sm"/></td>
        </tr>
	    <tr>
	      <td>Type</td>
	      <td><input type="text" name="MStChasType"  class="form-control input-sm"/></td>
        </tr>
         
	      <input type="hidden" name="MstEmpID"  class="form-control input-sm"/>
       
       
	      <!--<td>&nbsp;</td>-->
		  <tr>
	      <td><button type="submit" name="simpan" value="Update"><i class="glyphicon glyphicon-save"></i></button></td>
		  <td>
		  <button type="reset" name="simpan" value="Reset"><i class="glyphicon glyphicon-pencil"></i></button></td>
        </tr>
    </table>	
    </form>
	<a href="<?php echo site_url ('mstchasis');?>">
	<button class="btn btn-round "><i class="glyphicon glyphicon-arrow-left"></i></button></a>
	</div>

	
	