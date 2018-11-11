<?php
include 'menu_admin.php';
?>
<?php

if($z=$_SESSION['username'])
{
    
}
 else {
    header("location:index.php");    
}
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
	  
<div class="col-lg-6">
    <h2 style="color: #00ACED;font: italic">Add Vehicle Class Here</h2>
			 
                         <br/>
                         
                         
    <table class="table table-responsive"style="background: #E5E5E5">
        <?php
                        
                            if(isset($_POST['b1']))
                            {
  
                                
                                
                                 mysql_query("insert into vehicle_type(vehicle_class,amount,2_amt)values('$_POST[t1]','$_POST[t2]','$_POST[t3]')");
                                
                           
                                if(mysql_affected_rows()>0)
{
//echo"Complete";
            header("location:RTO_home.php");
}
else 
{
echo mysql_error();
}
}

if(isset($_GET['del']))
{
    $del=mysql_query("delete from vehicle_type where id='".$_GET['del']."'");
    //echo mysql_error();
    if($del>0)
    {
       header("location:RTO_home.php");
}
}
                            

                            
    ?>


<br>

        <tr>
            <td>Vehicle Type</td>
            <td><input type="text"name="t1"class="form-control"></td>
        </tr>
        <tr>
            <td>Amount</td>
            <td><input type="text"name="t2"class="form-control"placeholder="Rs/-"></td>
        </tr>
        <tr>
            <td>Amount 2 way</td>
            <td><input type="text"name="t3"class="form-control"placeholder="Rs/-"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit"value="Add"name="b1"class="btn btn-success"></td>
        </tr>
        
        
    </table>
    
    
    
</div>
               <div class="col-lg-6">
                   <h2 style="color: #00ACED;font: italic">Vehicle Class And Details</h2>
                   <br>
                   <br>
                   
                   <?php
$sel_des=mysql_query("select * from vehicle_type");
if(mysql_num_rows($sel_des)>0)
{
    ?>
    <table class="table table-responsive table-bordered"style="background: #E5E5E5">
    <tr>
        <td>#</td>
        <td>Vehicle Class</td>
        <td>Amount</td>
        <td>2 WAY</td>
        <td>More</td>
    </tr>
    <?php
    $i=1;
    while($r_des=mysql_fetch_row($sel_des))
    {
        ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $r_des[1] ?></td>
        <td><?php echo $r_des[2] ?>RS/-</td>
        <td><?php echo $r_des[3] ?>RS/-</td>
        <td> <a href="RTO_home.php?del=<?php echo $r_des[0] ?>"><span class="glyphicon glyphicon-trash" style="color: red"></span></a></td>
    </tr>
    <?php
    $i++;
    }
    ?>
</table>
<?php
}
else
{
    echo "No Data Found";
}

?>
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