<?php

load::model('role');
$role_model = new Role_model();
$roles=$role_model->getAllRoles();

load::model('admin/bd_agents');
load::model('admin/department');
$bd_agents_model = new Bd_agents_model();
$bds=$bd_agents_model->getBdsAgentList();

?>
<?php show_flash(); ?>
<form action="<?php echo base_url('admin/manage-user/add-new') ;?>" method="post" >
		<div class="card" style="border: 2px solid grey;">
			<div class="card-header">
				<h6>User Profile</h6>
			</div>
			<div class="card-body">
						<p>
					Name * : <input type="text" name="name"/>
				</p>

				<p>
					Company Name * : <input type="text" name="company_name"/>
				</p>

				<p>
					Email * : <input type="email" name="email"/>
				</p>

				<p>
					Mobile No * : <input type="text" name="mobile"/>
				</p>

				<p>
					Landline No * : <input type="text" name="landline"/>
				</p>

				<p>
					Company Description * : <textarea name="company_detail"></textarea>

				</p>

				<p>
					BD Incharge : 
					<select name="bd_id">
					 	<option value="">
					 		select  
					 	</option>
					 <?php foreach($bds as $bd): ?>
					 	<option value="<?php echo $bd['id']; ?>"><?php echo 
					 	ucfirst($bd['bd_name']); ?></option>
					 <?php endforeach;?>	
					 </select>
				</p>
		</div>
		</div>
		

		<hr class="hr" />
			<div class="card" style="border: 2px solid grey;">
			<div class="card-header">
				<h6>Account Credentials </h6>
			</div>
			<div class="card-body">
			<p>
				Login ID * : <input type="email" name="auth_id"/>
			</p>

			<p>
				 Password * : <input type="text" name="password"/>
			</p>

			<p>
				 Confirm Password * : <input type="text" name="cnf_password"/>
			</p>
			</div>

		</div>
		<hr>
		
		<div class="card" style="border: 2px solid grey;">
			<div class="card-header">
				<h6>Role & Permission</h6>
			</div>
			<div class="card-body">
				<p>
			 User Type * : 
			 <select name="role_id" id="admin-add-new-role">
			 	<option value="">
			 		select Role  
			 	</option>
			 <?php foreach($roles as $role): ?>
			 	<option value="<?php echo $role['role_id']; ?>"><?php echo 
			 	ucfirst($role['role']); ?></option>
			 <?php endforeach;?>	
			 </select>
		</p>

		

		<p>
			 Permission * : 
			 <span id="admin-add-new-permission"></span>
			 
		</p>

		<p>
			<input type="submit" name="submit-btn">
		</p>

			</div>

		</div>

</form>