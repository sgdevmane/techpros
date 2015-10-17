<?php $page_header_title='Novels'?>

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
                                        <?php include('NO_2_states.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                       <?php include('NO_3_mistakes_of_my_life.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('NO_5_point_sambavan.php');?>
                                    </div>
                                </div>
								
								<div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('NO_Breaking Dawn Twilight, Book 4.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                       <?php include('NO_Half_girl_friend.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('NO_Harry Potter and the Deathly Hallows.php');?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('NO_Harry Potter and the Half-Blood Prince.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('NO_one_night_call_centre.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('NO_Revolution_2020.php');?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('NO_The Lord of the Rings.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('NO_The Twilight Saga Breaking Dawn.php');?>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <?php include('NO_what_young_india_want.php');?>
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