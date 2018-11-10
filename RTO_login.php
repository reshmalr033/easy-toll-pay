<?php
include 'index_menu.php';
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
                                             
                           session_start();
if(isset($_POST['b1']))
{
$t1=$_POST['t1'];
    $t2=$_POST['t2'];

$log=mysql_query("select * from staff_reg where username='$_POST[t1]' and password='$_POST[t2]'");
if(mysql_num_rows($log)>0)
{
    $r=mysql_fetch_row($log);
if($r[14]=="admin")
{
    $_SESSION['username']=$t1;
    header("location:RTO_home.php");
    
}
if($r[14]=="staff")
{
    $_SESSION['username']=$t1;
    header("location:home_staff.php");
}
if($r[14]=="user")
{
    $_SESSION['username']=$t1;
    header("location:home_user.php");
}
if($r[14]=="police")
{
    $_SESSION['username']=$t1;
    header("location:home_police.php");
}

}
else
{
    echo"invalid username or password";
}
    

}
 
                                    ?>
     
                            
        <tr>
            <td>Username</td>
            <td><input type="text"name="t1"class="form-control"></td>
        </tr>
        
        <tr>
            <td>Password</td>
            <td><input type="password"name="t2"class="form-control"></td>
        </tr>
        
        <tr>
            
            <td colspan="2" align="center"><input type="submit"value="Login"name="b1"class="btn btn-success"></td>
            
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