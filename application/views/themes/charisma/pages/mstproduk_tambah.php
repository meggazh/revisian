


<div class="container">
   <form method="POST" action="<?php echo site_url('mstproduk/proses_tambah_produk'); ?>">

   <div class="row">
      <div class="col-md-6"  style=";">
             <table class="table table table-bordered ">
						   <input type="hidden" name="MstProductID" class="form-control"/>
					<!--	<td>No Product</td>
						  <td><div class="col-lg-9"><input type="text" name="MstProductNo" class="form-control" value="<?php echo $new_id; ?>" readonly/></td>
						<tr>-->
                        <tr>
						  <td>Type</td>
						  <td><div class="col-lg-9"><input type="text" name="MstProductType" placeholder="" class="form-control input-sm"/></td>
						</tr>
                        <tr><td>Type Product</td>
					<td><div class="col-lg-5"><select class="form-control" name="MstProductTypeProduct" value="<?php echo $a->MstProductTypeProduct; ?>" >
						<option value="" selected>--select Category--</option>
						<option value="PRODUCT" selected>PRODUCT</option>
						<option value="PART" selected>PART</option>
						<option value="MATERIAL" selected>MATERIAL</option>
						</select></td></tr>
                        <tr><td>Variant</td>
						  <td><div class="col-lg-9"><input type="text" name="MstProductVariant" class="form-control input-sm"/></td>
						</tr>
						<tr>
						  <td >Group Size</td>
						  <td><div class="col-lg-9"><input type="text" name="MstProductGroupingSize" placeholder="" class="form-control input-sm"/></td>
						</tr>
						<tr>
						  <td>Category</td>
						  <td><div class="col-lg-8"><select class="form-control" name="MstProductCategory">
						<option value="" selected>--select Category--</option>
						<option value="QRS" selected>KAROSERI</option>
						<option value="STP" selected>STEEL PALLET</option>
						<option value="RQR" selected>REPAIR KAROSERI</option>
						<option value="RTP" selected>REPAIR PALLET</option>
						<option value="PRT" selected>PART</option>
						<option value="MTR" selected>MATERIAL</option>
						</select>
					   </td>
						</tr>
						
						
		</table>
      </div>
           
      <div class="col-md-5" >
	  <table class="table table table-bordered ">
	     <tr><td>Product Name</td>
						  <td><div class="col-lg-9"><input type="text" name="MstProductName" class="form-control input-sm"/></td>
		  </tr>
         <tr>
	      <td>UOM</td>
	      <td><div class="col-lg-9"><input type="text" name="MstProductUOM" class="form-control input-sm"/></td>
        </tr>
		<td>Product Status</td>
	      <td><div class="col-lg-9">
		       <input type="radio" name="MstProductStatus"
					<?php if (isset($MstProductStatus) && $MstProductStatus=="1") echo "checked";?>
				value="1">&nbsp;&nbsp;aktif
			<input type="radio" name="MstProductStatus"
					<?php if (isset($MstProductStatus) && $MstProductStatus=="0") echo "checked";?>
				value="0">&nbsp;&nbsp;non aktif
		  </td>
        </tr>
	    <tr>
	      <td>Spec ID</td>
	      <td><div class="col-lg-9"><input id="MstSpecID" type="text" name="MstSpecID" class="form-control input-sm" readonly onClick="getData(this)" /></td></tr>
        <tr>
	    <td>Group Report ID</td>
	      <td><div class="col-lg-9"><input type="text" name="MstGrpReportID" class="form-control input-sm"/></td>
        </tr>
		
	    
	      <div class="col-lg-9"><input type="hidden" name="MstEmpID" class="form-control input-sm"/>
        
		<tr>
	    
		<?php
          	$today = date("Y-m-d H:i:s");                   
         	?>
        </tr>
		</table>
		      </div>
	</div>
     <div class="row">
   <div class="col-md-12"  style=";">
		<table border="" class=" table table-bordered table-condensed">
		  <tr>
		  <td>
		  <button type="submit" name="simpan" value="Save"><i class="glyphicon glyphicon-save"></i></button>
		  <input type="hidden" class="="col-lg-4"" name="MstProductLastUpDate" value="<?php echo $today; ?>" class="form-control input-sm"/>
		  <button type="reset" name="simpan" value="Reset"><i class="glyphicon glyphicon-pencil"></i></button>
		  </td>
		  </tr>
		 </table>
  </div>
</div>
</form>
<a href="<?php echo site_url ('mstproduk');?>">
	<button class="btn btn-round "><i class="glyphicon glyphicon-arrow-left"></i></button></a>
	</div>
<script>
function getData(tmpObject) {
    var id=$("#suplier").val();
	var id_customer=$("#id_customer").val();
	var strNama = tmpObject.name;
	var x = strNama.split("_")[1];
	window.open('<?php echo site_url ('mstspec/spec/'); ?>?var=' + strNama+'&id='+id_customer,"mywindow","menubar=no,url=no,width=1000,height=500,left=300,top=200");

}
</script>



