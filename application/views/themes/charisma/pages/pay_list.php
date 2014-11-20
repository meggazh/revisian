<style>
 tr td { white-space: nowrap; 
 		 
  }
  
  th {   white-space: nowrap;   }

  
</style>

<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Dashboard</a>
        </li>
        <li>
            <a href="#">Payment</a>
        </li>
    </ul>
</div>

<div class="row">
  
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-align-justify"></i> Table Payment</h2>

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
                    <a href="<?php echo site_url('mstpayment/tambah');?>" class="btn btn-primary">Create New</a>
                </p>

               <table class="table table-striped table-bordered table-condensed" id="quotation-table">
                <thead>
                <tr class="info">
                    <th>No</th>
					<th>Term Of Payment</th>
					<th>Created</th>
					<th>Action</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
               </table>
            </div>
        </div>
  
</div><!--/row-->
<script>// dari atas sampe bawah itu javascript nya 
    $(document).ready(function() {
        /* Init Data Table */
        var oTable = $('#quotation-table').dataTable({
            "sDom": "<'row'<'col-md-6'l><'col-md-6'f>r>t<'row'<'col-md-12'i><'col-md-12 center-block'p>>",
            "sPaginationType": "bootstrap",
             "sAjaxSource": "<?php echo site_url('mstpayment/get_all');?>",//ini ambil string dari controller (PENTING)
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
                { "sWidth": "160px", "aTargets": [3 ] }
            ]
        });
    });
</script>
