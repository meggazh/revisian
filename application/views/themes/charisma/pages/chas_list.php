<style>
 tr td { white-space: nowrap; 
 		 font-size:10px;	
  }
  
  th {   white-space: nowrap; font-size:10px; }

  
</style>

<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Dashboard</a>
        </li>
        <li>
            <a href="#">Chasis</a>
        </li>
    </ul>
</div>

<div class="row">
   <div class="12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-align-justify"></i> Table Chasis</h2>

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
                    <a href="<?php echo site_url('mstchasis/tambah');?>" class="btn btn-primary">Create New</a>
                </p>
				<center>
               <table width="950" class="table table-striped table-bordered table-condensed" id="chasis-table">
                <thead>
                <tr class="info">
                    <th width="18">No </th>
                    <th width="82">Chasis No</th>
                    <th width="58">Maker</th>
                    <th width="87">Model</th>
					<th width="55">Type</th>
                    <th width="84">Created</th>
                    <th width="76"><div align="center">Actions</div></th>
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
<script>
    $(document).ready(function() {
        /* Init Data Table */
        var oTable = $('#chasis-table').dataTable({
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
                "sEmptyTable": 'No found Chasis, <a href="<?php echo site_url('mstchasis/tambah');?>">please add at least one.</a>',
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
