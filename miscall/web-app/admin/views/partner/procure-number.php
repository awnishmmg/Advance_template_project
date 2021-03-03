<?php
	
	show_flash();
?>

<form action="<?php echo base_url('admin/partners/procure-numbers') ;?>" 
method="post" >
	<div class="card" style="border:2px solid grey;">
		<div class="card-header">
			<h6>Add Channel Number</h6>
		</div>
		<div class="card-body">
			
		<p>
			Channel Number * : 
			<input type="text" name="channel_number" placeholder="Enter Ten digit Number" />
		</p>

		<p>
			Prefix Code * (+) : <input type="text" name="prefix_code" placeholder="Enter Prefix code " value=""/>
		</p>

		<p>
			Vendor : 
			<select name="vendor_id">
			<option> select vendor </option>
			<?php foreach($vendors as $vendor ): ?>
			<option value="<?php echo $vendor['id']; ?>"><?php echo $vendor['vendors_name']; ?></option>
			<?php endforeach; ?>
		  </select>
		<p>

		<p>
			Activation Date: <input type="date" name="activation_date" />
		</p>

		<p>
			Validity (in Months): 
				<select name="months">
					<option> select validity in months </option>
				
				<?php for($i=1;$i<=12;$i++): ?>
						
						<option><?php echo $i; ?></option>
				
				<?php endfor; ?>

			</select>
		<p>
			<input type="submit" name="submit-btn">
		</p>


		</div>
	</div>
</form>