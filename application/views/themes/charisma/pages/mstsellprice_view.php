<style>
	th { white-space:nowrap;
		}

	tr td { white-space:nowrap;
	font-size:13px;
			
		}
	tr td#action { width:20px;}
	
		@font-face {
    font-family: tes;
    src: url(assets/charisma/fonts/Chunkfive.otf);
	
}

h1#judul{
    font-family: tes;
	color:#00CCFF;
}


</style>

<h1 id="judul"><?php echo $judul; ?></h1>
<div class="col-lg-10">

<div class="row">
<div class="col-lg-1">
		<a href="<?php echo site_url('mstsellprice/tambah/')?>"><H4><button class="btn btn-round btn-default btn-sm"><i class="glyphicon glyphicon-plus"></i></button></a></div>
</H4></div>
		
         <div class="col-lg-12">
		 <div style='overflow-y:scroll;overflow-x:scroll;height:400px; width:1000px; padding:;'>
		 <table cellpadding="5" cellspacing="5" width="100%" class=" table table-bordered table-hover table-condensed table-striped well">
			<tr class="info">
				<th id="judul">No</td>
				<th id="judul">Product </td>
                <th id="judul">Unit Price</td>
				<th id="judul">Expired Date</td>
				<th id="judul">Status</td>
                <th id="judul">Employee</td>
				<th id="judul" colspan="2">Action</td>
			</tr>
			<?php
				$no=1;
			foreach ($daftar as $a)	{?>
			<tr >
				<td ><?php echo $no++; ?></td>
				<td><?php echo $a->MstProductID; ?></td>
                <td><?php echo $a->MstSellingPriceUnitPrice; ?></td>
				<td><?php echo $a->MstSellingPriceExpiredDate; ?></td>
				<td ><?php echo $a->MstSellingPriceStatus; ?></td>
                <td><?php echo $a->MstEmpID; ?></td>
				<td><a href="<?php echo site_url ('mstsellprice/edit/'.$a->MstSellingPriceID)?>"><i class="glyphicon glyphicon-edit yellow"></i></a></td><td>
				<a href="<?php echo site_url ('mstsellprice/hapus/'.$a->MstSellingPriceID)?>"><i class="glyphicon glyphicon-remove red"></i></a></td>
			</tr>
			<?php } ?>
		</table>
		</div>

