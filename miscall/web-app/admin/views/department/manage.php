
<form action="<?php echo base_url('admin/department/add') ;?>" method="post" >
		
		<div class="card" style="border:2px solid grey;">
			<div class="card-header">
				<h6>Department Section</h6> 
			</div>
			<div class="card-body">
			<p>
				Department Name * : <input type="text" name="dept_name"/><?php show_flash('dept_name')?>
			</p>
			<p>
				<input type="submit" name="dept_btn" value="Add">
			</p>
		
			</div>
		
		</div>
		
</form>

<!-- VIEW FORMS -->
<?php

load::model('admin/department');
$department_model = new Department_model();
$departments=$department_model->getAllDepartment();


?>

<?php show_flash(); ?>

<div class="card" style="border:2px solid grey;">
	<div class="card-header">
		<h6>Department List</h6>

	</div>
	<div class="card-body">
		<table class="table table-hover">
		<tr>
			<th>#</th>
			<th>Department</th>
			<th>Action</th>
		</tr>
		<?php foreach ($departments as $department): ?>
		<tr>
			<td><?php echo $department['id']; ?></td>
			<td><?php echo $department['department']; ?></td>
			<td><select name="action">
					<option>Action</option>
					<option>Edit</option>
					<option>Delete</option>
				</select>
			</td>
		</tr>
		
		<?php endforeach; ?>
		</table>

	</div>
</div>





<!-- VIEW FORMS -->
