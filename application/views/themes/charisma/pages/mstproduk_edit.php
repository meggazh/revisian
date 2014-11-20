<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <style>
.input-xs {
    height: 29px;
    padding: 5px 5px;
    font-size: 14px;
    line-height: ;
    border-radius: 5px;
    }
	
#judul,td{
		font-size: 17px  ;
		font-height: 15px ;
		height: 10px ;
}

table td
    {
    	height:23px;
    }
</style>
	</head>
	<body>
		  <div class="container">
   <div class="row">
      <div class="col-md-6"  style=";">
	  <form method="POST" action="<?php echo site_url('mstproduk/proses_edit'); ?>">
            <?php foreach($daftar->result() as $a):?>
             <table class="table table table-bordered ">
						   <input type="hidden" name="MstProductID" value="<?php echo $a->MstProductID; ?>"  class="form-control"/>
						<tr>
						  <td>Type</td>
						  <td><div class="col-lg-9"><input type="text" name="MstProductType"  value="<?php echo $a->MstProductType; ?>"  class="form-control input-xs"/></td>
						</tr>
						<tr><td>Type Product</td>
					<td><div class="col-lg-5"><select class="form-control" name="MstProductTypeProduct" value="<?php echo $a->MstProductTypeProduct; ?>" >
						<option value="" selected>--select Category--</option>
						<option value="1" selected>PRODUCT</option>
						<option value="2" selected>PART</option>
						<option value="3" selected>MATERIAL</option>
						</select></td></tr>
						<tr>
                        <tr><td>Variant</td>
						  <td><div class="col-lg-9"><input type="text" name="MstProductVariant" value="<?php echo $a->MstProductVariant; ?>" class="form-control input-xs"/></td>
						</tr>
						  <td >Group Size</td>
						  <td><div class="col-lg-9"><input type="text" name="MstProductGroupingSize" value="<?php echo $a->MstProductGroupingSize; ?>" class="form-control input-xs"/></td>
						</tr>
						<tr>
						  <td>Category</td>
						  <td><div class="col-lg-8"><select class="form-control" name="MstProductCategory" value="<?php echo $a->MstproductTypeProduct; ?>" >
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
				         <tr>
						     <td>Product Name</td>
						     <td><div class="col-lg-9"><input type="text" name="MstProductName" value="<?php echo $a->MstProductName; ?>"class="form-control input-xs"/></td>
						</tr>
						 <tr>
							  <td>UOM</td>
							  <td><div class="col-lg-9"><input type="text" name="MstProductUOM" value="<?php echo $a->MstProductUOM; ?>" class="form-control input-xs"/></td>
						</tr>
						<tr>
							<td>Status</td>
							  <td><div class="col-lg-9"><input type="text" name="MstProductStatus" value="<?php echo $a->MstProductStatus; ?>" class="form-control input-xs"/></td>
						</tr>
                        <tr>
	     					 <td>Spec ID</td>
	     					 <td><div class="col-lg-9"><input id="MstSpecID" type="text" name="MstSpecID" value="<?php echo $a->MstSpecID; ?>" class="form-control input-sm" readonly onClick="getData(this)" /></td>
                          </tr>
        				<tr>
	    					<td>Group Report ID</td>
	     					 <td><div class="col-lg-9"><input type="text" name="MstGrpReportID" value="<?php echo $a->MstGrpReportID; ?>" class="form-control input-sm"/></td>
       					 </tr>
        	    </table>
          </div>
	
		<table border="" class=" table table-bordered table-condensed">
		  <tr>
		  <td> 
		  <?php
          	$today = date("Y-m-d H:i:s");                   
         	?>
		  <button type="submit" name="simpan" value="Save"><i class="glyphicon glyphicon-save"></i></td>
		  <td><input type="hidden" class="="col-lg-4"" name="MstProductLastUpDate" value="<?php echo $today; ?>" class="form-control input-sm"/>
		  </td>
		      
		  </tr><?php endforeach; ?>
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
		<hr>
		
	</body>
</html>
	