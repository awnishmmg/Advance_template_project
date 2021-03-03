<?php switch (Request::get()) :

case 'user':
				
		load::view('layout/user/footer'); 
		break;

case 'admin':
		
		load::view('layout/admin/footer'); 
		break;

default:
		
		load::view('layout/common/footer');
		break;
endswitch; ?>