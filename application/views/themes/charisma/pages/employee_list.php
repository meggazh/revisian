<style>
 tr td { white-space: nowrap; 
 		 font-size: 12px;	
  }
  
  th {   white-space: nowrap;  font-size: 15px; }

  
</style>

<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Dashboard</a>
        </li>
        <li>
            <a href="#">Employee</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-align-justify"></i> Table Employee</h2>

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
                    <a href="<?php echo site_url('mstemployee/tambah');?>" class="btn btn-primary">Create New</a>
                </p>
          <div style='overflow-x:scroll;width:100'>      
         <table width="800" class="table table-striped table-bordered table-condensed" id="employee-table">
			<thead>
            <tr class="info">
            	<tr class="info">
				<th width="30">No</th>
				<th width="40">NIK</th>
				<th width="150">Name</th>
				<th width="150">Division</th>
				<th width="50">Gender</th>
				<th width="150">Education</th>
				<th width="150">Religion</th>
				<th width="100">BirdthDate</th>
				<th width="100">JoinDate</th>
				<th width="100">Rek</th>
				<th width="100">KTP</th>
				<th width="100">NPWP</th>
				<th width="100">NoJamsos</th>
				<th width="150">Address</th>
				<th width="100">Password</th>
				<th width="100">Level</th>
                <th width="100">Last Up Date</th>
				<th width="60"><div align="center">Action</div></td>
			</tr>
           </thead>
             <tbody>
             </tbody>
            </table>
            
    <script>
    $(document).ready(function() {
        /* Init Data Table */
        var oTable = $('#employee-table').dataTable({
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
                "sEmptyTable": 'No found sell price, <a href="<?php echo site_url('mstemployee/tambah');?>">please add at least one.</a>',
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