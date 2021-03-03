<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="Responsive bootstrap 4 admin template" name="description" />
<meta content="Coderthemes" name="author" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<base href="<?php echo APP_PATH; ?>">

<!-- App favicon -->
<link rel="shortcut icon" href="assets/images/main.png?v=<?php echo time(); ?>">
<!-- App css -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
<link href="assets/css/app.min.css" rel="stylesheet" type="text/css"  id="app-stylesheet" />

<title>:: <?php isset($title)?print($title):print("Dashboard");?> ::</title>

<?php load::view('layout/common/styles');?>    

</head>

<body class="authentication-bg">

<div class="account-pages pt-5 my-5">