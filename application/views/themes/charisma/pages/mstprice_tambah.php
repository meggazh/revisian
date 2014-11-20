<form method="POST" action="<?php echo site_url('mstprice/proses_tambah_price'); ?>">
			<legend>
	
<!--Button Add New Approval-->
	  <table class="table table table-bordered ">
	    <tr>
	      <input type="hidden" name="MstPriceID"/>
        </tr>
        <tr>
	      <td>Unit Price</td>
	      <td><input type="text" name="MstPriceUnitPrice" placeholder="Unit Price" class="form-control"/></td>
        </tr>
		  <tr>
	      <td>Expired Date</td>
	      <td><input type="text" name="MstPriceExpiredDate" placeholder="Expired Date" class="form-control"/></td>
        </tr>
		 <tr>
	      <td>Status</td>
	      <td><input type="text" name="MstPriceStatus" placeholder="Status" class="form-control"/></td>
        </tr>
		 <tr>
	      <td>Product</td>
	      <td><select class="form-control" name="MstProductID" placeholder="Product">
          <option value="" selected>--select Product--</option>
            <?php 
             if(empty($produk)){
             echo '<option value=""></option>';
                }else{
               foreach($produk as $row){
               echo '<option value="'.$row->MstProductID.'">'.$row->MstProductType.'</option>';
             }
           } ?>
      </select>
	  </td>
        </tr>
	     <!-- <td>&nbsp;</td>-->
		 <tr>
	      <td colspan="2"><input type="submit" name="simpan" value="Simpan" class="btn btn-primary btn-lg">&nbsp;&nbsp;&nbsp;<input type="reset" name="reseet" value="Simpan" class="btn btn-inverse btn-lg"></td>
        </tr>
    </table>	
    </form>