<?php $page_header_title='Books'?>
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
             <?php require_once('_pageheader.php'); ?>
        </div>
			<div class="container-fluid content">
                
			<div class="row row-offcanvas row-offcanvas-left" style="background-color:#f5f5f5;">
                   
					<div id="leftnav" class="col-sm-4 col-md-3 sidebar-offcanvas " role="navigation">           
                        <form name="formsearch" method="post" action="#" style="margin-top:20px;">
                            <div class="input-group" style="margin-left:-12px;margin-right:-5px;">
                                <input name="editbox_search" type="text" class="form-control" placeholder="Search for Books"/>
                                <span class="input-group-btn">
                                    <button class="btn btn-info btn-toggleClass" type="button">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                        <ul class="nav nav-sidebar">
                            <li class="active"><h3 class="text-info">CATEGORIES</h3></li>
                            <div class="book-categories text-info">
							<br/>
							<li><input type="checkbox">Engineering Books</input></li>
                            <br/>
							<li><input type="checkbox">Novels</input></li>
                            <br/>
							<li><input type="checkbox">Magazines</input></li><br/>
                            <li><input type="checkbox">School Books</input></li><br/>   
                            <li><input type="checkbox">Engg/Med Entrance Exam Books</input></li><br/>
                            <li><input type="checkbox">Management Books</input></li><br/>
                            <li><input type="checkbox">CSAT Books</input></li><br/>
                            <li><input type="checkbox">GATE/GRE/CAT/GMAT Books</input></li><br/>  
                            <li><input type="checkbox">SSC/Banking/Railway Books</input></li><br/>
                            <li><input type="checkbox">Other Books</input></li><br/> </div>             
                        </ul>
                    </div>
					<!--/span-->
                    <div id="content_section" class="col-sm-8 col-md-9 main">
                        <section  id="books_content">
                            <div class="container" style="width: 100%;">     
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <a href="Engineering Books.php">
                                            <img class="img-responsive img-responsive-images" src="../../images/Engineering books.jpg" alt="Engineering Books">
                                            <h5>Engineering Books</h5>
                                        </a>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <a href="novels.php">
                                            <img class="img-responsive img-responsive-images" src="../../images/novels.jpg" alt="Novels">
                                            <h5>Novels</h5>
                                        </a>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <a href="School Books.php">
                                            <img class="img-responsive img-responsive-images"  src="../../images/school_books.jpg" alt="School Books">
                                            <h5>School Books</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <a href="Managment_books.php">
                                            <img class="img-responsive img-responsive-images" src="../../images/management_books.jpg" alt="Management Books">
                                            <h5>Management Books</h5>
                                        </a>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <a href="SSC_Banking_books.php">
                                            <img class="img-responsive img-responsive-images" src="../../images/novels.jpg" alt="SSC / Banking / Railway Books">
                                            <h5>SSC/Banking/Railway Books</h5>
                                        </a>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <a href="medical_books.php">
                                            <img class="img-responsive img-responsive-images"  src="../../images/medicalbooks.jpg" alt="Medical Books">
                                            <h5>Medical Books</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <a href="Magazines.php">
                                            <img class="img-responsive img-responsive-images" src="../../images/magazine.png" alt="Magazines">
                                            <h5>Magazines</h5>
                                        </a>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <a href="jee_entrnce _examination.php">
                                            <img class="img-responsive img-responsive-images"  src="../../images/entrance exam.jpg" alt="JEE MAINS / Adv. , Medical & state Entrance Exam Books">
                                            <h5>JEE MAINS/Adv./Medical/State Entrance Exam Books</h5>
                                        </a>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <a href="CSAT BOOKS.php">
                                            <img class="img-responsive img-responsive-images" src="../../images/csat_books.jpg" alt="CSAT Books">
                                            <h5>CSAT Books</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <a href="gate_cat_gre_books.php">
                                            <img class="img-responsive img-responsive-images" src="../../images/CAT_GATE_Books.png" alt="GATE / GRE / CAT / GMAT Books">
                                            <h5>GATE/GRE/CAT/GMAT Books</h5>
                                        </a>                                            
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <a href="Other_books.php">
                                            <img class="img-responsive img-responsive-images" src="../../images/other books.png" alt="Other Books">
                                            <h5>Other Books</h5>
                                        </a>
                                    </div>                   
                            </div>
                        
                    
					</div>
					</section><!--/row-->
                </div>
            </div>
			</div><!--/.container-->       
        <section id="footer-sec" >
           <?php  require_once('_footer.php');?>
        </section>
			<?php require_once('_script.html'); ?>
           
    </body>
</html>