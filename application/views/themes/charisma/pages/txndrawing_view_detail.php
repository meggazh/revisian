 <style>
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
		<a href="<?php echo site_url('txndrawing/adddrawing/')?>"><H4><button class="btn btn-round btn-default btn-sm"><i class="glyphicon glyphicon-plus"></i></button></a></div>
</H4>

		
			
<table cellpadding="5" cellspacing="5" width="100%" class=" table table-bordered table-hover table-condensed table-striped well">
			<tr class="info">
				<th id="judul">No Drawing</th>
				<th id="judul">Date</th>
				<th id="judul">Tiitle</th>
                <th id="judul">Status</th>
				<th id="judul" colspan="2">Action</td>
			</tr>
            <?php foreach ($daftar as $a)	{?>
			<tr id="hd" class="hd">
				<td class="hd"><?php echo $a->TxnDrawNo; ?></td>
				<td class="hd"><?php echo $a->TxnDrawDate; ?></td>
                <td class="hd"><?php echo $a->TxnDrawTitle; ?></td>
				<td class="hd"><?php echo $a->TxnDrawStatus; ?></td>
				<td align="center">
                <a href="<?php echo site_url ('txndrawing/edit/'.$a->TxnDrawID)?>" ><i class="glyphicon glyphicon-edit yellow"></i></a>
                </td>
                <td align="center">
				<a href="<?php echo site_url ('txndrawing/hapus/'.$a->TxnDrawID)?>" ><i class="glyphicon glyphicon-remove red"></i></a>
                </td>	
            </tr>
			
<?php } ?>
		</table>
        
       