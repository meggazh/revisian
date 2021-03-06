
<style>
 tr td { white-space: nowrap; 
 		
  }
  
  th {   white-space: nowrap;  }

  
</style>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Dashboard</a>
        </li>
        <li>
            <a href="#">Specification</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-align-justify"></i> Table Specification</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <!-- put your content here -->
                <p>
                    <a href="<?php echo site_url('mstspec/tambah');?>" class="btn btn-primary">Create New</a>
                </p>
				 <div style='overflow-x:scroll;width:100'>
				<center>
               <table class="table table-striped table-bordered table-condensed" id="quotation-table">
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
					<th>Created</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
               </table>
			   </center>
            </div>
        </div>
    </div>
</div><!--/row-->
<script>// dari atas sampe bawah itu javascript nya 
    $(document).ready(function() {
        /* Init Data Table */
        var oTable = $('#quotation-table').dataTable({
            "sDom": "<'row'<'col-md-6'l><'col-md-6'f>r>t<'row'<'col-md-12'i><'col-md-12 center-block'p>>",
            "sPaginationType": "bootstrap",
             "sAjaxSource": "<?php echo site_url('mstspec/get_all');?>",//ini ambil string dari controller (PENTING)
                "bJQueryUI": false,
                "iDisplayStart ":20,
                "oLanguage": {
            "sProcessing": ""
            },
            "oLanguage": {
                "sLengthMenu": "_MENU_ records per page",
                "sInfo": 'Showing _END_ Sources.',
                "sInfoEmpty": 'No entries to show',
                "sEmptyTable": 'No found Quotation, <a href="">please add at least one.</a>',
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
