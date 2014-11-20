<?php
if(isset($_POST['simpan'])){
	$TxnDrawID=$_POST['TxnDrawID'];
	$TxnDrawNo=$_POST['TxnDrawNo'];
	$TxnDrawDate=$_POST['TxnDrawDate'];
	$date=$_POST['date'];
	$TxnDrawTitle=$_POST['TxnDrawTitle'];
	$TxnDrawNohasil=$TxnDrawNo."/".$date."/".$TxnDrawTitle;
	$TxnDrawDate=$_POST['TxnDrawDate'];
	$TxnDrawStatus=$_POST['TxnDrawStatus'];
	
	
	
$query=mysql_query("insert into txndraw(TxndrawNo,TxnDrawDate,TxnDrawStatus,TxnDrawTitle)
					values('$TxnDrawNohasil','$TxnDrawDate','$TxnDrawStatus','$TxnDrawTitle')");

}
?>


<form method="POST">
			<legend>
<!--Button Add New Approval-->

<table class="table table table-bordered ">            
<?php 
$cek=mysql_query("select max(TxnDrawID)as id from txndraw");
$dap=mysql_fetch_array($cek);
$r=$dap['id']+1;
{
  ?>
	      <input type="hidden" name="TxnDrawID"  value="<?php echo $r; ?>"/>
          <?php } ?>
          
        
        
	
	    <tr>
	      <input type="hidden" name="TxnDrawID" class="form-control"/>
        </tr>
        <div class="form-group">
        <tr>
	      <td>No</td>
	      <td width="12" colspan="2"><div class="col-sm-2"><input type="text" name="TxnDrawNo" id="no" value="<?php echo $r;?>" readonly="<?php echo $r;?>" class="form-control input-xs" size="2" /></div>
          <?php
          	$today = date("m-y");                   
         	?>
          <div class="col-sm-2"><input type="text" name="date" id="date" class="form-control input-xs" readonly="date" /></div>
		  <div class="col-sm-2"><input type="text" name="today" id="type" class="form-control input-xs" readonly="type" size="2" /></div></td>
           	
        </tr>
        </div>
        <tr>
	      <td>Date</td>
	      <td><div class="col-lg-7"><input type="text" name="TxnDrawDate" placeholder="Date" class="form-control input-xs" id="tanggal" onchange="getdate()"  /></td>
        </tr>
        <tr>
	      <td>Type Title</td>
	      <td><div class="col-lg-7"><input  type="text" name="TxnDrawTitle" onkeyup="getNoDraw(this.value)" placeholder="TxnDrawTitle" class="form-control input-xs"/></td>
        </tr>
        <tr>
	      <td>Status</td>
	      <td>
            <input type="radio" name="TxnDrawStatus"
					<?php if (isset($TxnDrawStatus) && $TxnDrawStatus=="1") echo "checked";?>
				value="1">&nbsp;&nbsp;aktif
			<input type="radio" name="TxnDrawStatus"
					<?php if (isset($TxnDrawStatus) && $TxnDrawStatus=="0") echo "checked";?>
				value="0">&nbsp;&nbsp;non aktif
	    	</td>
          </tr>
		
        <!-- <td>&nbsp;</td>-->
	      <td colspan="2"><input type="submit" name="simpan" value="Simpan" class="btn btn-primary btn-lg "></td>
        </tr>
        </table>
        </form>
        </div>
		<a href="<?php echo site_url ('txndrawing');?>">
	<button class="btn btn-round " ><i class="glyphicon glyphicon-arrow-left" ></i></button></a>
	
    
    
     <script> 
      $(document).ready(function(){
        $("#tanggal").datepicker({
	format  : "dd-mm-yy", 
          changeMonth : true,
          changeYear  : true,
		  autoclose : true
		  
        });
      });
	  
	  
	  
	function getNoDraw (type) {
	
		$("#type").val(type);

	}
	
	function getdate()
	{
		
		var angka = $("#tanggal").val();
			var str = angka.split("-");
			var aa = str[1];
			var bb = str[2];

			$("#date").val(aa+'-'+bb);
			

			}
		
	
    </script>