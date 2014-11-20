 <style>
 tr td { white-space: nowrap; 
 		 font-size: 10px;	
  }
  
  th {   white-space: nowrap;  font-size: 10px; }


</style>
<h1 id="judul"><?php echo $judul; ?></h1>
 <div class="row">
<div class="col-lg-1">
		<a href="<?php echo site_url('mstemployee/tambah/')?>"><H4><button class="btn btn-round btn-default btn-sm"><i class="glyphicon glyphicon-plus"></i></button></a></div>
</H4></div>
		
	<div class="col-lg-12">	
    
    	<div style='overflow-y:scroll;overflow-x:scroll;height:400px; width:1080px; padding:;'>
		<table cellpadding="5" cellspacing="5" width="100%" class=" table table-bordered table-hover table-condensed table-striped well">
			<tr class="info">
				<th id="judul">No</th>
				<th id="judul">NIK</th>
				<th id="judul">Name</th>
				<th id="judul">Division</th>
				<th id="judul">Gender</th>
				<th id="judul">Education</th>
				<th id="judul">Religion</th>
				<th id="judul">BirdthDate</th>
				<th id="judul">JoinDate</th>
				<th id="judul">Rek</th>
				<th id="judul">KTP</th>
				<th id="judul">NPWP</th>
				<th id="judul">NoJamsos</th>
				<th id="judul">Address</th>
				<th id="judul">Password</th>
				<th id="judul">Level</th>
                <th id="judul">Last Up Date</th>
				<th id="judul" colspan="2">Action</td>
			</tr>
			
			<?php 
			 $no=1;
			foreach ($daftar as $a)	{?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $a->MstEmpNIK; ?></td>
				<td><?php echo $a->MstEmpName; ?></td>
				<td><?php echo $a->MstEmpDiv; ?></td>
				<td><?php echo $a->MstEmpGender; ?></td>
				<td><?php echo $a->MstEmpEdu; ?></td>
				<td><?php echo $a->MstEmpReligi; ?></td>
				<td><?php echo $a->MstEmpBirdthDate; ?></td>
				<td><?php echo $a->MstEmpJoinDate; ?></td>
				<td><?php echo $a->MstEmpNoRek; ?></td>
				<td><?php echo $a->MstEmpNoKtp; ?></td>
				<td><?php echo $a->MstEmpNoNpwp; ?></td>
				<td><?php echo $a->MstEmpNoJamsos; ?></td>
				<td><?php echo $a->MstEmpAddress; ?></td>
				<td><?php echo $a->MstEmpPassword; ?></td>
				<td><?php echo $a->MstEmpLevel; ?></td>
                <td><?php echo $a->MstEmpLastUpdate; ?></td>
				<td><a href="<?php echo site_url ('mstemployee/edit/'.$a->MstEmpID)?>" ><i class="glyphicon glyphicon-edit yellow"></i></a></td><td>
				<a href="<?php echo site_url ('mstemployee/hapus/'.$a->MstEmpID)?>" ><i class="glyphicon glyphicon-remove red"></i></a>
 
</td></tr>
			
			<?php } ?>
		</table></div>
		<hr>
	
		</div>
		</div>
