
<?php
include 'menu_user.php';
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
                <script type="text/javascript">

function chka(b)
{
var p5=b.length;
var ch=/([A-Z])$/;
if(ch.test(b)==false)
{
document.getElementById("n3").innerHTML="<font color='red' >*Only Enter Capital Letters*</font>";
return false;
}
else if(p5!=2)
{
 document.getElementById("n3").innerHTML="<font color='red'>*Only two characters*</font>"; 
 return false;
}
else
{
document.getElementById("n3").innerHTML="";
}
}


function chkb(b1)
{
var k5=b1.length;
var ch1=/([0-9])$/;
if(ch1.test(b1)==false)
{
document.getElementById("m3").innerHTML="<font color='red'>*Only Numbers*</font>";
return false;
}
else if(k5!=2)
{
document.getElementById("m3").innerHTML="<font color='red'>*Only Two Characters*</font>";
return false;
}
else
{
  document.getElementById("m3").innerHTML="";  
}
}


function chkc(b2)
{
var k6=b2.length;
var ch2=/([0-9])$/;
if(ch2.test(b2)==false)
{
document.getElementById("o3").innerHTML="<font color='red'>*Only Numbers*</font>";
return false;
}
else if(k6!=4)
{
document.getElementById("o3").innerHTML="<font color='red'>*Must Have Four Numbers*</font>";
return false;
}
else
{
  document.getElementById("o3").innerHTML="";  
}
}
 
function chkd(c)
{
var t5=c.length;
var ch=/([A-Z])$/;
if(ch.test(c)==false)
{
document.getElementById("q3").innerHTML="<font color='red' >*Only Alphabatic Enter Alphabatic Capital Letters*</font>";
return false;
}

else
{
document.getElementById("q3").innerHTML="";
}
}

</script>
   <!--//banner-->
   <!--/typography-->
      <div class="typography">
	   <div class="container">
               <center>    <h1><font color="green">
                                                            <?php
                                                        if(isset($_GET['success']))
                                                        {
                                                            echo "Successfully Registered";
                                                        }
                                                        
                                                        ?>
                                                            </font></h1>
                                        <h1><font color="red">
                                                            <?php
                                                        if(isset($_GET['fail']))
                                                        {
                                                            echo "Incorect Account No/Aadhar No";
                                                        }
                                                        
                                                        ?>
                                            </font></h1>
                <h1><font color="red">
                                                            <?php
                                                        if(isset($_GET['alr']))
                                                        {
                                                            echo "Username Already Exicts";
                                                        }
                                                        
                                                        ?>
                                            </font></h1></center>
	       
