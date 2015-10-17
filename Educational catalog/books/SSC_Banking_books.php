<?php $page_header_title='SSC Banking Books'?>

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
             <?php// require_once('_pageheader.php'); ?>
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
                                        <?php include('SS_101 Speed Tests for IBPS CWE Bank POMT Exam with Success Guarantee.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                       <?php include('SS_Banking Awareness (Objective with Subjective) (The Complete book for IBPS, SBI and RBI Examinations (15 August.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('SS_Comprehensive Guide to IBPS-CWE Bank PO MT Prelim + Main Exam.php');?>
                                    </div>
                                </div>
								
								<div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('SS_Comprehensive Guide to IBPS-CWE Bank POMT Exam.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                       <?php include('SS_IBPS (CWE) Bank PO Probationary OfficerManagement Trainee Exam.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('SS_IBPS (CWE) Bank PO Probationary OfficerManagement Trainee Pariksha.php');?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('SS_IBPS POMT Common Written Exam Practice Test Papers & Previous Papers (Solved) POMT Common Written Exam Practice.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('SS_Kirans Bank PO (IBPS POMTSO, RBI Grade-B, SBI PO, SBI Management Executive) Solved Papers from 2011 to 2015.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('SS_Kirans Bank PO solved papers for IBPS POMTSO, RBI Grade-B, SBI PO, SBI Management Executive (2011-2015).php');?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('SS_Objective Computer Awareness.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('SS_Target IBPS Bank Preliminary & Main POMT Exam 20 Sets Practice Workbook with SYNC-ABLE CD.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('SS_Target IBPS Bank Preliminary & Main POMT Exam 20 Sets Practice Workbook with SYNC-ABLE CD.php');?>
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