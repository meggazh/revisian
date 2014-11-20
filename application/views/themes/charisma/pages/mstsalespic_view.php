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
	color:#00CCFF; }

</style>
<h1 id="judul"><?php echo $judul; ?></h1>
<div class="col-lg-10">
	
	
		<div class="row">
<div class="col-lg-1">
		<a href="<?php echo site_url('mstsalespic/tambah/')?>"><H4><button class="btn btn-round btn-default btn-sm"><i class="glyphicon glyphicon-plus"></i></button></a></div>
</H4>
</div>
	    <div style='overflow-y:scroll;overflow-x:scroll;height:400px; width:1080px; padding:;'>
		<table cellpadding="5" cellspacing="5" width="100%" class=" table table-bordered table-hover table-condensed table-striped well">
			<tr class="info">
				<th id="judul">No</th>
				<th id="judul">Name</th>
				<th id="judul">Email</th>
				
				<th id="judul" colspan="2">Action</th>
			</tr>
			<?php 
			$no=1;
			foreach ($daftar as $a)	{?>
			<tr id="hd" class="hd">
				<td class="hd"><?php echo $no++; ?></td>
				<td class="hd"><?php echo $a->MstSalesPICName; ?></td>
				<td class="hd"><?php echo $a->MstSalesPICPICEmail1; ?></td>
				<td class="hd"><a href="<?php echo site_url ('mstsalespic/edit/'.$a->MstSalesPICID)?>" ><i class="glyphicon glyphicon-edit yellow"></i></a></td><td class="hd">
				<a href="<?php echo site_url ('mstsalespic/hapus/'.$a->MstSalesPICID)?>" ><i class="glyphicon glyphicon-remove red"></i></a></td>
			</tr>
			<?php } ?>
		</table></div>
		
	
		</div>
		</div>
	</body>
</html>
