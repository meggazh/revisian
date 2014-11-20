
<big>

<div class="container">
   <div class="row">
		  <div class="col-md-5" >
			<form method="POST" action="<?php echo site_url('mstcus/proses_tambah_cus'); ?>">
				<table class="table table-bordered ">
					<input type="hidden" name="MstCustID" class="form-control input-sm" />   
					<td>No Customer</td>
					  <td><div class="col-lg-6"><input name="MstCustNo" type="text" class="form-control  input-sm " value="<?php echo $new_id; ?>" readonly/></td>
					<tr>
					  <td>Nama </td>
					  <td><div class="col-lg-9"><input name="MstCustIDName" type="text"  class="form-control input-sm"/></td>
					</tr>
					<tr>
					  <td>Abbrevation</td>
					  <td><div class="col-lg-8"><input type="text" name="MstCustIDAbbr"  class="form-control input-sm"/></td>
					</tr>
					<tr>
					  <td>Address 1</td>
					  <td><div class="col-lg-11"><input type="text" name="MstCustIDAddress1"  class="form-control input-sm"/></td>
					</tr>
					<tr>
					  <td>Address 2</td>
					  <td><div class="col-lg-11"><input type="text" name="MstCustIDAddress2"  class="form-control input-sm"/></td>
					</tr>
					<tr>
					  <td>Address 3</td>
					  <td><div class="col-lg-11"><input type="text" name="MstCustIDAddress3"  class="form-control input-sm"/></td>
					</tr>
					<tr>
				  
					<tr>
					  <td>PIC 1</td>
					  <td><div class="col-lg-7"><input type="text" name="MstCustIDPIC1"  class="form-control input-sm"/></td>
					</tr>
					<tr>
					  <td>PIC 2</td>
					  <td><div class="col-lg-7"><input type="text" name="MstCustIDPIC2"  class="form-control input-sm"/></td>
					</tr>
					<tr>
					  <td>PIC 3</td>
					  <td><div class="col-lg-7"><input type="text" name="MstCustIDPIC3"  class="form-control input-sm"/></td>
					</tr>
				 </table>
		 </div>  
	  
		  <div class="col-md-5" >
		         <table class="table table-bordered"> 
					<tr>
					  <td>Telp</td>
					  <td><div class="col-lg-9"><input type="text" name="MstCustIDNoTlp"  class="form-control input-sm"/></td>
					</tr>
					 <tr>
					  <td>Fax</td>
					  <td><div class="col-lg-9"><input type="text" name="MstCustIDNofax"  class="form-control input-sm"/></td>
					</tr>
					<tr>
					  <td>NPWP</td>
					  <td><div class="col-lg-9"><input type="text" name="MstCustIDNpwp"  class="form-control input-sm"/></td>
					</tr>
					<tr>
					  <td>NPPK</td>
					  <td><div class="col-lg-9"><input type="text" name="MstCustNppkp"  class="form-control input-sm"/></td>
					</tr>
					
					<tr>
						  <td>PIC Email 1</td>
						  <td><div class="col-lg-11"><input type="text" name="MstCustIDPICEmail1"  class="form-control input-sm"/></td>
					</tr>
					<tr>
						  <td>PIC Email 2</td>
						  <td><div class="col-lg-11"><input type="text" name="MstCustIDPICEmail2"  class="form-control input-sm"/></td>
					</tr>
					<tr>
						  <td>PIC Email 3</td>
						  <td><div class="col-lg-11"><input type="text" name="MstCustIDPICEmail3"  class="form-control input-sm"/></td>
					</tr> 
					<tr>
						  <td>Website</td>
						  <td><div class="col-lg-11"><input type="text" name="MstCustWebsite"  class="form-control input-sm"/></td>
					</tr>
                    <?php
          	$today = date("Y-m-d H:i:s");                   
         	?>
                    <input type="hidden" class="col-lg-4" name="MstCustLastUpdate" value="<?php echo $today; ?>" class="form-control input-sm"/>
                   </td> </tr>
					
                    <tr>
						  <input type="hidden" name="MstEmpID"  class="form-control input-sm"/></tr>
					<tr>
						  <td>Term of Payment</td>
						  <td><div class="col-lg-10"><select class="form-control input-sm" name="MstPayID">
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
					      
                    </table>
			</div>
					<div class="col-md-10" >
					<table  class="table table-bordered">
                   <tr>
                   <input type="hidden" name="MstCustLastUpdate"value="<?php echo $today; ?>" class="form-control input-sm"/>
                    <td><center><a href="<?php echo site_url ('mstcus/index');?>" data-original-title="Previous Page" data-toggle="tooltip">
	<label><i class="glyphicon glyphicon-arrow-left" ></i></label></a></td>
                    <td><center><button type="submit" name="simpan" value="Save"><i class="glyphicon glyphicon-save" ></i></button></a></td>
                    </tr>
                    
			   </table></div>
               </form>
               
		 </div> 
		
		  
		  

</div>   </div></div>




