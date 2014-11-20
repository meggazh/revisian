<style>
	

td#fcol { height: 52px; }

</style>

<big>


		  <div class="col-md-6" >
			<form method="POST" action="<?php echo site_url('mstcus/proses_edit'); ?>">
			<table class="table table-bordered">
				<?php foreach($daftar->result() as $a):?>
				<tr><input type="hidden" name="MstCustID" value="<?php echo $a->MstCustID; ?>"/></tr>
				<tr>
                	<td id="fcol">No</td>
					<td><div class="col-lg-8"><input type="text" name="MstCustNo" value="<?php echo $a->MstCustNo; ?>" class="form-control input-sm"/></td>
                </tr>
                <tr>
                	<td id="fcol">Name</td>
					<td><div class="col-lg-8"><input type="text" name="MstCustIDName" value="<?php echo $a->MstCustIDName; ?>" class="form-control input-sm"/></td>
                 </tr>
				<tr>
                	<td id="fcol">Abbrevation</td>
					<td><div class="col-lg-6"><input type="text" name="MstCustIDAbbr" value="<?php echo $a->MstCustIDAbbr; ?>" class="form-control input-sm"/></td>
                </tr>
				<tr>
                	<td id="fcol">Address 1</td>
					<td><div class="col-lg-9"><input type="text" name="MstCustIDAddress1" value="<?php echo $a->MstCustIDAddress1; ?>" class="form-control input-sm"/></td>
                 </tr>
				<tr>
                	<td id="fcol">Address 2</td>
					<td><div class="col-lg-9"><input type="text" name="MstCustIDAddress2" value="<?php echo $a->MstCustIDAddress2; ?>" class="form-control input-sm"/></td>
                </tr>
				<tr>
                	<td id="fcol">Address 3</td>
					<td><div class="col-lg-9"><input type="text" name="MstCustIDAddress3" value="<?php echo $a->MstCustIDAddress3; ?>" class="form-control input-sm"/></td>
                </tr>
				<tr>
                	<td id="fcol">PIC 1</td>
					<td><div class="col-lg-5"><input type="text" name="MstCustIDPIC1" value="<?php echo $a->MstCustIDPIC1; ?>" class="form-control input-sm"/></td>
                 </tr>
				<tr>
                	<td id="fcol">PIC 2</td>
					<td><div class="col-lg-5"><input type="text" name="MstCustIDPIC2" value="<?php echo $a->MstCustIDPIC2; ?>" class="form-control input-sm"/></td>
                </tr>
                </table>
                </div>
		
		   <div class="col-md-5" >
		        <table class="table table-bordered"> 
				<tr>
                	<td>PIC 3</td>
					<td><div class="col-lg-5"><input type="text" name="MstCustIDPIC3" value="<?php echo $a->MstCustIDPIC3; ?>" class="form-control input-sm"/></td>
                </tr>
				<tr>
                	<td>Telp</td>
					<td><div class="col-lg-7"><input type="text" name="MstCustIDNoTlp" value="<?php echo $a->MstCustIDNoTlp; ?>" class="form-control input-sm"/></td>
                </tr>
				<tr>
                	<td>Fax</td>
					<td><div class="col-lg-7"><input type="text" name="MstCustIDNofax" value="<?php echo $a->MstCustIDNofax; ?>" class="form-control input-sm"/></td>
                 </tr>
                 <tr>
                	<td>NPWP</td>
					<td><div class="col-lg-7"><input type="text" name="MstCustIDNpwp" value="<?php echo $a->MstCustIDNpwp; ?>" class="form-control input-sm"/></td>
                 </tr>
				  <tr>
                	<td>NPPK</td>
					<td><div class="col-lg-7"><input type="text" name="MstCustNppkp" value="<?php echo $a->MstCustNppkp; ?>" class="form-control input-sm"/></td>
                 </tr>

				<tr>
                	<td>PIC Email 1</td>
					<td><div class="col-lg-8"><input type="text" name="MstCustIDPICEmail1" value="<?php echo $a->MstCustIDPICEmail1; ?>" class="form-control input-sm"/></td>
                </tr>
				<tr>
                	<td>PIC Email 2</td>
					<td><div class="col-lg-8"><input type="text" name="MstCustIDPICEmail2" value="<?php echo $a->MstCustIDPICEmail2; ?>" class="form-control input-sm"/></td>
                </tr>
				<tr>
                	<td>PIC Email 3</td>
					<td><div class="col-lg-8"><input type="text" name="MstCustIDPICEmail3" value="<?php echo $a->MstCustIDPICEmail3; ?>" class="form-control input-sm"/></td>
                </tr>
				<td>Website</td>
					<td><div class="col-lg-8"><input type="text" name="MstCustWebsite" value="<?php echo $a->MstCustWebsite; ?>" class="form-control input-sm"/></td>
                </tr>
               
				
					<input type="hidden" name="MstEmpID" value="<?php echo $a->MstEmpID; ?>" class="form-control input-sm"/>
           
				<tr>
                	<td>Term of Payment</td>
					<td><div class="col-lg-7"><select class="form-control input-sm" name="MstPayID">
			<option value="" selected>--select TOP--</option>
			<?php 
			if(empty($pay)){
		echo '<option value=""></option>';
			}else{
         foreach($pay as $row){
             echo '<option value="'.$row->MstPayID.'">'.$row->MstPaySyarat.'</option>';
         }
			} ?></select></td>
                 </tr>
				
				<tr><td> <?php
          	            $today = date("Y-m-d H:i:s");                   
         	            ?>
                
                <input type="hidden" class="col-lg-8" name="MstCustLastUpdate" value="<?php echo $today; ?>" class="form-control input-sm" /></td></tr>
				<?php endforeach; ?>
              </table></div>
			  	<div class="row">
                    <div class="col-md-11"  style=";">
		               <table class="table table-striped ">
		                   <tr><td><a href="<?php echo site_url ('mstcus_view');?>" data-original-title="Previous Page" data-toggle="tooltip">
	                               <button class="btn btn-round " ><i class="glyphicon glyphicon-arrow-left" ></i></button></a></td>
		                       <td><button type="submit" name="simpan" value="Save"><i class="glyphicon glyphicon-save"></i></button></td>
		                   </tr>
		       </table>
                    </div>
                </div>
			</form>
	</body>
</html>
