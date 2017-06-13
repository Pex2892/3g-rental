<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="no-js ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
	<head lang="en">
		<meta charset="UTF-8">
		<meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="prj_author" content="<?php echo $this->config->item('prj_name'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="keywords" content="real estate template, real estate agency, html5">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no">

		<title><?php echo $headerTitle; ?> - <?php echo $this->config->item('prj_name'); ?></title>

		<link rel="icon" href="<?php echo asset_img(); ?>favicon.png">

		<link rel="stylesheet" type="text/css" href="<?php echo asset_css(); ?>bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo asset_css(); ?>style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo asset_css(); ?>bootstrap-datepicker3.min.css">


		<!--[if lt IE 9]>
		<script src="assets/bootstrap/js/html5shiv.min.js"></script> ??
		<script src="assets/bootstrap/js/respond.min.js"></script> ??
		<![endif]-->

		<script src="<?php echo asset_js(); ?>modernizr.custom.js"></script>
	</head>