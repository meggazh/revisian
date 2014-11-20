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
    <div class="box col-md-12">
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
				<div style='overflow-x:scroll;width:200; padding:;'>
               <table class="table table-striped table-bordered" id="quotation-table">
                <thead>
                <tr>
                 <th>No</th>
				<th>NIK</th>
				<th>Name</th>
				<th>Division</th>
				<th>Gender</th>
				<th>Education</th>
				<th>Religion</th>
				<th>BirdthDate</th>
				<th>JoinDate</th>
				<th>Rek</th>
				<th>KTP</th>
				<th>NPWP</th>
				<th>NoJamsos</th>
				<th>Address</th>
				<th>Password</th>
				<th>Level</th>
				<th>Last Ipdate</th>
                <th>Actions</th>
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
<script>// dari atas sampe bawah itu javascript nya 
    $(document).ready(function() {
        /* Init Data Table */
        var oTable = $('#quotation-table').dataTable({
            "sDom": "<'row'<'col-md-6'l><'col-md-6'f>r>t<'row'<'col-md-12'i><'col-md-12 center-block'p>>",
            "sPaginationType": "bootstrap",
             "sAjaxSource": "<?php echo site_url('mstemployee/get_all');?>",//ini ambil string dari controller (PENTING)
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
                    'aTargets' : [ 1 ]
                },
                { "sWidth": "160px", "aTargets": [ 3 ] }
            ]
        });
    });
</script>
