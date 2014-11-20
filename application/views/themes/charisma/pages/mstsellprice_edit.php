
	<body>
		  <div class="col-lg-6 col-lg-offset-2">
			<form method="POST" action="<?php echo site_url('mstsellprice/proses_edit'); ?>">
			<table class="table table-bordered">
				<?php foreach($daftar->result() as $a):?>
					<tr><input type="hidden" name="MstSellingPriceID" value="<?php echo $a->MstSellingPriceID; ?>" class="form-control input-sm"/></tr>
                    <tr> 
						  <td>Type Product</td>
						  <td><select class="form-control input-sm" name="MstProductID" placeholder="" id="type-product" value="<?php echo $a->MstProductID; ?>" >
		                    <option value=""  disabled selected>--Select Product--</option>
          					<option value="PRODUCT">PRODUCT</option>
                            <option value="PART">PART</option>
                            <option value="MATERIAL">MATERIAL</option>
							
      						</select>
	 					 </td>
					</tr>
                    <tr>
	      				<td>Item</td>
	      				<td><select class="form-control input-detail" data-placeholder="Choose a Option" id="item" name="item">
                    	<option value="" disabled selected>Item</option>
					 
               			</select>
						</td>
        			</tr>
					<tr>
                    	<td>Unit Price</td>
						<td><input type="text" name="MstSellingPriceUnitPrice" value="<?php echo $a->MstSellingPriceUnitPrice; ?>" class="form-control input-sm"/></td>
                    </tr>
					<tr>
                    	<td>Expire Date</td>
						<td><input type="text" name="MstSellingPriceExpiredDate" value="<?php echo $a->MstSellingPriceExpiredDate; ?>" id="tanggal" class="form-control input-sm" /></td>
                    </tr>
					<tr>
                    	<td>Status</td>
						<td><select class="form-control input-sm" name="MstSellingPriceStatus">
							<option value="<?php echo $a->MstSellingPriceStatus; ?>" selected>--select Status--</option>
							<option value="1" selected>Aktif</option>
							<option value="0" selected>Tidak Aktif</option>
							</select>	
						</td>
                     </tr>
                     	
					<tr>
						<td colspan="2"><button type="submit" name="simpan" value="Update"><i class="glyphicon glyphicon-save"></i></button></td>
                    </tr>
				<?php endforeach; ?>
                </table>
			</form>
		</div>
		
		<a href="<?php echo site_url ('mstsellprice');?>">
	<button class="btn btn-round " ><i class="glyphicon glyphicon-arrow-left" ></i></button></a>

	</body>
</html>
<script> 
      $(document).ready(function(){
        $("#tanggal").datepicker({
	format  : "yy-mm-dd", 
          changeMonth : true,
          changeYear  : true
		  
        });
      });
	  
	  $("#type-product").change(function() {
        /* Act on the event */
        var type = $(this).val();

        if(type != null) {
            $.ajax({
                url: "<?php echo site_url('mstsellprice/get_product');?>",
                type: 'GET',
                dataType: 'json',
                data: {type: type},
                success: function(data) {
                        $("#item").empty();
                        $("#item").append('<option value="" disabled selected>Choose a Option</option>');
                        $(data).each(function()
                        {
                            var option = $('<option />');
                            option.attr('value', this.productid).text(this.producttype+' '+this.productvariant+' '+this.productsize);

                            $('#item').append(option);
                        });
                }
            });
            
        }
    });
	  
    </script>