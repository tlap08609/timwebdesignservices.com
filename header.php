<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title><?php if(isset($pgTitle) && is_string($pgTitle)){echo $pgTitle;}else{echo 'Default title';} ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="<?php if(isset($pgDescription) && is_string($pgDescription)){echo $pgDescription;}else{echo 'Default title';} ?>" />
	<meta name="google-site-verification" content="mIBarIaowISCnOQ2rQs-jQi72zht6WYfx3U7AocdrLE" />
	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
	<!-- logo -->
	<link href="https://fonts.googleapis.com/css?family=Allura&display=swap" rel="stylesheet">
	<!-- span logo -->
	<link href="https://fonts.googleapis.com/css?family=Hind+Madurai&display=swap" rel="stylesheet">
	<script src="js/jquery-1.12.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="plugin/font-awesome/css/font-awesome.min.css">
	<style>
		.logo{
			font-family: 'Allura', cursive;
			font-weight: 700;
			margin-bottom:-2px;
		}
		.sLogo{
			font-family: 'Hind Madurai', sans-serif;
		}
		.topNav{
			margin:2% 0;
		}
		.topNavMenu{
			line-height:6;
		}
		.topNavMenu .sLogo{
			margin-right:5%;
		}
		.no-gutter {
		margin-right: 0;
		margin-left: 0;
		}

		.no-gutter > [class*="col-"] {
		padding-right: 0;
		padding-left: 0;
		}
		.picWall{
		padding:0;
		margin:0;
		}
		.no-gutter>div{
		display:block;
		position:relative;
		cursor:pointer;
		}
		.overlay{
		position: absolute;
		top: 0;
		left: 0;
		/* background-color: rgba(3, 3, 3, 0.4); */
		/* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#b5bdc8+0,828c95+48,28343b+100 */
		background: rgb(181,189,200,0.5); /* Old browsers */
		background: -moz-radial-gradient(center, ellipse cover,  rgba(181,189,200,0.5) 0%, rgba(130,140,149,0.5) 48%, rgba(40,52,59,0.5) 100%); /* FF3.6-15 */
		background: -webkit-radial-gradient(center, ellipse cover,  rgba(181,189,200,0.5) 0%,rgba(130,140,149,0.5) 48%,rgba(40,52,59,0.5) 100%); /* Chrome10-25,Safari5.1-6 */
		background: radial-gradient(ellipse at center,  rgba(181,189,200,0.5) 0%,rgba(130,140,149,0.5) 48%,rgba(40,52,59,0.5) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b5bdc8', endColorstr='#28343b',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
		/* overflow: hidden; */
		width: 100%;
		height: 100%;
		-webkit-transform: scale(0);
		-ms-transform: scale(0);
		transform: scale(0);
		display:none;
		/* -webkit-transition: .1s ease;
		transition: .1s ease; */
		}
		.no-gutter>div:hover .overlay {
		-webkit-transform: scale(1);
		-ms-transform: scale(1);
		transform: scale(1);
		}
		.text {
		font-family: 'Hind Madurai', sans-serif;
		color: white;
		position: absolute;
		top: 50%;
		left: 50%;
		-webkit-transform: translate(-50%, -50%);
		-ms-transform: translate(-50%, -50%);
		transform: translate(-50%, -50%);
		text-align: center;
		}
		.text a{
		font-size: 2em;
		color: white;
		}
		.text h2{
		font-size: 1em;
		}
	</style>
</head>

<body>
    <div class="container-fluid topNav">
        <div class="row">
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<h1 class="logo text-center">Tim Web Design Services</h1>
				<p class="sLogo text-center">Content Marketing | Your Best Partner</p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4 topNavMenu text-center">
				<span class="sLogo">Blog</span>
				<span class="sLogo">Youtube</span>
				<span class="sLogo">Facekook</span>
				<span class="sLogo">About & Contact</span>
			</div>
			<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
			<h1>Web Design Services</h1>
			<img class="img-responsive center-block" src="images/maintenance.png" alt="">
			<p>if you have any inquiry, wellcome to contact us to <br> -->
			<!-- <a href="mailto:timwebdesignservices@hotmail.com">English Service</a><br> or<br>
			<a href="mailto:3184373672@qq.com">中文服務</a> -->
			</p>	
		</div>
	</div>

	