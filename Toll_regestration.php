<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
<?php
include 'menu_staff.php';
include '../conection.php';

ob_start();
?>
<?php

$a=$_SESSION['username'];


if(isset($_SESSION['username']))
{
    
}
 else {
    header("location:index.php");    
}
?>
<?php
date_default_timezone_set('asia/kolkata');

$script_tz = date_default_timezone_get();

if (strcmp($script_tz, ini_get('date.timezone'))){
    echo '';
} else {
    echo '';
}
?>


							<!--script-for-menu-->
							<script>
							$( "span.menu" ).click(function() {
							  $( ".top-menu" ).slideToggle( "slow", function() {
								// Animation complete.
							  });
							});
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
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <style type="text/css">
body{
    width:100%;
    text-align:center;
}
img{
    border:0;
}
#main{
    margin: 15px auto;
    background:white;
    overflow: auto;
	width: 100%;
}
#header{
    background:white;
    margin-bottom:15px;
}
#mainbody{
    background: white;
    width:100%;
	display:none;
}
#footer{
    background:white;
}
#v{
    width:320px;
    height:240px;
}
#qr-canvas{
    display:none;
}
#qrfile{
    width:320px;
    height:240px;
}
#mp1{
    text-align:center;
    font-size:35px;
}
#imghelp{
    position:relative;
    left:0px;
    top:-160px;
    z-index:100;
    font:18px arial,sans-serif;
    background:#f0f0f0;
	margin-left:35px;
	margin-right:35px;
	padding-top:10px;
	padding-bottom:10px;
	border-radius:20px;
}
.selector{
    margin:0;
    padding:0;
    cursor:pointer;
    margin-bottom:-5px;
}
#outdiv
{
    width:320px;
    height:240px;
	border: solid;
	border-width: 3px 3px 3px 3px;
}
#result{
    border: solid;
	border-width: 1px 1px 1px 1px;
	padding:20px;
	width:70%;
}

ul{
    margin-bottom:0;
    margin-right:40px;
}
li{
    display:inline;
    padding-right: 0.5em;
    padding-left: 0.5em;
    font-weight: bold;
    border-right: 1px solid #333333;
}
li a{
    text-decoration: none;
    color: black;
}

#footer a{
	color: black;
}
.tsel{
    padding:0;
}

</style>
<script type="text/javascript" src="llqrcode.js"></script>
<script type="text/javascript" src="js/plusone.js"></script>
<script type="text/javascript" src="webqr.js"></script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24451557-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
   <!--//banner-->
   <!--/typography-->
      <div class="typography">
	   <div class="container">
	<div class="col-lg-12">   
            <center>    <h1><font color="green">
                                                            <?php
                                                        if(isset($_GET['success']))
                                                        {
                                                            echo "Complete";
                                                        }
                                                        
                                                        ?>
                                                            </font></h1>
                                        <h1><font color="red">
                                                            <?php
                                                        if(isset($_GET['fail']))
                                                        {
                                                            echo "Low Account Balance";
                                                        }
                                                        
                                                        ?>
                                            </font></h1>
                <h1><font color="red">
                                                            <?php
                                                        if(isset($_GET['alr']))
                                                        {
                                                            echo "Toll Already Paid";
                                                        }
                                                        
                                                        ?>
                                            </font></h1></center>
