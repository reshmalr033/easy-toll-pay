<?php
include 'menu_user.php';
include '../conection.php';
ob_start();
if(isset($_GET['del']))
{
    $bid=$_GET['bid'];
    $fnme=$_GET['fnme'];
    $del=$_GET['del'];
    if($del==1)
    {
        unlink("img_RTO5/$fnme");
        $del1=mysql_query("update add_vehicle set rc_book='no' where id='$bid'");
        if($del1>0)
        {
            header("location:vehicle_detail.php?bid=$bid");
        }
    }
    if($del==2)
    {
        unlink("img_RTO2/$fnme");
        $del2=mysql_query("update add_vehicle set licence='no' where id='$bid'");
        if($del2>0)
        {
            header("location:vehicle_detail.php?bid=$bid");
        }
    }
    if($del==3)
    {
        unlink("img_RTO3/$fnme");
        $del3=mysql_query("update add_vehicle set pollution='no' where id='$bid'");
        if($del3>0)
        {
            header("location:vehicle_detail.php?bid=$bid");
        }
    }
    
    if($del==4)
    {
        unlink("img_RTO4/$fnme");
        $del4=mysql_query("update add_vehicle set insurance='no' where id='$bid'");
        if($del4>0)
        {
            header("location:vehicle_detail.php?bid=$bid");
        }
    }
}
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
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/

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
   <!--//banner-->
   <!--/typography-->
      <div class="typography">
	   <div class="container">
               <center>
<div class="col-lg-2"></div>
<div class="col-lg-8">
    
		 <h2 style="color: #00ACED;font: italic"> Vehicle Details</h2>
		   
   <table  class="table  table-responsive  table-striped table-bordered "height="300"border="3">
         <?php
                           
                            $a=mysql_query("select * from add_vehicle where id=".$_GET['bid']);
                            
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
                 <?php
                 if($b['rc_book']=="no")
                 {
                    ?>
                 <a href="add_data.php?bid=<?php echo $b['id'] ?>&fld=rc_book&foldr=img_RTO5"><span class="glyphicon glyphicon-plus"style="color: green"></span></a>
                 <?php
                 }
                 else
                 {
                 ?>
                 <a href="vehicle_detail.php?del=1&bid=<?php echo $b['id'] ?>&fnme=<?php echo $b['rc_book'] ?>"><span class="glyphicon glyphicon-trash"style="color: red"></span></a>
             <?php
                 }
                 ?>
             
             
             </td>
            
        </tr>
        <tr>
            <td><b>Licence:</b>    <a href="img_RTO2//<?php echo $b['licence']?>"target="_blank"><span class="glyphicon glyphicon-fullscreen"style="color: blue"></span></a> <a href="add_linc.php?mid=<?php echo $b['id'] ?>"target="_blank"><span class="glyphicon glyphicon-picture"style="color: limegreen"></span></a>
            <?php
                 if($b['licence']=="no")
                 {
                    ?>
                 <a href="add_data.php?bid=<?php echo $b['id'] ?>&fld=licence&foldr=img_RTO2"><span class="glyphicon glyphicon-plus"></span></a>
                 <?php
                 }
                 else
                 {
                 ?>
                 <a href="vehicle_detail.php?del=2&bid=<?php echo $b['id'] ?>&fnme=<?php echo $b['licence'] ?>"><span class="glyphicon glyphicon-trash"style="color: red"></span></a>
             <?php
                 }
                 ?>
            
            </td>
            <td><b>Pollution:</b>    <a href="img_RTO3//<?php echo $b['pollution']?>"target="_blank"><span class="glyphicon glyphicon-fullscreen"style="color: blue"></span></a>
             <?php
                 if($b['pollution']=="no")
                 {
                    ?>
                 <a href="add_data.php?bid=<?php echo $b['id'] ?>&fld=pollution&foldr=img_RTO3"><span class="glyphicon glyphicon-plus"style="color: green"></span></a>
                 <?php
                 }
                 else
                 {
                 ?>
                 <a href="vehicle_detail.php?del=3&bid=<?php echo $b['id'] ?>&fnme=<?php echo $b['pollution'] ?>"><span class="glyphicon glyphicon-trash"style="color: red"></span></a>
             <?php
                 }
                 ?>
            
            </td>
            <td><b>Insurance:</b>    <a href="img_RTO4//<?php echo $b['insurance']?>"target="_blank"><span class="glyphicon glyphicon-fullscreen"style="color: blue"></span></a>
            <?php
                 if($b['insurance']=="no")
                 {
                    ?>
                 <a href="add_data.php?bid=<?php echo $b['id'] ?>&fld=insurance&foldr=img_RTO4"><span class="glyphicon glyphicon-plus"style="color: green"></span></a>
                 <?php
                 }
                 else
                 {
                 ?>
                 <a href="vehicle_detail.php?del=4&bid=<?php echo $b['id'] ?>&fnme=<?php echo $b['insurance'] ?>"><span class="glyphicon glyphicon-trash"style="color: red"></span></a>
             <?php
                 }
                 ?>
            
            </td>
            
        </tr>
        </table> 
                 
                 <center>
                 <a href="vehicle_print.php?bid=<?php echo $b['id']?>"target="_blank"class='btn btn-primary'><h4>Print This Card</h4></a>
                 </center>
 <?php
                            }
                            ?>
     
                 
	
		
			

	   </div>
	  </div>
	 <!--//typography-->

		<!--footer-->
                <br/>
			<?php
                        include 'footer.php';
                        ?>