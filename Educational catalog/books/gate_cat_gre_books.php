<?php $page_header_title='GATE - CATE - GRE BOOKS'?>

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
                                        <?php include('GG_30 Days to More Powerful Vocabulary.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                       <?php include('GG_Better English.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('GG_GATE Guide Electrical Engineering 2016.php');?>
                                    </div>
                                </div>
								
								<div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('GG_GMAT 2016 Official Guide Bundle.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                       <?php include('GG_Handbook Series of Electrical Engineering.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('GG_Made Easy - A Handbook on Civil Engineering.php');?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('GG_Proficiency in Reading Comprehension Simplifying The for You.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('GG_Verbal Ability & Logical Reasoning for C.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('GG_Vocabulary Booster for the CAT A Winning Approach by an IIM Alumunus.php');?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('GG_Wiley Acing the Gate - Mechanical Engineering.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('GG_Word Power Made Easy.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('GG_Word Power Made Easy.php');?>
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