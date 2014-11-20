<style>
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
		<a href="<?php echo site_url('mstprice/tambah/')?>">
		<input type="submit" name="simpan" value="Add New" class="btn btn-primary btn-lg" >
        	</a>
			<hr>
		<hr>
		<table cellpadding="5" cellspacing="5" width="100%" class=" table table-bordered table-hover">
			<tr class="info">
				<th id="judul">No</td>
				<th id="judul">Unit rice</td>
				<th id="judul">Expired Date</td>
				<th id="judul">Status</td>
				<th id="judul">Produk</td>
				<th id="judul" colspan="2">Action</td>
			</tr>
			<?php
				$no=1;
			foreach ($daftar as $a)	{?>
			<tr id="hd" class="hd">
				<td class="hd"><?php echo $no++; ?></td>
				<td class="hd"><?php echo $a->MstPriceUnitPrice; ?></td>
				<td class="hd"><?php echo $a->MstPriceExpiredDate; ?></td>
				<td class="hd"><?php echo $a->MstPriceStatus; ?></td>
				<td class="hd"><?php echo $a->MstProductType; ?></td>
				<td class="hd"><a class="btn btn-default"href="<?php echo site_url ('mstprice/edit/'.$a->MstPriceID)?>">Edit</a></td><td class="hd">
				<a class="btn btn-default" href="<?php echo site_url ('mstprice/hapus/'.$a->MstPriceID)?>">Delete</a></td>
			</tr>
			<?php } ?>
		</table>
		<hr>
		<p>
			
		</p>
		</div>
	</div>

