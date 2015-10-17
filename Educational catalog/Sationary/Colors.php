<?php $page_header_title='Colors'?>
<?php $headtag_path = ''; ?>
<?php $header_path = '' ;?>
<?php $menu_path = ''; ?>
<?php $books_path = './../Books/'; ?>
<?php $pageheader_path = ''; ?>
<?php $script_path = ''; ?>
<?php $footer_path = '' ;?>
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
                                        <?php include('CS_151 Essays for UPSC Mains Various State Public Service Commisions and Other Competitive Examinations5 January 2004.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                       <?php include('CS_Cracking the CSAT Paper - 2.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('CS_General Studies Paper 1 (2015) for Civil Services Preliminary Examination by Majid Husain.php');?>
                                    </div>
                                </div>
								
								<div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('CS_Geography of India.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                       <?php include('CS_Indian Heritage and Culture (Testprep Series)2015.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('CS_Logical Reasoning, Analytical Ability and General Mental Ability for the Civil Services Preliminary Examination... by Sanjeev Joon and R.A. Sharma.php');?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('CS_Samanya Adhyayan Paper- I (2015).php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('CS_UPSC Civil Services Preliminary Exam Paper - 1 General Studies 13 years Solved Papers + Syllabus for Civil Services... by Student Aid Publications.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('CS_UPSC General Studies Mains Examination topic Wise Question Analysis (1989-2010).php');?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('CS_UPSC IAS Mains 2 Markers An Indispensable Source for IAS (Main)PCS (Main) General Studies Equivalent Competitive...2011.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('CS_UPSC New Syllabus Preliminary and Mains Exam by Disha Experts.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('CS_Writing Skills for Civil Services Examination by G.Subba Rao.php');?>
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