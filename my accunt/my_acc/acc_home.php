<?php $page_header_title='My Account'?>
<!DOCTYPE html>
<html lang="en">

<style>
.panel-title{
	
	font-family:Georgia, "Times New Roman", Times, serif;
	}
	
.web_design_9{
	margin-left:5%;
	}
	




</style>


    <head>        
        <?php require_once ('_headtag.php') ?>
        <script>
   function Click(){
	   window.scrollTo(0 , 0);
	   
	   }
        </script>
        
    </head>
    <body>
        <div class="header bg-primary">
            <?php require_once('_header.php'); ?>
        </div>
        <div class="nav-with-header" id="img-logo-manipulate">
             <?php require_once('_menu.php'); ?>
             <?php require_once('_pageheader.php'); ?>
        </div><br><br>
        <div class="container-fluid content" > 
        
        
        
        
        
                <div class="container" style="margin-top:0%; width:126%; margin-left:-15%; background-color:#CCC;">
                    
                    
                    <div class="col-sm-4 col-md-2" id="sidebar" role="navigation" style=" background-color:#CCC; margin-top:0%; height:100%;">           
                        <ul class="nav nav-sidebar" style="height:100%;">
                            <li class="active"><h3 class="text-info" style="margin-left:2%;">SETTINGS</h3></li>
                            <div class="book-categories text-info" style="margin-left:2%;">
							<br/>
                            
                            
							<li><a  href="../Personal_information.php" target="frame" style="color:#707070; size:3px; face:Arial, Helvetica, sans-serif;" onClick="Click()">Personal Information</a>
</li><br/>
							<li>
<a  href="../edit_account.php" target="frame" style="color:#707070; size:3px; face:Arial, Helvetica, sans-serif;" onClick="Click()">Edit Account</a></li><br/>

							<li>
<a  href="../change_password.php" target="frame" style="color:#707070; size:3px; face:Arial, Helvetica, sans-serif;" onClick="Click()">Change Password</a></li><br/>
                            <li>
<a  href="../change_address.php" target="frame" style="color:#707070; size:3px; face:Arial, Helvetica, sans-serif;" onClick="Click()">Change Address</a></li><br/>   
                            <li>
<a  href="../update_email_mobile.php" target="frame" style="color:#707070; size:3px; face:Arial, Helvetica, sans-serif;" onClick="Click()">Update Email/Mobile</a></li><br/>
                            <li>
<a  href="../account_deactivation.php" target="frame" style="color:#707070; size:3px; face:Arial, Helvetica, sans-serif;" onClick="Click()">Deactive Account</a></li><br/>
                            <li>
<a  href="../notification.php" target="frame" style="color:#707070; size:3px; face:Arial, Helvetica, sans-serif;" onClick="Click()">Notification</a></li><br/>
                           
                           
                           
                           <li class="active"><h3 class="text-info">Order History</h3></li>
                           
                            <li>
<a  href="../recent_orders.php" target="frame" style="color:#707070; size:3px; face:Arial, Helvetica, sans-serif;" onClick="Click()">Recent orders</a></li><br/>  
                            <li>
<a  href="../past_orders.php" target="frame" style="color:#707070; size:3px; face:Arial, Helvetica, sans-serif;" onClick="Click()">Past order</a></li><br/>
                            <li><a  href="../Wishlist.html" target="frame" style="color:#707070; size:3px; face:Arial, Helvetica, sans-serif;" onClick="Click()">Wishlist</a></li><br/> 
                            
                            
        <li class="active"><h3 class="text-info">Wallet</h3></li>
        
        
                 <li><a  href="../current_balance.php" target="frame" style="color:#707070; size:3px; face:Arial, Helvetica, sans-serif;" onClick="Click()">Current Balance</a></li><br/> 
                 
                 <li><a  href="../last_transaction.php" target="frame" style="color:#707070; size:3px; face:Arial, Helvetica, sans-serif;" onClick="Click()">Last Transaction</a></li><br/>             
                   
                   
                   
            <li class="active"><h3 class="text-info">Online Courses</h3></li>       
                   
                   
                         
                  <li><a  href="../certifications.php" target="frame" style="color:#707070; size:3px; face:Arial, Helvetica, sans-serif;" onClick="Click()">Certification</a></li><br/> 
                         
                   <li><a  href="../downloads.php" target="frame" style="color:#707070; size:3px; face:Arial, Helvetica, sans-serif;" onClick="Click()">Downloads</a></li><br/>        
                           
                 <li><a  href="../quiz.php" target="frame" style="color:#707070; size:3px; face:Arial, Helvetica, sans-serif;" onClick="Click()">Quiz Marks</a></li><br/>            
                           
                   
                   
            <li class="active"><h3 class="text-info">Recommended</h3></li>       
                   
                   
                           
                   <li><a  href="../recommended_courses.php" target="frame" style="color:#707070; size:3px; face:Arial, Helvetica, sans-serif;" onClick="Click()">Recommended Courses</a></li><br/>          
                   
                   
                   
                   <li><a  href="../recommended_project.php" target="frame" style="color:#707070; size:3px; face:Arial, Helvetica, sans-serif;" onClick="Click()">Recommended Projects</a></li><br/>  
              
              
         
                   
                           
                       <li><a  href="../recommended_stationary.php" target="frame" style="color:#707070; size:3px; face:Arial, Helvetica, sans-serif;" onClick="Click()">Recommended Stationary</a></li><br/><br>      
                           
                            
                            </div>             
                        </ul>
                    </div><!--/span-->
 
 
                    <div class="col-sm-8 col-md-10 " style=" margin-top:0%;">
                        <section  id="books_content">
                            <div class="container" style="width: 100%;;">     
                                <div class="row" style="background-color:#CCC; width:100%; " >
                                   
                                   
                                   <iframe height="1060px" width="106%" name="frame" src=""></iframe> 
                                </div>                                    
                            </div>
                        </section>
                    </div><!--/row-->
                </div>
            </div><!--/.container-->       
         </div>    
        <section id="footer-sec" >
           <?php  require_once('_footer.php');?>
        </section>
			<?php require_once('_script.html'); ?>
          
    </body>
</html>