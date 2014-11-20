<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Dashboard</a>
        </li>
        <li>
            <a href="#">Quotation</a>
        </li>
        <li>
            Detail
        </li>
    </ul>
</div>



<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-star-empty"></i> Detail Quotation</h2>

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
            		<h3>Master PO</h3>
                <hr>
                <form class="form-horizontal" method="POST" action="<?php echo site_url('quotation/save_master');?>" id="form-quotation">
                    
                    <div class="form-group">
                        <label class="col-sm-2 control-label label-custom">Date</label>
                        <div class="col-sm-3">
                            <input id="date-quotation" type="text" class="form-control datepicker" name="date-quotation">
                        </div> 
                        
                        
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label label-custom">No PO</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="re">
                        </div>
                      </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label label-custom">Remarks</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="re">
                        </div>
                      </div>
                <!-- put your content here -->
                <table>
                    <tr>
                        <td><strong>No</strong></td>
                        <td>:</td>
                        <td><?php echo $quotationhdr->TxnQuotHdrNo;?></td>
                    </tr>
                    <tr>
                        <td><strong>Re</strong></td>
                        <td>:</td>
                        <td><?php echo $quotationhdr->TxnQuotHdrRemarks;?></td>
                    </tr>
                     <tr>
                        <td><strong>To</strong></td>
                        <td>:</td>
                        <td><?php echo $quotationhdr->cust_name;?></td>
                    </tr>
                     <tr>
                        <td><strong>Attn</strong></td>
                        <td>:</td>
                        <td><?php echo $quotationhdr->attention;?></td>
                    </tr>
                    <tr>
                        <td><strong>Address</strong></td>
                        <td>:</td>
                        <td><?php echo $quotationhdr->addr1;?></td>
                    </tr>
                    <?php if($quotationhdr->addr2 != ''): ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><?php echo $quotationhdr->addr2;?></td>
                    </tr>
                    <?php endif; ?>
                    <?php if($quotationhdr->addr3 != ''): ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><?php echo $quotationhdr->addr3;?></td>
                    </tr>
                    <?php endif; ?>
                    <tr>
                        <td><strong>Phone/Fax</strong></td>
                        <td>:</td>
                        <td><?php echo $quotationhdr->notelp.' / '.$quotationhdr->fax;?></td>
                    </tr>
                     <tr>
                        <td><strong>Cc</strong></td>
                        <td>:</td>
                        <td><?php echo $quotationhdr->cc;?></td>
                    </tr>
                     <tr>
                        <td><strong>Email</strong></td>
                        <td>:</td>
                        <td><?php echo $quotationhdr->email1;?></td>
                    </tr>
                    <?php if($quotationhdr->email2 != ''): ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><?php echo $quotationhdr->email2;?></td>
                    </tr>
                    <?php endif; ?>
                    <?php if($quotationhdr->email3 != ''): ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><?php echo $quotationhdr->email3;?></td>
                    </tr>
                    <?php endif; ?>
                </table>
                <hr>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>ITEM</th>
                            <th>QTY ORDER</th>
                            <th>PRICE / UNIT</th>
                            <th>AMOUNT</th>
                            <th>REMARKS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        if($quotationdtl != null):
                            foreach($quotationdtl as $row):
                        ?>
                        <tr>
                            <td><?php echo $no;?></td>
                            <td><?php echo $row->item_type.' '.$row->item_variant.' '.$row->item_size;?></td>
                            <td><?php echo $row->qty;?></td>
                            <td><?php echo 'Rp. '.rupiah($row->price);?></td>
                            <td><?php echo 'Rp. '.rupiah($row->amount);?></td>
                            <td><?php echo $row->remarks;?></td>
                        </tr>
                        <?php
                        ++$no;
                        endforeach;
                        ?>
                        <tr rowspan="2">
                            <td colspan="3" rowspan="3"></td>
                            <td>Sub Total</td>
                            <td><?php echo 'Rp. '.rupiah($quotationhdr->TxnQuotHdrSubTotal);?></td>
                            <td rowspan="3"></td>
                        </tr>
                        <tr>
                          
                            <td>PPN 10%</td>
                            <td><?php echo 'Rp. '.rupiah($quotationhdr->TxnQuotHdrPpn);?></td>
                        </tr>
                         <tr>
                         
                            <td>Total</td>
                            <td><?php echo 'Rp. '.rupiah($quotationhdr->TxnQuotHdrTotal);?></td>
                        </tr>
                        <?php
                        else:
                            echo "<tr><td colspan='6'>No Found Data</td></tr>";
                        endif;
                        ?>
                    </tbody>
                </table>
                <hr>
                <p>
                    <a href="<?php echo site_url('quotation');?>" class="btn btn-default">Back to list</a>
                    <a href="" class="btn btn-success">Print Preview</a>
                </p>
            </div>
        </div>
    </div>
