<?php 


load::model('admin/department');
$department_model = new Department_model();
$departments=$department_model->getAllDepartment();

?>

<?php show_flash() ?>

<form action="<?php echo base_url('admin/manage-user/add-new-bdagent') ;?>" method="post" >
		
		<div class="card" style="border:2px solid grey;">
			<div class="card-header">
				<h6>BD Profile</h6>
			</div>
			<div class="card-body">
				<p>
			BD Name * : <input type="text" name="bd_name"/>
		</p>

		<p>
			Department : 
			<select name="dept_id">
			 	<option value="">
			 		Select Department 
			 	</option>
			 <?php foreach($departments as $department): ?>
			 	<option value="<?php echo $department['id']; ?>"><?php echo 
			 	ucfirst($department['department']); ?></option>
			 <?php endforeach;?>	
			 </select>
		</p>

		<p>
			Email * : <input type="email" name="bd_email"/>
		</p>

		<p>
			Mobile No * : <input type="text" name="bd_mobile"/>
		</p>

		<p>
			<input type="submit" name="submit_btn">
		</p>

			</div>
		</div>

</form>