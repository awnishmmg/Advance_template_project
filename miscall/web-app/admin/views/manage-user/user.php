
<!-- VIEW FORMS -->
<?php

load::model('admin/bd_agents');
load::model('admin/department');
$bd_agents_model = new Bd_agents_model();
$bds=$bd_agents_model->getBdsAgentList();



?>
<?php show_flash(); ?>
    <div class="row">
        <div class="col-lg-12">
        	<h5>User Accounts</h5>
            <div>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                            role="tab" aria-controls="home" aria-expanded="true">Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                            role="tab" aria-controls="profile">Credential</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="billing-tab" data-toggle="tab" href="#billing"
                            role="tab" aria-controls="billing">Billing</a>
                    </li>
                </ul>
                <div class="tab-content text-muted" id="myTabContent">
                    <div role="tabpanel" class="tab-pane fade in active show" id="home"
                            aria-labelledby="home-tab">
                        <!-- Users Active -->

<div class="card" style="border:2px solid grey;">
	<div class="card-header">
		<h6>Recently Added BDs</h6>
	</div>
	<div class="card-body">
		<table class="table table-hover">
	<tr>
		<th>#</th>
		<th>User Name</th>
		<th>Contact Info</th>
		<th>Company Name</th>
		<th>Email ID</th>
		<th>Department</th>
		<th>Action</th>
	</tr>
<?php foreach ($bds as $bd): ?>
	<tr>
		<td><?php echo $bd['id']; ?></td>
		<td><a href="<?php echo base_url("admin/manage-user/bds#"); ?>">
			<span>
				<i class="fa fa-user"></i> 
			</span>
			<?php echo $bd['bd_name']; ?>
			</a>
		</td>
		<td>
			<i class="fas fa-phone"></i>
			<b><?php echo $bd['contact_no']; ?></b>
		</td>
		<td>
			<a href="mailto:<?php echo $bd['email']; ?>"><b><?php echo $bd['email']; ?></b></a>
			</td>
			

		<td><?php echo Department_model::having($bd['dept_id'],'department'); ?></td>
	<td>
		<select name="action">
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

<!-- User Active -->
 </div>
 <div class="tab-pane fade" id="profile" role="tabpanel"
                            aria-labelledby="profile-tab">
 <!-- User Credentials -->
	<div class="card" style="border:2px solid grey;">
	<div class="card-header">
		<h6>Recently Added BDs</h6>
	</div>
	<div class="card-body">
		<table class="table table-hover">
	<tr>
		<th>#</th>
		<th>User Name</th>
		<th>Contact Info</th>
		<th>Company Name</th>
		<th>Email ID</th>
		<th>Department</th>
		<th>Action</th>
	</tr>
<?php foreach ($bds as $bd): ?>
	<tr>
		<td><?php echo $bd['id']; ?></td>
		<td><a href="<?php echo base_url("admin/manage-user/bds#"); ?>">
			<span>
				<i class="fa fa-user"></i> 
			</span>
			<?php echo $bd['bd_name']; ?>
			</a>
		</td>
		<td>
			<i class="fas fa-phone"></i>
			<b><?php echo $bd['contact_no']; ?></b>
		</td>
		<td>
			<a href="mailto:<?php echo $bd['email']; ?>"><b><?php echo $bd['email']; ?></b></a>
			</td>
			

		<td><?php echo Department_model::having($bd['dept_id'],'department'); ?></td>
	<td>
		<select name="action">
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
            
    </div>


     <div class="tab-pane fade" id="billing" role="tabpanel" aria-labelledby="billing-tab">
      <p>Under Process</p>

    </div>
    </div>
    <!-- end row -->


<!-- VIEW FORMS -->