</div><!--/row-->

<script>
$(function() {

    /* Init Data Table */
    var oTable = $('#table-detail').dataTable({
        "sDom": "<'row'<'col-md-6'l><'col-md-6'f>r>t<'row'<'col-md-12'i><'col-md-12 center-block'p>>",
        "sPaginationType": "bootstrap",
        "oLanguage": {
            "sLengthMenu": "_MENU_ records per page"
        }
    });

    $( "#table-detail tbody" ).on( "click", "tr", function() {
        $(this).toggleClass('info row_selected');
    } );
 
    
    
    /* Filter textbox only numbers */
    $(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

    /* Filter textbox only numbers */
    $("#discount-hdr").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

    /* delete selected rows */
    $("#delete-row").click(function() {
       var anSelected = fnGetSelected( oTable );
        if ( anSelected.length !== 0 ) {
            oTable.fnDeleteRow( anSelected[0] );
            getTotal();
        }
    });

    /* date picker */
    $(".datepicker").datepicker({
        format: 'dd-mm-yyyy',
        autoclose: true
    });

    /* get data for combo box quotation header */

    $("#group-sales").ajaxChosen({
        dataType: 'json',
        type: 'POST',
        url:"<?php echo site_url('quotation/get_groupsales');?>"
    },{
        loadingImg: "<?php echo base_url('assets/charisma/bower_components/chosen/loading.gif');?>"
    });

    $("#type-order").ajaxChosen({
        dataType: 'json',
        type: 'POST',
        url:"<?php echo site_url('quotation/get_typeorder');?>"
    },{
        loadingImg: "<?php echo base_url('assets/charisma/bower_components/chosen/loading.gif');?>"
    });

    $("#customer").ajaxChosen({
        dataType: 'json',
        type: 'POST',
        url:"<?php echo site_url('po/get_quotation');?>"
    },{
        loadingImg: "<?php echo base_url('assets/charisma/bower_components/chosen/loading.gif');?>"
    });

    $("#sales").ajaxChosen({
        dataType: 'json',
        type: 'POST',
        url:"<?php echo site_url('quotation/get_sales');?>"
    },{
        loadingImg: "<?php echo base_url('assets/charisma/bower_components/chosen/loading.gif');?>"
    });

  

    /* generate no quotation */

    $("#group-sales").change(function() {
        /* Act on the event */
        var groupSales = $("#group-sales option:selected").text();

        $("#no-quotation-3").val(groupSales);
    });

    $("#date-quotation").change(function() {
        var dateQuotation = $(this).val();

        var str   = dateQuotation.split("-");
            year  = str[2];
            month = str[1];

        var monthRoman = decimalToRoman(month);
        $("#no-quotation-5").val(year);
        $("#no-quotation-4").val(monthRoman);
    });

    /* set label customer */
    $("#customer").change(function() {
        /* Act on the event */

        var id = $(this).val();
        $.ajax({
            url: "<?php echo site_url('po/get_detailquotation');?>",
            type: 'GET',
            dataType: 'json',
            data: {id: id},
            success: function(data) {
                if(data) {

                    $("#no_quo").html(data.no_quo);
					$("#date").html(data.date);
					$("#term").html(data.term);
					$("#discount").html(data.discount);
					$("#remarks").html(data.remarks);
					$("#ppn").html(data.ppn);

                    
                }
            }
        }); 
    });
	
	$("#customer").change(function() {
        /* Act on the event */

        var id = $(this).val();
        $.ajax({
            url: "<?php echo site_url('po/get_detailquo');?>",
            type: 'GET',
            dataType: 'json',
            data: {id: id},
            success: function(data) {
                if(data) {

                    $("#no_quo").html(data.no_quo);
					$("#date").html(data.date);
					$("#term").html(data.term);
					$("#discount").html(data.discount);
					$("#remarks").html(data.remarks);
					$("#ppn").html(data.ppn);

                    
                }
            }
        }); 
    });

    /* get data for combo box quotation detail */

    $("#type-chasis").ajaxChosen({
        dataType: 'json',
        type: 'POST',
        url:"<?php echo site_url('quotation/get_typechasis');?>"
    },{
        loadingImg: "<?php echo base_url('assets/charisma/bower_components/chosen/loading.gif');?>",
    });

    $("#type-product").change(function() {
        /* Act on the event */
        var type = $(this).val();

        if(type != null) {
            $.ajax({
                url: "<?php echo site_url('quotation/get_product');?>",
                type: 'GET',
                dataType: 'json',
                data: {type: type},
                success: function(data) {
                        $("#item").empty();
                        $("#item").append('<option value="" disabled selected>Choose a Option</option>');
                        $(data).each(function()
                        {
                            var option = $('<option />');
                            option.attr('value', this.productid).text(this.producttype+' '+this.productvariant+' '+this.productsize);

                            $('#item').append(option);
                        });
                }
            });
            
        }
    });

    $("#drawing").ajaxChosen({
        dataType: 'json',
        type: 'POST',
        url:"<?php echo site_url('quotation/get_drawing');?>"
    },{
        loadingImg: "<?php echo base_url('assets/charisma/bower_components/chosen/loading.gif');?>",
    });

    /* get price item */

    $("#item").change(function() {
        /* Act on the event */
        var productID = $(this).val();

        if(productID != null) {
            $.ajax({
                url: "<?php echo site_url('quotation/get_detailproduct');?>",
                type: 'GET',
                dataType: 'json',
                data: {id: productID},
                success: function(data) {
                    $("#item-price").val(data.unitprice);
                }
            });
         
            var qty = $("#qty").val();
            subtotal(qty);
        }

    });

    /* get amount */

    $("#item-price").keyup(function() {
        /* Act on the event */
        /* Act on the event */
        if($(this).val() != "") {
            var qty = $("#qty").val();
            subtotal(qty);     
        }else{
            return false;
        }
    });

    $("#discount").keyup(function() {
        /* Act on the event */
        if($(this).val() != "") {
            var qty = $("#qty").val();
            subtotal(qty);     
        }else{
            return false;
        }
    });

    /* submit form quotation header */

    $("#form-quotation").submit(function(event) {
        /* Act on the event */
        event.preventDefault();

        var productidArray = [];
            chasisidArray  = [];
            drawidArray    = [];

        $('input[name^="productid"]').each(function() {
          productidArray.push($(this).val());
        });

        $('input[name^="chasisid"]').each(function() {
          chasisidArray.push($(this).val());
        });

        $('input[name^="drawid"]').each(function() {
          drawidArray.push($(this).val());
        });

        var firstsCellArray=[];
        var secondCellArray=[];

        $.each( oTable.fnGetData(), function(i, row){
          secondCellArray.push(chasisidArray[i]);  //index 0
          secondCellArray.push(productidArray[i]); //index 1
          secondCellArray.push(row[3]); //index 2
          secondCellArray.push(row[4]); //index 3
          secondCellArray.push(row[5]); //index 4
          secondCellArray.push(row[6]); //index 5
          secondCellArray.push(row[7]); //index 6
          secondCellArray.push(row[8]); //index 7
          secondCellArray.push(drawidArray[i]); //index 8

          firstsCellArray.push(secondCellArray);

          secondCellArray = [];

        });

        $.post(this.action, $(this).serialize(), function(data, textStatus, xhr) {
            /*optional stuff to do after success */
            var lastid = data.lastid;
            if(lastid != ''){
                
                $.post("<?php echo site_url('quotation/save_detail');?>",{data:firstsCellArray,quotationid:lastid},function(){
                    location.reload();
                }); 
            
            }
        },"json");
    });

    
    /* proses edit & update detail item */
    $("#update-row").click(function() {
        /* Act on the event */
        var action = $(this).val();   

        if(action === 'edit'){

            var anSelected = fnGetSelected( oTable );   
            
            if ( anSelected.length === 1 ) {
                 /* change status button */
                
                var icon = '<i class="glyphicon glyphicon-ok"></i>';
                $(this).val("change");
                $(this).html(icon+" Finish");    

                /* reset combobox */
                $('.combo-detail').empty(); //remove all child nodes
                var newOption = $('<option value=""></option>');
                $('.combo-detail').append(newOption);
                $('.combo-detail').trigger("chosen:updated");

                       
                var rowInput = anSelected[0];
                var row = oTable.fnGetData(anSelected[0]);
                var idRow = oTable.fnGetPosition(anSelected[0]); 

            
                var typeProduct = $(rowInput).find('td:eq(0)').text();
                    chasisID    = $(rowInput).find('input[name^="chasisid"]').val();
                    chasisName  = $(rowInput).find('td:eq(1)').text();
                    itemID      = $(rowInput).find('input[name^="productid"]').val();
                    itemName    = $(rowInput).find('td:eq(2)').text();
                    drawID      = $(rowInput).find('input[name^="drawid"]').val();
                    drawName    = $(rowInput).find('td:eq(9)').text();

                
                $("#rowNo").val(idRow);
                $("#type-product option:selected").val(typeProduct).text(typeProduct).trigger('chosen:updated');
                $("#type-chasis option:selected").val(chasisID).text(chasisName).trigger('chosen:updated');
                $("#item").append('<option value="'+itemID+'" selected>'+itemName+'</option>');
                $("#item-price").val(row[3]);
                $("#qty").val(row[4]);
                $("#disc-option option:selected").val(row[5]).text(row[5]).trigger('chosen:updated');
                $("#discount").val(row[6]);
                $("#amount").val(row[7]);
                $("#remarks").val(row[8]);
                $("#drawing option:selected").val(drawID).text(drawName).trigger('chosen:updated');

                $("#delete-row").attr('disabled', 'disabled');
                $("#add-row").attr('disabled', 'disabled'); 
                
               
            }        
        }else if(action === 'change') {

            var icon = '<i class="glyphicon glyphicon-pencil"></i>';
            var idRow = $("#rowNo").val();
            $(".combo-detail").trigger("chosen:updated");
            updateRow(idRow);
            $("#delete-row").removeAttr('disabled');
            $("#add-row").removeAttr('disabled');
            $(this).val('edit');
            $(this).html(icon+'Edit');    
        }
    });

});

function subtotal(qty){

    var price       = $("#item-price").val();
    var discount    = $("#discount").val();

    var discOption  = $("#disc-option").val();

    if(discOption == 'percent') {
        totalDiscount = (parseInt(discount)/100)*parseInt(price);
    }else {
        totalDiscount = parseInt(discount);
    }
        
    var sub = (parseInt(qty)*parseInt(price))-totalDiscount;

    if(!isNaN(sub)){
        $("#amount").val(sub);    
    }else {
        $("#amount").val(0);
    }   
}



function addList() {
    var productID = $("#item").val();
        chasisID  = $("#type-chasis").val();
        drawID    = $("#drawing").val();

        inputProduct = '<input type="hidden" value="'+productID+'" name="productid[]">';
        inputChasis  = '<input type="hidden" value="'+chasisID+'" name="chasisid[]">';
        inputDraw    = '<input type="hidden" value="'+drawID+'" name="drawid[]">';

    $('#table-detail').dataTable().fnAddData( [
        $('#type-product option:selected').text(),
        inputChasis+$('#type-chasis option:selected').text(),
        inputProduct+$('#item option:selected').text(),
        $('#item-price').val(),
        $('#qty').val(),
        $('#disc-option').val(),
        $('#discount').val(),
        $('#amount').val(),
        $('#remarks').val(),
        inputDraw+$('#drawing option:selected').text(),
         ] );
   
    clearFormDetail();
    $("#type-product").focus();

    getTotal();
}

function updateRow(rowIndex) {

    var id = parseInt(rowIndex);
    
    var productID = $("#item").val();
        chasisID  = $("#type-chasis").val();
        drawID    = $("#drawing").val();


        inputProduct = '<input type="hidden" value="'+productID+'" name="productid[]">';
        inputChasis  = '<input type="hidden" value="'+chasisID+'" name="chasisid[]">';
        inputDraw    = '<input type="hidden" value="'+drawID+'" name="drawid[]">';

        $("#table-detail").dataTable().fnUpdate( [
        $('#type-product option:selected').text(),
        inputChasis+$('#type-chasis option:selected').text(),
        inputProduct+$('#item option:selected').text(),
        $('#item-price').val(),
        $('#qty').val(),
        $('#disc-option').val(),
        $('#discount').val(),
        $('#amount').val(),
        $('#remarks').val(),
        inputDraw+$('#drawing option:selected').text(),
         ], id );
   
        clearFormDetail();

        getTotal();
}

function getTotal(){
      oTable = $('#table-detail').dataTable();
      
      var totitem = oTable.fnSettings().fnRecordsTotal();

      var tothrg = 0;
     
      $.each( oTable.fnGetData(), function(i, row){
        tothrg += parseInt(row[7])

      });

     if(!isNaN(tothrg)) {
        $("#sub-total").val(tothrg);   
     }

     var ppn = 10/100 * tothrg;

     if(!isNaN(ppn)) {
        $("#ppn").val(ppn);
     }

     var disc = $("#discount-hdr").val();

     totalHdr(disc);     
}

function totalHdr(disc) {

    var subTotal = $("#sub-total").val();
        ppn      = 10/100 * parseInt(subTotal);

    if(disc != '') {
        var total = parseInt(subTotal) + ppn - disc;

        if(!isNaN(total)) {
            $("#total").val(total);
        }    
    }
    
 }

/* Get the rows which are currently selected */
function fnGetSelected( oTableLocal )
{
    return oTableLocal.$('tr.row_selected');
}

/* convert to roman number */
var roman = new Array(); 
roman = ["M","CM","D","CD","C","XC","L","XL","X","IX","V","IV","I"]; 
var decimal = new Array(); 
decimal = [1000,900,500,400,100,90,50,40,10,9,5,4,1]; 
function decimalToRoman(value) { 
  if (value <= 0 || value >= 4000) return value; 
    var romanNumeral = ""; 
    for (var i=0; i<roman.length; i++) { 
      while (value >= decimal[i]) {  
        value -= decimal[i]; 
        romanNumeral += roman[i]; 
      } 
    } 
    return romanNumeral; 
}

function clearFormDetail()
{
    $(".combo-detail-2").val('').trigger('chosen:updated');
    $(".combo-detail option:selected").text('').trigger('chosen:updated');
    $(".combo-detail").val('').trigger("chosen:updated");
    $("#disc-option").val('').trigger("chosen:updated");
    $(".input-detail").val('');
    $(".input-number").val(0);
    $("#amount").val(0);
    $("#qty").val(1);
    $("#item option:selected").val('').text('No Item');
}
</script>