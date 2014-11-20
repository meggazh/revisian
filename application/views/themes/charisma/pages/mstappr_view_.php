
<html>
<head><title></title>
<style>

 .pagination {
	padding: 3px;
	margin: 3px;
	text-align:center;
}

.pagination a {
	padding: 2px 5px 2px 5px;
	margin: 2px;
	border: 1px solid #EEE;
	text-decoration: none; /* no underline */
	color: #036CB4;
}

.pagination a:hover,
.pagination a:active {
	border: 1px solid #999;
	color: #666;
}
.pagination .current {
	padding: 2px 5px 2px 5px;
	margin: 2px;
	border: 1px solid #036CB4;
	font-weight: bold;
	background-color: #036CB4;
	color: #FFF;
}
.pagination .disabled {
	padding: 2px 5px 2px 5px;
	margin: 2px;
	border: 1px solid #EEE;
	color: #DDD;
}

</style>	</head>

<body>

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
	color:#00CCFF;
}


</style>


<div class="row">
<div class="col-lg-1">
		<a href="<?php echo site_url('mstappr/tambah/')?>"><H4><button class="btn btn-round btn-default btn-sm"><i class="glyphicon glyphicon-plus"></i></button></a></div>
</H4>

	<h1 id="judul"><?php echo $judul; ?></h1>


	

		<div style='overflow-y:scroll;overflow-x:scroll;height:400px; width:1080px; padding:;'>
		<table border="0" class=" table table-condensed table-striped table-bordered well">
		
			<thead>
			<tr class="info">
				<th id="judul">No</th>
                <th id="judul">Name </th>
				<th id="judul">Appr 1</th>
				<th id="judul">Title</th>
				<th id="judul">Appr 2</th>
				<th id="judul">Title</th>
				<th id="judul">Appr 3</th>
				<th id="judul">Title</th>
				<th id="judul">Appr 4</th>
                <th id="judul">Title</th>
				<th id="judul" colspan="2">Action</td>
			</tr>
			 </thead>
			<?php if(empty($daftar)) echo "<tr><td>Data Kosong </td></tr>"; else
			$no=1;
			foreach ($daftar as $a)	{?>
			<tr>
				<td><?php echo $no++; ?></td>
                <td><?php echo $a->MstApprName; ?></td>
				<td><?php echo $a->MstAppr1; ?></td>
				<td><?php echo $a->MstApprTitle1; ?></td>
				<td><?php echo $a->MstAppr2; ?></td>
				<td><?php echo $a->MstApprTitle2; ?></td>
				<td><?php echo $a->MstAppr3; ?></td>
				<td><?php echo $a->MstApprTitle3; ?></td>
				<td><?php echo $a->MstAppr4; ?></td>
				<td><?php echo $a->MstApprTitle4; ?></td>
				
				<td ><a href="<?php echo site_url ('mstappr/edit/'.$a->MstApprID)?>"  ><i class="icon glyphicon glyphicon-edit yellow "></i></a></td>
				<td ><a href="<?php echo site_url ('mstappr/hapus/'.$a->MstApprID)?>" data-toggle="modal" data-target="#confirm-delete"><i class="icon glyphicon glyphicon-remove red"></i></a></td>
             </tr>	
			<?php } ?>
		</table></div></div>
		
	 
			
		
		<div class="pagination pagination-centered">
		<ul>
		<?php
			echo $halaman;
		?>
		</ul>
	</div>
</div>


</body>
</html>


