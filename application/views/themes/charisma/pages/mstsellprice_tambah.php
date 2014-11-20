 
 <!--
 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
-->

<form method="POST" action="<?php echo site_url('mstsellprice/proses_tambah_sellprice'); ?>">
			
	
<!--Button Add New Approval-->
<div class="col-lg-5 col-lg-offset-2">
	  <table class="table table-bordered table-condensed">
	    <tr>
	      <input type="hidden" name="MstSellPriceID"/>
        </tr>
        <tr>
	      <td>Type Product</td>
	      <td><select class="form-control input-sm" name="MstProductID" placeholder="" id="type-product" >
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
	      <td><input type="text" name="MstSellingPriceUnitPrice"  class="form-control input-sm"/></td>
        </tr>
		 <tr>
	      <td>Expire Date</td>
	      <td><input type="text" name="MstSellingPriceExpiredDate" placeholder="Date" id="tanggal" class="form-control input-sm" /></td>
        </tr>
		 <tr>
	      <td>Status</td>
	      <td>
            <input type="radio" name="MstSellingPriceStatus"
					<?php if (isset($MstSellingPriceStatus) && $MstSellingPriceStatus=="1") echo "checked";?>
				value="1">&nbsp;&nbsp;aktif
			<input type="radio" name="MstSellingPriceStatus"
					<?php if (isset($MstSellingPriceStatus) && $MstSellingPriceStatus=="0") echo "checked";?>
				value="0">&nbsp;&nbsp;non aktif
	    	</td>
          </tr>
	     <!-- <td>&nbsp;</td>-->
		 <tr>
	      <td><button type="submit" name="simpan" value="Save"><i class="glyphicon glyphicon-save"></i></button></td><td><button type="reset" name="simpan" value="reset"><i class="glyphicon glyphicon-pencil"></i></button></td>
        </tr>
    </table>	
    </form>

	<a href="<?php echo site_url ('mstsellprice');?>">
	<button class="btn btn-round "><i class="glyphicon glyphicon-arrow-left"></i></button></a>
	</div>
    
    
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