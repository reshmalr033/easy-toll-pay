<?php
include 'menu_admin.php';
?>
				<!-- start-search-->
			<div class="clearfix"> </div>
        </div>

		   <!--banner-->
			 	<div class="banner two">
                   <h2 class="second">Please Obey Traffic Rules</h2>
			   </div>
		</div>
		</div>
   <!--//banner-->
   <!--/typography-->
      <div class="typography">
	   <div class="container">
	 
   <div class="col-lg-3"></div>
<div class="col-lg-6">
    <h2 style="color: #eea236;font: italic">LOGIN</h2>
                         
 <table  class="table  table-responsive  table-striped table-bordered ">
        <?php
                        
                           
if(isset($_POST['b1']))
{


$log=mysql_query("select * from add_toll where toll_id='$_POST[t1]' and date='$_POST[t2]'");
if(mysql_num_rows($log)>0)
{
   $_SESSION['toll_id']=$_POST[t1];
   $_SESSION['date']=$_POST[t2];
   
    header("location:toll_result.php");
}


else
{
    header("location:toll_none.php");
}
    
}

                                    ?>
                            
        <tr>
            <td style="font: bold">Toll Id</td>
            <td>
                         <select name="t1"class="form-control">
                        <option value="-- Select State --">-- Select Category --</option>
                         <?php
                              
                         session_start();
                         $c=mysql_query("select * from staff_reg where type='staff'");
                         while($d=mysql_fetch_array($c))
                         {
                         ?>
                         <option><?php echo $d['username'];?></option>
                          <?php
                         }
                         ?>
                         </select>
                         </td>
        </tr>
        <tr>
            <td style="font: bold">Date</td>
            <td><input type="date"name="t2"class="form-control"></td>
        </tr>
        
        <tr>
            
            <td colspan="2" align="center"><input type="submit"value="Complete"name="b1"class="btn btn-success"></td>
            
        </tr>
        
        
    </table>
     
				
		 </div>
    
</div>
  
         

	   </div>
	  </div>
	 <!--//typography-->

		<!--footer-->
			<div class="footer">
				<div class="container">
					 <div class="footer-inner">
					    <div class="col-md-3 footer-grid">
					       <h3 class="widget-title">Locate Us</h3>
						   <p> <i class="glyphicon glyphicon-map-marker"></i> PO Box 15142 Collins Street<br>
							120 King Street, London<br>
							Victoria 2000 London</span></p>
							<p class="phone"><i class="glyphicon glyphicon-earphone"></i> +61 0 1234 0000</p>
							<p><i class="glyphicon glyphicon-envelope"></i> <a href="mailto:info@example.com"> mail@example.com</a></p>
			           </div>
					   <div class="col-md-3 footer-grid second">
					       <h3 class="widget-title">Customer Services</h3>
						      <ul class="menu-customer-service">
						        <li><a href="#">Toll Free 1-800-carzone</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Customer Care</a></li>
								<li><a href="#">Policies</a></li>
								<li><a href="#">Online Returns</a></li>
								<li><a href="#">My Appointments</a></li>
							  </ul>
			           </div>
					    <div class="col-md-3 footer-grid">
					       <h3 class="widget-title">Customer Information</h3>
						      <ul class="menu-customer-service">
						        <li><a href="#">Toll Free 1-800-carzone</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Customer Care</a></li>
								<li><a href="#">Policies</a></li>
								<li><a href="#">Online Returns</a></li>
								<li><a href="#">My Appointments</a></li>
							  </ul>
			           </div>
					   <div class="col-md-3 footer-grid lost">
					       <h3 class="widget-title">Get in touch!</h3>
						        <p>PO Box 15142 Collins Street<i class="glyphicon glyphicon-map-marker"></i> <br>
								Victoria 2007 London<br>
								Anona Headquarters</span></p>
								<p class="phone">(+00) 0123-456-798 <i class="glyphicon glyphicon-earphone"></i></p>
								<p><a href="mailto:info@example.com">mail@example.com</a> <i class="glyphicon glyphicon-envelope"></i></p>
			           </div>
					   <div class="clearfix"></div>
			         </div>
			    </div>
			</div>
			<div class="copy">
		              <p>© 2016 Roadster. All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a> </p>
		            </div>
			<!--start-smooth-scrolling-->
			<script type="text/javascript">
								jQuery(document).ready(function($) {
									$(".scroll").click(function(event){		
										event.preventDefault();
										$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
									});
								});
								</script>
							<!--start-smoth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

     </form>
</body>
</html>