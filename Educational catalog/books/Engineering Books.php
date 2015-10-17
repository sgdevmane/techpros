<?php $page_header_title='Engineering Books'?>

<!DOCTYPE html>
<html lang="en">
    <head>        
        <?php require_once ('_headtag.php') ?>
    </head>
    <body>
        <div class="header">
            <?php require_once('_header.php'); ?>
        </div>
        <div class="nav-with-header" id="img-logo-manipulate">
             <?php require_once('_menu.php'); ?>
             <?php //require_once('_pageheader.php'); ?>
        </div>
		        <div class="container-fluid content">
                <div class="row row-offcanvas row-offcanvas-left" style="">
                    <div class="col-sm-4 col-md-3 sidebar-offcanvas " id="sidebar" role="navigation">           
                        <?php require_once('_sidebar_engineering_books.php'); ?>
                    </div><!--/span-->
                    <div class="col-sm-8 col-md-9 main">
                        <section  id="books_content">
                            <div class="container" style="width: 100%;">     
                                
								<div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('let_us_c.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                       <?php include('Kreyszig.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('Automobile_Engineering_I.php');?>
                                    </div>
                                </div>
								
								<div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('Software_Engineering.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                       <?php include('Engineering_Physics_I.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('Engineering_Mechanics.php');?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('Communication_System.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('Mechanical_Engineering.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('Engineering_Chemestry.php');?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('Electrical_Power_Engineering.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('Wasted_Engineering.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('Computer_Archiecture.php');?>
                                    </div>
                                </div>
                                                                    
                            </div>
                        </section>
                    </div><!--/row-->
                </div>
            </div>
		<section id="footer-sec" >
           <?php  require_once('_footer.php');?>
        </section>
			<?php require_once('_script.html'); ?>
           
    </body>
</html>