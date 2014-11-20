<?php
if(isset($_POST['simpan'])){
	$TxnDrawID=$_POST['TxnDrawID'];
	$TxnDrawNo=$_POST['TxnDrawNo'];
	$TxnDrawTitle=$_POST['TxnDrawTitle'];
	$TxnDrawNohasil=$TxnDrawNo."/".$TxnDrawTitle;

$query=mysql_query("update into txndraw(TxndrawNo,TxnDrawTitle)
					values('$TxnDrawNohasil','$TxnDrawTitle')");
}
?>



	<form method="POST" action="<?php echo site_url('txndrawing/proses_edit'); ?>">
<div class="col-lg-7 col-lg-offset-2">
	<table class="table table-bordered">
	<?php foreach($daftar->result() as $a):?>
	<tr>
	  <input type="hidden" name="TxnDrawID" value="<?php echo $a->TxnDrawID;?>"/>
      </tr>
     <td>No Drawing</td>
     <td>
	     <div class="col-lg-6">
	     <input type="text" name="TxnDrawNo" value="<?php echo $a->TxnDrawNo;?>" readonly="<?php echo $a->TxnDrawNo;?>" class="form-control input-sm" /></td>
    </tr>
     </tr>
	<tr>
        <td>Date</td>
		<td>
		  <div class="col-lg-6">
		  <input type="text" name="TxnDrawDate" placeholder="Date" id="tanggal" value="<?php echo $a->TxnDrawDate; ?>" class="form-control input-sm" /></td>
    </tr>
    <tr>
        <td>Type</td>
		<td>
		 <div class="col-lg-6">
		<input type="text" name="TxnDrawTitle" value="<?php echo $a->TxnDrawTitle; ?>" readonly="<?php echo $a->TxnDrawTitle; ?>" class="form-control input-sm"/></td>
    </tr>
	<tr>
        <td>Status</td>
		<td>
            <input type="radio" name="TxnDrawStatus"
					<?php if (isset($TxnDrawStatus) && $TxnDrawStatus=="1") echo "checked";?>
				value="1">&nbsp;&nbsp;aktif
			<input type="radio" name="TxnDrawStatus"
					<?php if (isset($TxnDrawStatus) && $TxnDrawStatus=="0") echo "checked";?>
				value="0">&nbsp;&nbsp;tidak aktif
	    </td>
    </tr>
	
	<tr>
		<td colspan="2"><center><button type="submit" name="simpan" value="Update"><i class="glyphicon glyphicon-save"></i></button></center></td>
    </tr>
          <?php endforeach; ?>
				</table>
			</form>
	<a href="<?php echo site_url ('txndrawing');?>">
	<label ><i class="glyphicon glyphicon-arrow-left" ></i></label></a>
		</div>
		<hr>
        


<script> 
      $(document).ready(function(){
        $("#tanggal").datepicker({
		dateFormat  : "yy-mm-dd", 
          changeMonth : true,
          changeYear  : true
		  
        });
      });
	  
    </script>
		
	</body>
</html>
	