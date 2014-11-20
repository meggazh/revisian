
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
      
	
	</head>
	<body>
	<!--Container-->
	
		<hr>
		<!--<fieldset>-->
			<form method="POST" action="<?php echo site_url('mstemployee/proses_edit'); ?>">
			<div class="col-lg-6">
				<table class="table  table-bordered ">
					<tr>
							<!--<td>Empployee ID</td>-->
							<?php foreach($daftar->result() as $a):?>
								<div class="col-lg-4"><input type="hidden" name="MstEmpID" value="<?php echo $a->MstEmpID; ?>" class="form-control input-sm"/>
					<tr>	
							<td>NIK</td>
							<td><div class="col-lg-6"><input type="text" name="MstEmpNIK" value="<?php echo $a->MstEmpNIK; ?>" class="form-control input-sm"/></td></tr>
					<tr>
							<td>Name</td>
							<td><div class="col-lg-9"><input type="text" name="MstEmpName" value="<?php echo $a->MstEmpName; ?>" class="form-control input-sm"/></td></tr>
					<tr>
							<td>Division</td>
							<td><div class="col-lg-6"><input type="text" name="MstEmpDiv" value="<?php echo $a->MstEmpDiv;?>" class="form-control input-sm"/></td></tr>
					<tr>
							<td>Gender</td>
							<td><div class="col-lg-6"><input type="text" name="MstEmpGender" value="<?php echo $a->MstEmpGender;?>" class="form-control input-sm"/></td></tr>
					<tr>
							<td>Education</td>
							<td><div class="col-lg-6"><input type="text" name="MstEmpEdu" value="<?php echo $a->MstEmpEdu;?>" class="form-control input-sm"/></td></tr>
					<tr>
							<td>Religion</td>
							<td><div class="col-lg-6"><input type="text" name="MstEmpReligi" value="<?php echo $a->MstEmpReligi;?>" class="form-control input-sm"/></td></tr>
							
							
					<tr>
							<td>BirdtDate</td>
							<td>
								<div class="col-lg-4"><input type="text" name="MstEmpBirdthDate" value="<?php echo $a->MstEmpBirdthDate; ?>" class="form-control input-sm"/></td></tr>
					</table>
		</div>
		<div class="col-md-5"  style=";">
	  <table class="table table table-bordered ">
					<tr>	
							<td>JoinDate</td>
							<td><div class="col-lg-4"><input type="text" name="MstEmpJoinDate" value="<?php echo $a->MstEmpJoinDate; ?>" class="form-control input-sm"/></td></tr>
					<tr>
							<td>Rek</td>
							<td><div class="col-lg-8"><input type="text" name="MstEmpNoRek" value="<?php echo $a->MstEmpNoRek; ?>" class="form-control input-sm"/></td></tr>
					<tr>
							<td>KTP</td>
							<td><div class="col-lg-8"><input type="text" name="MstEmpNoKtp" value="<?php echo $a->MstEmpNoKtp;?>" class="form-control input-sm"/></td></tr>
					<tr>
							<td>NNPWP</td>
							<td><div class="col-lg-8"><input type="text" name="MstEmpNoNpwp" value="<?php echo $a->MstEmpNoNpwp;?>" class="form-control input-sm"/></td></tr>
					<tr>
							<td>NoJamsos</td>
							<td><div class="col-lg-8"><input type="text" name="MstEmpNoJamsos" value="<?php echo $a->MstEmpNoJamsos;?>" class="form-control input-sm"/></td></tr>
							
							
					<tr>
							<td>Address</td>
							<td><div class="col-lg-5"><input type="text" name="MstEmpAddress" value="<?php echo $a->MstEmpAddress;?>" class="form-control input-sm"/></td></tr>
					<tr>
							<td>Password</td>
							<td><div class="col-lg-5"><input type="password" name="MstEmpPassword" value="<?php echo $a->MstEmpPassword;?>" class="form-control input-sm"/></td></tr>
					<tr>
							<td>Level</td>
							<td><div class="col-lg-5"><input type="text" name="MstEmpLevel" value="<?php echo $a->MstEmpLevel;?>" class="form-control input-sm"/></td></tr>	
							<?php endforeach; ?>
				</table>
				</div>
				
				<div class="row">
   <div class="col-md-12"  style=";">
		<table border="" class=" table table-bordered table-condensed">
		  <tr><td><button type="submit" name="simpan" value="Save"><i class="glyphicon glyphicon-save"></i></button></td>
		  </tr>
		 </table>		
			</form>
	<a href="<?php echo site_url ('mstemployee');?>">
	<button class="btn btn-round " ><i class="glyphicon glyphicon-arrow-left" ></i></button></a>
	</div>
		<hr>
		
	</body>
</html>
<style>
.input-sm {
    height: 22px;
    padding: 5px 5px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 3px;
    }
	
#judul,td{
		font-size: 12px  ;
		font-height: 15px ;
		height: 7px ;
}

table td
    {
    	height:20px;
    }
</style>