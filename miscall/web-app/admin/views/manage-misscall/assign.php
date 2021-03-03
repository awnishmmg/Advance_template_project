<?php

load::model('admin/procured_number');
$procured_number_model = new Procured_number_model();
$numbers=$procured_number_model->getunAssignedNo();
load::model('user/user');
$user_model = new User_model();
$users=$user_model->getAllUser();

?>


<?php show_flash(); ?>
<form action="<?php echo base_url('admin/manage-misscall/assign'); ?>" 
method="post" >
	<div class="card" style="border:2px solid grey;">
		<div class="card-header">
			<h6>Assign Number</h6>
		</div>
		<div class="card-body">

		<div class="row">
			<div class="col-md-2">
			Channel Number *: 
			</div>
			<div class="col-md-4">
			<div class="form-group">
			<select name="procured_no_id" class="form-control">
			<option> Select Channel </option>
			<?php foreach($numbers as $number ): ?>
				<option value="<?php echo $number['id']; ?>">
					+ <?php echo $number['prefix_code']; ?>-
					<?php echo $number['miscall_numbers']; ?></option>
				<?php endforeach; ?>
		  	</select>
			</div>
		  </div>
		</div>

		<div class="row">
			<div class="col-md-2">
			Select User Type *: 
			</div>
			<div class="col-md-4">
			<div class="form-group">
			<input type="text" list="users" class="form-control">
			<datalist id="users">
				<?php foreach($users as $user): ?>
					<option value="<?php echo $user['name']." , @ {$user['company_name']}"; ?>" data-user_id='<?php echo $user['user_id'];?>'>
				<?php endforeach; ?>
			</datalist>

		</div>
		</div>
		</div>

		<div class="row">
			<div class="col-md-2">Billing * :
			</div>
				<div class="col-md-4">
				<div class="form-group">
				
				<input type="radio" name="service"  class="radio admin-assign-radio" value="no"> No

				<input type="radio" name="service" class="radio admin-assign-radio" value="yes"> Yes
			</div>
			</div>
			
		</div>

		<div class="row" id="admin-assign-billing" style="display: none;">
			<div class="col-md-12">
				<div class="card" style="border:2px solid grey;">
					<div class="card-header">
						<h6>Add Billing</h6>
					</div>
					<div class="card-body">
						<div class="row">
						<div class="col-md-2">
						Activation Date *
						</div>
						<div class="col-md-4">
							<input type="date" name="activation_date" class="form-control" />
						</div>
						<div class="col-md-2">
						HLR Lookup *
						</div>
						<div class="col-md-4">
							<select name="need_hlr" class="form-control" id="admin-assign-need_hlr"/>
							<option value="">--select--</option>
							<option value="yes">Yes</option>
							<option value="no">No</option>
							</select>
						</div>
						<div class="row mt-4" id="admin-assign-hlr-cost" style="display: none;">
							<div class="col-md-2"></div>
							<div class="col-md-2">If You are using HLR Lookup Add the Cost/unit</div>
							<div class="col-md-3">
								Cost *<input type="text" name="hlr_cost" class="form-control" />
							</div>
							<div class="col-md-3">
								Per <select name="hlr_unit" class="form-control">
									<option value="">--select--</option>
									<option value="call">call</option>
									<option value="month">month</option>
									<option value="year">year</option>
									<option value="pulse">pulse</option>
									</select>
							</div>
						</div>
						</div>
					</div>

				</div>
			</div>
		</div>


		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-1"><input type="submit" name="submit-btn" class="btn btn-primary"></div>
		<div>

		</div>
	</div>
</form>