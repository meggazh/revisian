   <style>
 tr td { white-space: nowrap; 
 		 font-size: 12px;	
  }
  
  th {   white-space: nowrap;  font-size: 13px; }


</style>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Dashboard</a>
        </li>
        <li>
            <a href="#">Customer</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-align-justify"></i> Table Customer</h2>

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
                    <a href="<?php echo site_url('mstcus/tambah');?>" class="btn btn-primary">Create New</a>
                </p>
		
		<div style='overflow-y:scroll;overflow-x:scroll;height:400px; width:1000px; padding:;'>
		<table class="table table-striped table-bordered" id="customer-table">
		   <thead>
			<tr class="info">
				<th>No</th>
                <th>No Cust</th>
				<th>Name</th>
				<th>Abbrevation</th>
				<th>Address 1</th>
				<th>Address 2</th>
				<th>Address 3</th>
				<th>PIC 1</th>
				<th>PIC 2</th>
				<th>PIC 3</th>
				<th>Tlp</th>
				<th>Fax</th>
                <th>NPWP</th>
				<th>NPPK</th>
				<th>PIC Email 1</th>
				<th>PIC Email 2</th>
				<th>PIC Email 3</th>
				<th>Website</th>
                <th>Last Update</th>
				<th>Emp ID</th>
				<th>Term of Payment </th>
				<th id="judul" colspan="2">Action</th>
			</tr>
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
        var oTable = $('#customer-table').dataTable({
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
                "sEmptyTable": 'No found Customer, <a href="<?php echo site_url('mstcus/tambah');?>">please add at least one.</a>',
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