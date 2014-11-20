
	<body>
		<hr>
		<fieldset>
			<form method="POST" action="<?php echo site_url('mstprice/proses_edit'); ?>">
				<?php foreach($daftar->result() as $a):?>
					<input type="hidden" name="MstPriceID" value="<?php echo $a->MstPriceID; ?>"/>
					<input type="text" name="MstPriceUnitPrice" value="<?php echo $a->MstPriceUnitPrice; ?>"/>
					<input type="text" name="MstPriceExpiredDate" value="<?php echo $a->MstPriceExpiredDate; ?>"/>
					<input type="text" name="MstPriceStatus" value="<?php echo $a->MstPriceStatus; ?>"/>
					<input type="text" name="MstProductID" value="<?php echo $a->MstProductID; ?>"/>
					<input type="submit" name="simapn" value="Update" class="submitButton">
				<?php endforeach; ?>
			</form>
		</fieldset>
		<hr>
		
	</body>
</html>
