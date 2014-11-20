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
            <a href="#">Product</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-align-justify"></i> Table Product</h2>

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
                    <a href="<?php echo site_url('mstproduk/tambah');?>" class="btn btn-primary">Create New</a>
                </p>
		
		<div style='overflow-x:scroll;width:100; padding:;'>
		<table class="table table-striped table-bordered" id="produk-table">
        <thead>
			<tr class="info">
				<th>Type</th>
                <th>Type Product</th>
				<th>Variant</th>
                <th>Grouping Size</th>
                <th>Category</th>
				<th>Product Name</th>	
				<th>UOM</th>
				<th>Status</th>
				<th>Last Update</th>
				<th>Spec ID</th>
				<th>Group Report ID</th>
				<th>Status</th>
				<th>Created</th>
			
			</tr>
          </thead>
          </table>
			
		
		
					</div>
				</div>
			</div>
		</div>
	<script>
    $(document).ready(function() {
        /* Init Data Table */
        var oTable = $('#produk-table').dataTable({
            "sDom": "<'row'<'col-md-6'l><'col-md-6'f>r>t<'row'<'col-md-12'i><'col-md-12 center-block'p>>",
            "sPaginationType": "bootstrap",
             "sAjaxSource": '<?php echo site_url('mstproduk/get_all');?>',
                "bJQueryUI": false,
                "iDisplayStart ":20,
                "oLanguage": {
            "sProcessing": ""
            },
            "oLanguage": {
                "sLengthMenu": "_MENU_ records per page",
                "sInfo": 'Showing _END_ Sources.',
                "sInfoEmpty": 'No entries to show',
                "sEmptyTable": 'No found Customer, <a href="<?php echo site_url('mstproduk/tambah');?>">please add at least one.</a>',
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