<style>
	

td#fcol { height: 54px; }

</style>

<form method="POST" action="<?php echo site_url('mstemployee/proses_tambah_employee'); ?>">
			
<!--Button Add New Approval-->
			
		
		
		<div class="col-lg-6">
	  <table class="table table-bordered">
	    <tr>
		
	  <input type="hidden" name="MstEmpID" placeholder="MstEmpID" class="form-control"/>
        </tr>
        <tr >
	      <td id="fcol">NIK</td>
	      <td><div class="col-lg-7"><input type="text" name="MstEmpNIK"  class="form-control input-sm" /></td>
        </tr>
	    <tr >
	      <td id="fcol">Name</td>
	      <td><div class="col-lg-9"><input type="text" name="MstEmpName"  class="form-control input-sm" /></td>
        </tr>
	    <tr >
	      <td id="fcol">Division</td>
	      <td><div class="col-lg-8"><input type="text" name="MstEmpDiv"  class="form-control input-sm" /></td>
        </tr>
		<tr >
	      <td id="fcol">Gender</td>
	      <td><div class="col-lg-8"><input type="text" name="MstEmpGender"  class="form-control input-sm" /></td>
        </tr>
	    <tr >
	      <td id="fcol">Education</td>
	      <td><div class="col-lg-8"><input type="text" name="MstEmpEdu" class="form-control input-sm" /></td>
        </tr>
		
		<tr >
		<td id="fcol">Religion</td>
	      <td><div class="col-lg-7"><input type="text" name="MstEmpReligi"  class="form-control input-sm" /></td>
        </tr>
		
        <tr >
	      <td id="fcol">BirdthDate </td>
	      <td><div class="col-lg-6"><input type="text" name="MstEmpBirdthDate"  class="form-control input-sm" placeholder="Pick Brith Date" id="tanggal2" /></td>
        </tr>
		</table>
		</div>
		<div class="col-md-5"  style=";">
	  <table class="table table table-bordered ">
	    <tr>
	      <td>JoinDate</td>
	      <td><div class="col-lg-6"><input type="text" name="MstEmpJoinDate"  class="form-control input-sm" placeholder="Pick Date" id="tanggal" /></td>
        </tr>
	    <tr>
	      <td >Rek</td>
	      <td><div class="col-lg-9"><input type="text" name="MstEmpNoRek"  class="form-control input-sm" /></td>
        </tr>
	    <tr>
	      <td>NoKtp</td>
	      <td><div class="col-lg-8"><input type="text" name="MstEmpNoKtp"  class="form-control input-sm" /></td>
        </tr>
		
		<tr>
		<td>Npwp</td>
	      <td><div class="col-lg-9"><input type="text" name="MstEmpNoNpwp" class="form-control input-sm" /></td>
        </tr>
        <tr>
	      <td>NoJamsos</td>
	      <td><div class="col-lg-9"><input type="text" name="MstEmpNoJamsos" class="form-control input-sm" /></td>
        </tr>
	    <tr>
	      <td>Address</td>
	      <td><div class="col-lg-11"><input type="text" name="MstEmpAddress"  class="form-control input-sm" /></td>
        </tr>
	    <tr>
	      <td >Password</td>
	      <td><div class="col-lg-9"><input type="password" name="MstEmpPassword"  class="form-control input-sm" /></td>
        </tr>
	    <tr>
	      <td>Level</td>
	      <td><div class="col-lg-9"><input type="text" name="MstEmpLevel"  class="form-control input-sm" /></td>
        </tr>
    </table>
	</div>
	<div class="row">
   <div class="col-md-11"  style=";">
		<table border="" class=" table table-bordered table-condensed">
		  <tr><td><button type="submit" name="simpan" value="Save"><i class="glyphicon glyphicon-save" ></i></button></td>
		      <td><button type="reset" name="simpan" value="Reset"><i class="glyphicon glyphicon-pencil"></i></button></td>
		  </tr>
		 </table>
  </div>
</div>
    </form>
	
	<a href="<?php echo site_url ('mstemployee');?>">
	<button class="btn btn-round " ><i class="glyphicon glyphicon-arrow-left" ></i></button></a>
	
 <script> 
      $(document).ready(function(){
        $("#tanggal, #tanggal2").datepicker({
	format  : "dd-mm-yy", 
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