<div class="col-lg-7">
    <h2 style="color: #00ACED;font: italic">Register your Vehicle Here</h2>
    <br/>
		     <?php
                    
                            
                            if(isset($_POST['b1']))
                                
                            {
                                $b=mysql_query("select max(id) from add_vehicle");
$id=mysql_result($b,0);
$id++;
$p=$_FILES['p1']['name'];
$ext=strchr($p,'.');
$pname="$id$ext";
if(move_uploaded_file($_FILES['p1']['tmp_name'],getcwd()."\\img_RTO\\$pname"))
{
   $a=mysql_query("select max(id) from add_vehicle");
$id=mysql_result($a,0);
$id++;
$f=$_FILES['f1']['name'];
$ext=strchr($f,'.');
$fname="$id$ext";
if(move_uploaded_file($_FILES['f1']['tmp_name'],getcwd()."\\img_RTO2\\$fname"))
{   
    $c=mysql_query("select max(id) from add_vehicle");
$id=mysql_result($c,0);
$id++;
$po=$_FILES['po1']['name'];
$ext=strchr($po,'.');
$poname="$id$ext";
if(move_uploaded_file($_FILES['po1']['tmp_name'],getcwd()."\\img_RTO3\\$poname"))
{                         
 $d=mysql_query("select max(id) from add_vehicle");
$id=mysql_result($d,0);
$id++;
$ins=$_FILES['ins1']['name'];
$ext=strchr($ins,'.');
$insname="$id$ext";
if(move_uploaded_file($_FILES['ins1']['tmp_name'],getcwd()."\\img_RTO4\\$insname"))   
{ 
    $g=mysql_query("select max(id) from add_vehicle");
$id=mysql_result($g,0);
$id++;
$rc=$_FILES['rc1']['name'];
$ext=strchr($rc,'.');
$rcname="$id$ext";
if(move_uploaded_file($_FILES['rc1']['tmp_name'],getcwd()."\\img_RTO5\\$rcname"))   
{                         

                        $la=$_POST['t6a'];
                          $lb=$_POST['t6b'];
                          $ld=$_POST['t6d'];
                           $lc=$_POST['t6c'];
                           $lin="$la-$lb-$ld-$lc";
                          $e=mysql_query("select * from add_vehicle where number_plate='$lin'");
	if(mysql_num_rows($e)>0)
	{
		echo"number plate already excit";
	}
	else
	{
            
        $f=mysql_query("select * from add_vehicle where engine_no='$_POST[t7]'");
	if(mysql_num_rows($f)>0)
	{
		echo"Engine Number already excits";
	}
	else
	{
            
            $n=rand('1000','9999');
     mysql_query("insert into add_vehicle(vehicle_type,vehicle_name,vehicle_color,number_plate,engine_no,licence,photo,driver_id,vehicle_id,pollution,insurance,rc_book)values('$_POST[sel]','$_POST[t4]','$_POST[t5]','$la-$lb-$ld-$lc','$_POST[t7]','$fname','$pname','$_SESSION[username]','$n','$poname','$insname','$rcname')");
    
    if(mysql_affected_rows()>0)
{
header("location:user_regestration.php?success=1");
}
else 
{
echo mysql_error();
}
}
                            }
                            
                            }            
}
                            }
                            
                            }
                            
                            }
                            }
                            
                    ?>
                    <table  class="table  table-responsive  table-striped table-bordered ">
                        
                        <tr>
                            <td>Vehicle Type</td>
                            <td>
                                <select name="sel"class="form-control">
                            <option value="-- Select Category --">-- Select Category --</option>
                          <?php
                          
                          session_start();
                          $c=mysql_query("select * from vehicle_type");
                          while($d=mysql_fetch_array($c))
                           {
                           ?>
                           <option><?php echo $d['vehicle_class'];?></option>
                           <?php
                            }
                            ?>
                            </select>
                                
                            </td>
                            
                        </tr>
                        
                        <tr>
                            <td>Vehicle Name</td>
                            <td><input type="text"name="t4"class="form-control"required="required"></td>
                        </tr>
                        <tr>
                            <td>Vehicle Color</td>
                            <td><input type="text"name="t5"class="form-control"required="required"></td>
                        </tr>
                        <tr>
                            <td>Vehicle's Number Plate</td>
                            
                        <td><input type="text"name="t6a"class="form-control"equired="required"onblur="chka(this.value)" /><span id="n3"></span>--
                                <input type="text"name="t6b"class="form-control"required="required"onblur="chkb(this.value)" /><span id="m3"></span>--
                                <input type="text"name="t6d"class="form-control"required="required"onblur="chkd(this.value)" /><span id="q3"></span>--
                                <input type="text"name="t6c"class="form-control"required="required"onblur="chkc(this.value)" /><span id="o3"></span></td>
                        
                        </tr>
                        <tr>
                            <td>Vehicle's Engine Number </td>
                            <td><input type="text"name="t7"class="form-control"required="required"></td>
                        </tr>
                        <tr>
                            <td>Licence Copy</td>
                            <td><input type="file"name="f1"></td>
                        </tr>
                         <tr>
                            <td>Your Photo</td>
                            <td><input type="file"name="p1"></td>
                        </tr>
                        <tr>
                            <td>Pollution</td>
                            <td><input type="file"name="po1"></td>
                        </tr>
                        <tr>
                            <td>Insurance</td>
                            <td><input type="file"name="ins1"></td>
                        </tr>
                        <tr>
                            <td>RC Book</td>
                            <td><input type="file"name="rc1"></td>
                        </tr>
                         <tr>
                           
                             <td colspan="2"align="center"><input type="submit"value="Register Vehicle"name="b1"class="btn btn-success"></td>
                        </tr>
                    </table>
                    
                   
                   
	      </div>
               <div class="col-lg-5">
                   <h2 style="color: #00ACED;font: italic">Your Vehicles</h2>
    <br/>
                   
                   
                   <table class="table table-responsive table-bordered"style="background: #E5E5E5">
                      
                       <tr>
        
        <td>Vehicle Plate</td>
        <td>Vehicle Name</td>
        <td>Vehicle Id</td>
        <td>more</td>
        
    </tr>
     <?php
                            if(isset($_GET['del']))
{
    $del=mysql_query("delete from add_vehicle where id='".$_GET['del']."'");
    //echo mysql_error();
    if($del>0)
    {
       header("location:vehicle_regestration.php");
}
}
                            
?>
                            
     <?php
                            
                            $a=mysql_query("select * from add_vehicle where driver_id='$_SESSION[username]'");
                            
                            $i=0;
                            while($b=mysql_fetch_array($a))
                            {
                            
                            
                            ?>
   
    <tr>
       
        <td><?php echo $b['number_plate']?></td>
        <td><?php echo $b['vehicle_name']?></td>
        <td><?php echo $b['vehicle_id']?></td>
        <td><a href="vehicle_regestration.php?del=<?php echo $b[0] ?>"><span class="glyphicon glyphicon-trash" style="color: red"></span></a>  <a href="vehicle_detail.php?bid=<?php echo $b['0']?>"><span class="glyphicon glyphicon-zoom-in" style="color: green"></span></a></td>
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
			<?php
                        include 'footer.php';
                        ?>