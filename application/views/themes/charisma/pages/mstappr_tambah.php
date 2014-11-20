

 
<form method="POST" action= "<?php echo site_url('mstappr/proses_tambah_appr');?>" >
			
<!--Button Add New Approval-->	
		<div class="col-lg-5 col-lg-offset-3">	
		
		
	  <table class="table table-condensed table-bordered ">
	  <tr>
	      <input type="hidden" name="MstApprID" class="form-control" readonly value="" disabled/>
       </tr>
	   <tr>
	      <td>Approval Name</td>
	      <td><div class="col-lg-10"><input type="text" name="MstApprName"  class="form-control input-sm"/>
		  </td>
        </tr>
        <tr>
	      <td>Approval 1</td>
	      <td><div class="col-lg-10"><input type="text" name="MstAppr1"  class="form-control input-sm"/>
		  </td>
        </tr>
	    <tr>
	      <td>Title</td>
	      <td><div class="col-lg-10"><input type="text" name="MstApprTitle1"  class="form-control input-sm"/>
		  </td></tr>
	   <tr>
	      <td>Approval 2</td>
	      <td><div class="col-lg-10"><input type="text" name="MstAppr2"  class="form-control input-sm"/>
		  </td></tr>
	    <tr>
	      <td>Title</td>
	      <td><div class="col-lg-10"><input type="text" name="MstApprTitle2"  class="form-control input-sm"/>
		  </td></tr>
		<tr>
	      <td>Approval 3</td>
	      <td><div class="col-lg-10"><input type="text" name="MstAppr3"  class="form-control input-sm"/>
		  </td></tr>
	    <tr>
	      <td>Title</td>
	      <td><div class="col-lg-10"><input type="text" name="MstApprTitle3"   class="form-control input-sm"/>
		  </td></tr>
	    <tr>
	      <td>Approval 4</td>
	      <td><div class="col-lg-10"><input type="text" name="MstAppr4"  class="form-control input-sm"/>
		  </td></tr>
	    <tr>
	      <td>Title</td>
	      <td><div class="col-lg-10"><input type="text" name="MstApprTitle4"  class="form-control input-sm"/>
		  </td></tr>
		 <tr>
	   
	     <div class="col-lg-10"><input type="hidden" name="MstEmpID"  class="form-control input-sm"/>
		  </tr>
          
	      <!--<td></td>-->
		  <tr >
	      <td ><center><button type="submit" name="simpan" value="Update"><i class="glyphicon glyphicon-save"></i></button></td>
          <td><center><button type="reset" name="simpan" value="Reset"><i class="glyphicon glyphicon-pencil"></i></button></td>
        </tr>
    </table>	
    </form>
	<a href="<?php echo site_url ('mstappr');?>">
	<label><i class="glyphicon glyphicon-arrow-left" ></i></label></a>
	
	
		<style type="text/css">
				#buttons { margin: 0 auto; width: 90px;  text-align : left; font-size:18px;}
				#reset { margin: 0 auto; width: 180px;  text-align : right; font-size:18px; }
		</style>
	

	<!--$this->form_validation->set_message('is_unique', 'The username is already taken');-->