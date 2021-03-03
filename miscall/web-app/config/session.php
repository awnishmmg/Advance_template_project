<?php


#page where session will not be created

$session_not_allowed[] = 'login'; 
 
$session_out_page['admin'] = 'login'; #Login page Where to Redirect
$session_out_page['user'] = 'login'; #Login page where to Redirect
$session_out_page['web-app'] = 'login';

#Set Key for All the Modules Which you want to Secure
$session_key['admin'] = 'miscall_admin';
$session_key['user'] = 'miscall_user';
$session_key['web-app'] = 'miscall_general';






