<?php $page_header_title='Stationary Products'?>
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
							<li><input type="checkbox">Calculator</input></li>
                            <br/>
							<li><input type="checkbox">Pen/Pencil/Markers</input></li>
                            <br/>
							<li><input type="checkbox">Notebook/Diary</input></li><br/>
                            <li><input type="checkbox">Bags</input></li><br/>   
                            <li><input type="checkbox">Water Bottle</input></li><br/>
                            <li><input type="checkbox">Tiffin Box</input></li><br/>
                            <li><input type="checkbox">Geometry Box</input></li><br/>
                            <li><input type="checkbox">Colors</input></li><br/>  
                            <li><input type="checkbox">Staplers/Punching machine</input></li><br/>
                            <li><input type="checkbox">Scissors/Cutters</input></li><br/> 
							<li><input type="checkbox">Dictionary</input></li><br/> 
							<li><input type="checkbox">Cello tape/Fevicol</input></li><br/> 
							<li><input type="checkbox">Other Stationaries</input></li><br/>
							</div>             
                        </ul>
                    </div>
					<!--/span-->
                    <div id="content_section" class="col-sm-8 col-md-9 main">
                        <section  id="books_content">
                            <div class="container" style="width: 100%;">     
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <a href="Calculator.php">
                                            <img class="img-responsive img-responsive-images" src="../../images/calculator.jpg" alt="Calculator">
                                            <h5>Calculator</h5>
                                        </a>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <a href="Calculator.php">
                                            <img class="img-responsive img-responsive-images" src="../../images/lunch box.jpg" alt="Notebook/Diary">
                                            <h5>Tiffin Box</h5>
                                        </a>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <a href="Calculator.php">
                                            <img class="img-responsive img-responsive-images"  src="../../images/bottle 2.jpg" alt="Water Bottles">
                                            <h5>Water Bottle</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <a href="Calculator.php">
                                            <img class="img-responsive img-responsive-images" src="../../images/stappler.jpg" alt="Staplers / Punching machine">
                                            <h5>Staplers / Punching machine</h5>
                                        </a>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <a href="Calculator.php">
                                            <img class="img-responsive img-responsive-images" src="../../images/dictionary.jpg" alt="Dictionary">
                                            <h5>Dictionary</h5>
                                        </a>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <a href="Calculator.php">
                                            <img class="img-responsive img-responsive-images"  src="../../images/geometry box.png" alt="Geometry Box">
                                            <h5>Geometry Box</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <a href="Calculator.php">
                                            <img class="img-responsive img-responsive-images" src="../../images/pen.jpg" alt="Pen/ Pencil/Markers">
                                            <h5>Pen/Pencil/Markers</h5>
                                        </a>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <a href="Calculator.php">
                                            <img class="img-responsive img-responsive-images"  src="../../images/bags.jpg" alt="Bags">
                                            <h5>Bags</h5>
                                        </a>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <a href="Calculator.php">
                                            <img class="img-responsive img-responsive-images" src="../../images/color.jpg" alt="Colors">
                                            <h5>Colors</h5>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <a href="Calculator.php">
                                            <img class="img-responsive img-responsive-images" src="../../images/scissors.jpg" alt="Scissors/Cutters">
                                            <h5>Scissors/Cutters</h5>
                                        </a>                                            
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <a href="Calculator.php">
                                            <img class="img-responsive img-responsive-images" src="../../images/cello tape.jpg" alt="Cello Tape/Fevicol">
                                            <h5>Cello Tape/Fevicol</h5>
                                        </a>
                                    </div>
									<div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <a href="Calculator.php">
                                            <img class="img-responsive img-responsive-images" src="../../images/othr stationary.jpg" alt="Other Stationaries">
                                            <h5>Other Stationaries</h5>
                                        </a>
                                    </div>
																		
                            </div>
							<div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 portfolio-item">
                                        <a href="Calculator.php">
                                            <img class="img-responsive img-responsive-images" src="../../images/copy.jpg" alt="Notebook/Diary">
                                            <h5>Notebook/Diary</h5>
                                        </a>                                            
                                    </div></div>
                        
                    
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