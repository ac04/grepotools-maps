<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $data['page_title']; ?> - Grepotools</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="<?php echo $config->base_url; ?>/assets/css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $config->base_url; ?>/assets/css/site.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $config->base_url; ?>/assets/css/bootstrap-responsive.min.css"/>
		<script type="text/javascript" src="<?php echo $config->base_url; ?>/assets/js/jquery-1.7.1.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo $config->base_url; ?>/assets/js/bootstrap.js"></script>
		<script type="text/javascript" src="<?php echo $config->base_url; ?>/assets/js/site.js"></script>

	</head>
	<body>
		<div class="container<?php if (isset($data['fluid-layout']) && $data['fluid-layout']) echo '-fluid';?>">