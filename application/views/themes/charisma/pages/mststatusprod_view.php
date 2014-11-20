<style>
	th { white-space:nowrap;
		}

	tr td { white-space:nowrap;
	font-size:13px;	
		}
		
	 @font-face {
    font-family: tes;
    src: url(assets/charisma/fonts/Chunkfive.otf);
	
}

h1#judul{
    font-family: tes;
	color:#00CCFF;}

</style>
<h1 id="judul"><?php echo $judul; ?></h1>
<div class="row">
<div class="col-lg-1">
		<a href="<?php echo site_url('mststatusprod/tambah/')?>"><H4><button class="btn btn-round btn-default btn-sm"><i class="glyphicon glyphicon-plus"></i></button></a></div>
</H4></div>
</div>

<div class="col-lg-10">	
	     <div style='overflow-y:scroll;overflow-x:scroll;height:400px; width:1080px; padding:;'>
		<table cellpadding="5" cellspacing="5" width="100%" class=" table table-bordered table-hover table-condensed table-striped well">
			<tr class="info">
				<th>No</td>
				<th>Product Group</td>
				<th>SubGroup</td>
				<th>Job</td>
				<th id="judul" colspan="2">Action</td>
			</tr>
			<?php foreach ($daftar as $a)	{?>
			<tr id="hd" class="hd">
				<td><?php echo $a->MstStatusProdID; ?></td>
				<td><?php echo $a->MstStatusProdGroup; ?></td>
				<td><?php echo $a->MstStatusProdSubGroup; ?></td>
				<td><?php echo $a->MstStatusProdJob; ?></td>
				<td><a href="<?php echo site_url ('mststatusprod/edit/'.$a->MstStatusProdID)?>" ><i class="icon glyphicon glyphicon-edit yellow "></i></a></td>
				<td><a href="<?php echo site_url ('mststatusprod/hapus/'.$a->MstStatusProdID)?>" ><i class="icon glyphicon glyphicon-remove red "></i></a></td>
			</tr>
			<?php } ?>
		</table></div>
		</div>


	</body>
</html>
