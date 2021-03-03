<?php

?>
<form action="<?php echo base_url('admin/partners/create') ;?>" method="post" >
		
<div class="card" style="border:2px solid grey;">
	<div class="card-header">
		<h6>Add Channel Partner </h6>
	</div>
	<div class="card-body">
		<p>
			Partner Name * : <input type="text" name="vendor_name"/>
		</p>

		<p>
			Description * : <textarea name="description"></textarea>

		</p>

		<p>
			Partner Since : <input type="date" name="since" />
		</p>

		<p>
			<input type="submit" name="submit-btn">
		</p>		
	</div>
</div>


</form>