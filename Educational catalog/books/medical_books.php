<?php $page_header_title='Medical Books'?>

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
                                        <?php include('Anaesthesia.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                       <?php include('Bioethics.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('Biology.php');?>
                                    </div>
                                </div>
								
								<div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('Embryology.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                       <?php include('Emergency_Medicine.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('falcon_s_medicine.php');?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('Medical_Toxicology.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('medical_Physiology.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('Microbiology.php');?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('Renal_Physiology.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('Orthopaedics.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('Self_Assessment.php');?>
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