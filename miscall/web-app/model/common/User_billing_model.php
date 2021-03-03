<?php

class User_billing_model{

private $tablename = 'tbl_user_billing';

private $column_pk = 'id';

private $column_user_id = 'user_id';
private $column_billing_status = 'billing_status';
private $column_billing_type = 'billing_type';
private $column_billing_cost = 'billing_cost';
private $column_billing_units = 'billing_units';
private $column_billing_address = 'billing_address';
private $column_billing_city = 'billing_city';
private $column_billing_town = 'billing_town';
private $column_billing_state = 'billing_state';

private $last_id;
private $fillable = [];

public function __construct(){

	$this->fillable = [
	$this->column_billing_status,
	$this->column_billing_type,
	$this->column_billing_cost,
	$this->column_billing_units, 
	$this->column_billing_address, 
	$this->column_billing_city,
	$this->column_billing_town,
	$this->column_billing_state, 
	];
} 


}