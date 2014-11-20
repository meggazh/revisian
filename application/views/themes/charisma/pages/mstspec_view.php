  <style>
 tr td { white-space: nowrap; 
 		 font-size: 12px;	
  }
  
  th {   white-space: nowrap;  font-size: 13px; }


</style>
<div class="row">
<div class="col-lg-1">
		<a href="<?php echo site_url('mstspec/tambah/')?>"><H4><button class="btn btn-round btn-default btn-sm"><i class="glyphicon glyphicon-plus"></i></button></a></div>
</H4>
		
	
		<table class="" id="spec-table">
		   <thead>
			<tr class="info">
				<th>No</th>
				<th>Desc</th>
				<th>Activator</th>
				<th>Base</th>
				<th>Cross Member</th>
				<th>Wall</th>
                <th>Side Door</th>
                <th>Wing</th>
                <th>Inner Roof</th>
                <th>Side Guard</th>
                <th>Back Bumper</th>
                <th>Lamp</th>
                <th>Painting</th>
                <th>Back Door</th>
                <th>Rear Door</th>
                <th>Stair</th>
                <th>Last Update</th>
				<th>Last Update</th>
				<th>Last Update</th>
				<th>Action</th>
			</thead>
		<tbody>
        </tbody>
		</table>
	
        		</div>
            </div>
        </div>
    </div>
</div><!--/row-->

<script>
    $(document).ready(function() {
        /* Init Data Table */
        var oTable = $('#spec-table').dataTable({
            "sDom": "<'row'<'col-md-6'l><'col-md-6'f>r>t<'row'<'col-md-12'i><'col-md-12 center-block'p>>",
            "sPaginationType": "bootstrap",
             "sAjaxSource": '<?php echo site_url($path_table);?>',
                "bJQueryUI": false,
                "iDisplayStart ":20,
                "oLanguage": {
            "sProcessing": ""
            },
            "oLanguage": {
                "sLengthMenu": "_MENU_ records per page",
                "sInfo": 'Showing _END_ Sources.',
                "sInfoEmpty": 'No entries to show',
                "sEmptyTable": 'No found Customer, <a href="<?php echo site_url('mstspec/tambah');?>">please add at least one.</a>',
                "sProcessing": ""
            },
                "fnInitComplete": function() {
               // oTable.fnAdjustColumnSizing();
             },
            'fnServerData': function(sSource, aoData, fnCallback)
                {
                  $.ajax
                  ({
                    'dataType': 'json',
                    'type'    : 'POST',
                    'url'     : sSource,
                    'data'    : aoData,
                    'success' : fnCallback
                  });
                },
            "aoColumnDefs": [
                {
                    'bSortable' : false,
                    'aTargets' : [ 4 ]
                },
                { "sWidth": "160px", "aTargets": [ 4 ] }
            ]
        });
    });
</script>