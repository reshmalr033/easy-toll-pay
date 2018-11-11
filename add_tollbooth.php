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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&callback=myMap"></script>

    <script type="text/javascript">
        window.onload = function () {
            var mapOptions = {
                center: new google.maps.LatLng(8.493865786553638, 76.94784119725227),
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var infoWindow = new google.maps.InfoWindow();
            var latlngbounds = new google.maps.LatLngBounds();
            var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
            google.maps.event.addListener(map, 'click', function (e) {
                //alert("Latitude: " + e.latLng.lat() + "\r\nLongitude: " + e.latLng.lng());
                document.getElementById("la").value=e.latLng.lat();
                document.getElementById("lo").value=e.latLng.lng();
            });
        }
    </script>
		
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
               	  
<div class="col-lg-7">
    <h2 style="color: #00ACED;font: italic">Add TollBooth</h2>
    <br/>
		     <?php
                    
                            
                            if(isset($_POST['b1']))
                                
                            {
                                $a=mysql_query("select * from staff_reg where username='$_POST[t4]'");
	if(mysql_num_rows($a)>0)
	{
		echo"username already excits";
	}
	else
	{
                          
     mysql_query("insert into staff_reg(name,state,district,address,contact,username,password,type,account_no,aadhar_no,status)values('$_POST[t1]','$_POST[stat]','$_POST[dist]','$_POST[t2]','$_POST[t3]','$_POST[t4]','$_POST[t5]','staff','$_POST[la]','$_POST[lo]','1')");
    
    if(mysql_affected_rows()>0)
{
echo"Complete";
}
else 
{
echo mysql_error();
}
}
  if(isset($_GET['del']))
{
    $del=mysql_query("delete from staff_reg where id='".$_GET['del']."'");
    //echo mysql_error();
    if($del>0)
    {
       header("location:add_tollbooth.php");
}
}
                            
                            }
                            
                            
    ?>                                  

                          

                            
                    
                   <table  class="table  table-responsive  table-striped table-bordered ">
                        <tr>
                            <td>Name</td>
                            <td><input type="text"name="t1"class="form-control"required="required"></td>
                        </tr>
                        <tr>
                        <tr>
                                <td>Choose State</td>
                                <td>
                                    <select name="stat" id="stat" class="form-control" required="required" onchange="loaddistrict(this.value);loadst_hos(this.value)">
                                        <option value="">Choose One</option>
                                        <?php
                                        $sel_state=mysql_query("select * from state");
                                        while($r_state=mysql_fetch_row($sel_state))
                                        {
                                            ?>
                                        <option value="<?php echo $r_state[0] ?>"><?php echo $r_state[1] ?></option>
                                       <?php
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                                      <script type="text/javascript">
                               function loaddistrict(x)
                               {
                                   var xmlhttp = new XMLHttpRequest();
                                    xmlhttp.onreadystatechange = function() {
                                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                                            document.getElementById("dis").innerHTML = xmlhttp.responseText;
                                        }
                                    };
                                    xmlhttp.open("GET", "load_districtindex.php?x=" + x, true);
                                    xmlhttp.send();
                               }
                               
                            </script>
                         <tr>
                                <td>Choose District</td>
                                <td>
                                    <span id="dis">
                                        <select name="dist" class="form-control" required="required">
                                        <option value="">Choose One</option>
                                        </select>
                                    </span>
                                </td>
                            </tr>          
                        
                         <tr>
                        <tr>
                            <td>Address</td>
                            <td><textarea name="t2"class="form-control"cols="5"rows="5"required="required"></textarea></td>
                        </tr>
                        
                        <tr>
                            <td>Contact</td>
                            <td><input type="text"name="t3"class="form-control"required="required"></td>
                        </tr>
                        <tr>
                                                    <td>Latitude</td>
                                                    <td><input type="text" name="la" id="la" class="form-control" required="required" /></td>
                                                </tr>
                                                <tr>
                                                    <td>Longitude</td>
                                                    <td><input type="text" name="lo" id="lo" class="form-control" required="required" /></td>
                                                </tr>
                        
                        <tr>
                            <td>Username</td>
                            <td><input type="text"name="t4"class="form-control"required="required"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password"name="t5"class="form-control"required="required"></td>
                        </tr>
                        
                         <tr>
                            
                             <td colspan="2"align="center"><input type="submit"value="Create"name="b1"class="btn btn-success"></td>
                        </tr>
                    </table>
                    
                   
                   
	      </div>
               <div class="col-lg-5">
                   <div id="dvMap" style="width: 100%; height: 500px"></div>
                   <br/>
                   
                   <h2 style="color: #00ACED;font: italic">TollBooth</h2>
    <br/>
                            <table class="table table-responsive table-bordered"style="background: #E5E5E5">
                      
                       <tr>
        
        <td>Name</td>
        <td>Username</td>
        <td>Password</td>
        <td>more</td>
        
    </tr>
     <?php
                            if(isset($_GET['del']))
{
    $del=mysql_query("delete from staff_reg where id='".$_GET['del']."'");
    //echo mysql_error();
    if($del>0)
    {
       header("location:add_tollbooth.php");
}
}
                            
?>
                            
     <?php
                            
                            $a=mysql_query("select * from staff_reg where type='staff'");
                            
                            $i=0;
                            while($b=mysql_fetch_array($a))
                            {
                            
                            
                            ?>
   
    <tr>
       
        <td><?php echo $b['name']?></td>
        <td><?php echo $b['username']?></td>
        <td><?php echo $b['password']?></td>
        <td><a href="add_tollbooth.php?del=<?php echo $b[0] ?>"><span class="glyphicon glyphicon-trash" style="color: red"></span></a></td>
       <?php
    $i++;
    }
    ?>
    </tr>
      
</table>
                   
                   
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