<div class="col-lg-6">
    <h2 style="color: #00ACED;font: italic">Add Vehicle Details</h2>
                   <br/>
                   <br/>
		     <?php
                    
                            
                            if(isset($_GET['report']))
                            { 
                                $sel=$_GET['typ'];
                                $date=date('Y-m-d');  
                                  $a=mysql_query("select * from add_toll where date='$date'and vehicle_id='$_GET[code]' and toll_id='$_SESSION[username]' and st='1'");
	if(mysql_num_rows($a)>0)
	{
		header("location:Toll_regestration.php?alr=1");
	}
	else
	{
             if($sel=="2")
             {
                            $vs="select vehicle_type from add_vehicle where vehicle_id='$_GET[code]'";
                            $vs1=mysql_query($vs);
                            if(mysql_affected_rows()>0)
                           { 
                            $vs2=mysql_result($vs1,0);
                            
                            $vt="select 2_amt from vehicle_type where vehicle_class='$vs2'";
                            $vt1=mysql_query($vt);
                            $vt2=mysql_result($vt1,0);
                            
                            $nn="select name from staff_reg where username='$_SESSION[username]'";
                            $nn1=mysql_query($nn);
                            $nn2=mysql_result($nn1,0);
                            
                            $aa="select address from staff_reg where username='$_SESSION[username]'";
                            $aa1=mysql_query($aa);
                            $aa2=mysql_result($aa1,0);
                            
                            $dd="select driver_id from add_vehicle where vehicle_id='$_GET[code]'";
                            $dd1=mysql_query($dd);
                            $dd2=mysql_result($dd1,0);
                               
                            $acn="select account_no from staff_reg where username='$dd2'";
                            $acn1=mysql_query($acn);
                            $acn2=mysql_result($acn1,0);
                            
                            $adn="select aadhar_no from staff_reg where username='$dd2'";
                            $adn1=mysql_query($adn);
                            $adn2=mysql_result($adn1,0);
 
                            
                            
                                $qry="select amount from account_bank where account_no='$acn2'";
                                $qry1=mysql_query($qry);
                                $qry2=mysql_result($qry1,0);
                                
                                $tot=$qry2-$vt2;
                                
                                if($vt2>$qry2)
                            { 
                                    header("location:Toll_regestration.php?fail=1");
                            }
 else {
     
                              $upd=mysql_query("update account_bank set amount= '$tot'where account_no='$acn2'");
                            if(mysql_affected_rows()>0)
                           {
                                
                 $t=date("h:m:a");              
                          
     mysql_query("insert into add_toll(vehicle_id,vehicle_class,amount,date,toll_id,toll_name,toll_address,time,st)values('$_GET[code]','$vs2','$vt2','$date','$_SESSION[username]','$nn2','$aa2','$t','1')");
    
    if(mysql_affected_rows()>0)
{
        header("location:Toll_regestration.php?suss=1&mid=$code");
}
else 
{
echo"Incorrect Vehicle id";
}

        }
                           }
                           }
 else {
     echo"Incorrect Vehicle id";
     
 }
                           }
                           else
                           {
                              $vs="select vehicle_type from add_vehicle where vehicle_id='$_GET[code]'";
                            $vs1=mysql_query($vs);
                            if(mysql_affected_rows()>0)
                           { 
                            $vs2=mysql_result($vs1,0);
                            
                            $vt="select amount from vehicle_type where vehicle_class='$vs2'";
                            $vt1=mysql_query($vt);
                            $vt2=mysql_result($vt1,0);
                            
                            $nn="select name from staff_reg where username='$_SESSION[username]'";
                            $nn1=mysql_query($nn);
                            $nn2=mysql_result($nn1,0);
                            
                            $aa="select address from staff_reg where username='$_SESSION[username]'";
                            $aa1=mysql_query($aa);
                            $aa2=mysql_result($aa1,0);
                            
                            $dd="select driver_id from add_vehicle where vehicle_id='$_GET[code]'";
                            $dd1=mysql_query($dd);
                            $dd2=mysql_result($dd1,0);
                               
                            $acn="select account_no from staff_reg where username='$dd2'";
                            $acn1=mysql_query($acn);
                            $acn2=mysql_result($acn1,0);
                            
                            $adn="select aadhar_no from staff_reg where username='$dd2'";
                            $adn1=mysql_query($adn);
                            $adn2=mysql_result($adn1,0);
 
                            
                            
                                $qry="select amount from account_bank where account_no='$acn2'";
                                $qry1=mysql_query($qry);
                                $qry2=mysql_result($qry1,0);
                                
                                $tot=$qry2-$vt2;
                                
                                if($vt2>$qry2)
                            { 
                                    header("location:Toll_regestration.php?fail=1");
                            }
 else {
     
                              $upd=mysql_query("update account_bank set amount= '$tot'where account_no='$acn2'");
                            if(mysql_affected_rows()>0)
                           {
                                
                 $t=date("h:m:a");              
                          $code=$_GET['code'];
     mysql_query("insert into add_toll(vehicle_id,vehicle_class,amount,date,toll_id,toll_name,toll_address,time,st)values('$_GET[code]','$vs2','$vt2','$date','$_SESSION[username]','$nn2','$aa2','$t','0')");
    
    if(mysql_affected_rows()>0)
{
header("location:Toll_regestration.php?suss=1&mid=$code");
}
else 
{
echo"Incorrect Vehicle id";
}

        }
                           }
                           }
 else {
     echo"Incorrect Vehicle id";
     
 }   
                           }
                            }
                            
                            
                            
                                       

                          
                            
                            }     
                            
                    ?>
                    <form method="post">
                            <table class="table table-bordered table-striped table-hover table-responsive">
                                <tr>
                                    
                                    <td><select class="form-control"name="sel" id="sel">
                                            <option>---Select path---</option>
                                            <option value="1">One Way</option>
                                             <option value="2">Two Way</option>
                                        </select></td>
                                </tr>
                            <tr>
                                
                                <td><center>
                                    <img class="selector" id="qrimg" src="cam.png" onclick="setimg()"/>
                                <div id="outdiv">
                                </div></center>
                            <input type="text" name="rslt" id="result" onfocus="loadchk1()" />
                            </td>
                            </tr>
                           
                            <tr style="display: none;">
                                <td colspan="2"><center><input type="submit" name="sub" value="Find My REPORT" class="btn btn-success" /></center></td>
                            </tr>
                            <canvas id="qr-canvas" width="800" height="600"></canvas>
