<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?php echo $__env->yieldContent('title'); ?> 1stop</title>

     <!-- START additional css -->

        <!-- Bootstrap -->
        <link href="<?php echo asset('css/bootstrap.min.css'); ?>" rel="stylesheet">

        <!-- Font awesome -->
        <link href="<?php echo asset('css/font-awesome.css'); ?>" rel="stylesheet">

        <!-- Main Inspinia CSS files -->
        <link href="<?php echo asset('css/animate.css'); ?>" rel="stylesheet">

        <!-- Main Style CSS files -->
        <link href="<?php echo asset('css/style.css'); ?>" rel="stylesheet">

        <!-- Date-Picker CSS -->
        <!-- link href="<?php echo asset('css/plugins/datapicker/angular-datapicker.css'); ?>" rel="stylesheet" -->

    <!-- END additional css -->
       

        
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo asset('css/bootstrap.css'); ?>" rel="stylesheet">
        
        <!-- Custom CSS -->
        <link href="<?php echo asset('css/heroic-features.css'); ?>" rel="stylesheet">

		<!-- link rel="stylesheet" href="/app/assets/app.css" -->

    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <?php $__env->startSection('topnav'); ?>
            <?php echo $__env->yieldSection(); ?>
            </nav>
            <div id="page-wrapper" class="gray-bg" >
        		<div class="container">
					
					<div class="row ">
						<?php echo $__env->yieldContent('content'); ?>
					</div>
					
				</div>	
            </div>
            <div id="main">hello world</div>

        </div>
        <!-- jQuery -->
        <script src="<?php echo asset('js/jquery.js'); ?>"></script>

    <!-- START additional js -->

         <!-- MetsiMenu -->
        <script src="<?php echo asset('js/plugins/metisMenu/jquery.metisMenu.js'); ?>"></script>
        <!-- Datepicker -->
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        <!-- script src="<?php echo asset('js/plugins/datapicker/angular-datepicker.js'); ?>"></script -->

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo asset('js/bootstrap.min.js'); ?>"></script>

    </body>
</html>