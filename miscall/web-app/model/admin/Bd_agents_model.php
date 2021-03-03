<?php

class Bd_agents_model{

private $tablename='tbl_bd_agents';
private $column_name = 'bd_name';
private $column_dept_id = 'dept_id';
private $column_email = 'email';
private $column_contact = 'contact_no';
private $column_date = 'date';


private $fillable = [];

public function __construct()
{
	$this->fillable=[
			$this->column_name,
			$this->column_dept_id,
			$this->column_email,
			$this->column_contact,
			$this->column_date,
	];
}

public function addBdAgents($formdata){
	
	$formdata[]=date('Y-m-d');

	if(insertat($this->tablename, array_combine($this->fillable, $formdata))){
		return true;
	}else{
		return false;
	}
}

public function getBdsAgentList(){
	return getall($this->tablename);
}



}