<script type="text/javascript">load();</script>
                            <script>
                                function loadchk1()
                                {
                                    var code=document.getElementById("result").value;
                                    var typ=document.getElementById("sel").value;
                                    window.location.href = "Toll_regestration.php?report=1&code=" +code+"&typ="+typ ;
                                }
                                </script>
                            
                            </table>
                        </form>
                    
                   
                   
	      </div>
		 
            <div class="col-lg-6">
                <h2 style="color: #00ACED;font: italic"> Details</h2>
                   <br/>
                   <br/>
                
                
                <table  class="table  table-responsive  table-striped table-bordered "height="300"border="3">
         <?php
                           if(isset($_GET['suss']))
                           {
                            $a=mysql_query("select * from add_vehicle where vehicle_id=".$_GET['mid']);
                            
                            $i=0;
                            while($b=mysql_fetch_array($a))
                            {
                            
                            
                            ?>
        
        
        <tr>
            <td align="center"><a href="img_RTO//<?php echo $b['photo']?>"target="_blank"/><img src="img_RTO//<?php echo $b['photo']?>" style="width: 250px; height:200px;"class="img img-responsive" /></a></td>
            <td colspan="2"><b>Vehicle Class:</b> <?php echo $b['vehicle_type']?><br/><br/>
                <b>Vehicle Name:</b> <?php echo $b['vehicle_name']?><br/><br/>
                
            <b>Vehicle color:</b> <?php echo $b['vehicle_color']?><br/><br/>
            <b>Vehicle Id:</b> <?php echo $b['vehicle_id']?>
            </td>
            
        </tr>
       
         <tr >
             <td><b>Number Plate:</b> <?php echo $b['number_plate']?></td>
             <td><b>Engine No:</b> <?php echo $b['engine_no']?></td>
             <td><b>RC Book:</b>    <a href="img_RTO5//<?php echo $b['rc_book']?>"target="_blank"><span class="glyphicon glyphicon-fullscreen"style="color: blue"></span></a>
                
             
             </td>
            
        </tr>
        <tr>
            <td><b>Licence:</b>    <a href="img_RTO2//<?php echo $b['licence']?>"target="_blank"><span class="glyphicon glyphicon-fullscreen"style="color: blue"></span></a> <a href="add_linc.php?mid=<?php echo $b['id'] ?>"target="_blank"><span class="glyphicon glyphicon-picture"style="color: limegreen"></span></a>
            
            </td>
            <td><b>Pollution:</b>    <a href="img_RTO3//<?php echo $b['pollution']?>"target="_blank"><span class="glyphicon glyphicon-fullscreen"style="color: blue"></span></a>
            
                
            
            </td>
            <td><b>Insurance:</b>    <a href="img_RTO4//<?php echo $b['insurance']?>"target="_blank"><span class="glyphicon glyphicon-fullscreen"style="color: blue"></span></a>
           
                  <?php
                 
                    
                            }}
                 ?>
            
            </td>
            
        </tr>
        </table> 
            </div>

	   </div>
           
           </div>
	  </div>  
		  
	
		
			

	   
	 <!--//typography-->

		<!--footer-->
			<?php
                        include 'footer.php';
                        ?>