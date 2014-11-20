<style>
 tr td { white-space: nowrap; 
 		 font-size: 12px;	
  }
  
  th {   white-space: nowrap;  font-size: 13px; }


</style>

<div class="row">
<div class="col-lg-1">
		<a href="<?php echo site_url('mstappr/tambah/')?>"><H4><button class="btn btn-round btn-default btn-sm"><i class="glyphicon glyphicon-plus"></i></button></a></div>
</H4>

		
		<!--<div style='overflow-y:scroll;overflow-x:scroll;height:340px; width:1000px; padding:;'>-->
		<table border="0" class=" ">
			<thead>
			<tr class="success">
				<th id="judul">No</th>
				<th id="judul">Appr Name</th>
				<th id="judul">Appr 1</th>
				<th id="judul">Title</th>
				<th id="judul">Appr 2</th>
				<th id="judul">Title</th>
				<th id="judul">Appr 3</th>
				<th id="judul">Title</th>
				<th id="judul">Appr 4</th>
                <th id="judul">Title</th>
                <th id="judul">Emp ID</th>
				<th id="judul" colspan="2">Action</td>
			</tr>
			 </thead>
			<?php if(empty($daftar)) echo "<tr><td>Data Kosong </td></tr>"; else
			$no=1;
			foreach ($daftar as $a)	{?>
			<tbody>
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
                <td><?php echo $a->MstEmpID; ?></td>
				<td ><a href="<?php echo site_url ('mstappr/edit/'.$a->MstApprID)?>" id="confirmEdit"confirmDelete"><i class="icon glyphicon glyphicon-edit yellow "></i></a></td>
				<td ><a href="<?php echo site_url ('mstappr/hapus/'.$a->MstApprID)?>" id="confirmDelete"confirmDelete" ><i class="icon glyphicon glyphicon-remove red"></i></a></td>
             </tr>
			 </tbody>
			<?php } ?>
		</table></div></div>
		
	 <!--<?ph  if(!empty($halaman)) echo $halaman; else echo "halaman kosong";    ?> </p>  -->
			
		
		<div class="pagination pagination-centered">
		<ul>
		<!--<?ph
			echo $halaman;
		?>-->
		</ul>
	</div>
</div>
<script type="text/javascript">
    $("#confirmDelete").on
('show.bs.modal', function(e){
     $(this).find('#confirm').attr('href',
$(e.relatedTarget).data('href'));
    });
</script>


<div id="confirmDelete" class="modal fade" role="dialog" aria-lebelledby="confirmDeleteLebel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Confirmation</h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure want to delete this record?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-sm"
id="confirm">OK</button>
                    <button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div class="caption img-gallery-caption">
        <?php
        $attributes = array('data-toggle' => 'modal', 'data-target' => '#confirmDelete', 'data-title' =>'Delete Image', 'data-message' =>'Are you sure you want to delete this Image?');
        echo anchor('mstappr/edit/'.$a->MstApprID, '<i class="glyphicon glyphicon-edit"></i>', $attributes);
        echo anchor('mstappr/hapus/'.$a->MstApprID, '<iclass="glyphicon glyphicon-trash"></i>');
        ?>
</div>