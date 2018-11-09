
<?php
include 'index_menu.php';
?>
				<!-- start-search-->
			<div class="clearfix"> </div>
        </div>

		   <!--banner-->
			 	<div class="banner two">
                   <h2 class="second">Registration</h2>
			   </div>
		</div>
		</div>
                <script type="text/javascript">
    
    
    function chkc(b2)
{
var k5=b2.length;
var ch2=/([0-9])$/;
if(ch2.test(b2)==false)
{
document.getElementById("o3").innerHTML="<font color='red'>*Only Numbers*</font>";
return false;
}
else if(k5!=10)
{
document.getElementById("o3").innerHTML="<font color='red'>*Please Check Your Mobile Number*</font>";
return false;
}
else
{
  document.getElementById("o3").innerHTML="";  
}
}
  
 function chkd(d2)
{
var t5=d2.length;
var ch2=/([0-9])$/;
if(ch2.test(d2)==false)
{
document.getElementById("p3").innerHTML="<font color='red'>*Only Numbers*</font>";
return false;
}
else if(t5!=12)
{
document.getElementById("p3").innerHTML="<font color='red'>*Please Check Your Aadhar Number*</font>";
return false;
}
else
{
  document.getElementById("p3").innerHTML="";  
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
	       
<div class="col-lg-2"></div>
<div class="col-lg-8">
    <h2 style="color: #D5331D;font-style: italic" >Register Here</h2>
    <br/>
		     <?php
                    
                            
                            if(isset($_POST['b1']))
                                
                            {
                                $a=mysql_query("select * from staff_reg where username='$_POST[t4]'");
	if(mysql_num_rows($a)>0)
	{
		header("location:user_regestration.php?alr=1");
	}
	else
	{
             $c=mysql_query("select * from account_bank where account_no='$_POST[a1]' and aadhar_no='$_POST[a2]'");
	if(mysql_num_rows($c)>0)
            {
		
	
                          
     mysql_query("insert into staff_reg(name,gender,address,contact,account_no,aadhar_no,username,password,type,status)values('$_POST[t1]','$_POST[r1]','$_POST[t2]','$_POST[t3]','$_POST[a1]','$_POST[a2]','$_POST[t4]','$_POST[t5]','user','1')");
    
    if(mysql_affected_rows()>0)
{
header("location:user_regestration.php?success=1");
}

}
 else 
{
header("location:user_regestration.php?fail=1");
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
                                    <td>Gender</td>
                                    <td><input type="radio"name="r1"value="Male">Male
                                    
                                 <input type="radio"name="r1"value="Female">Female</td>
                                </tr>
                         
                         <tr>
                        <tr>
                            <td>Address</td>
                            <td><textarea name="t2"class="form-control"cols="5"rows="5"required="required"></textarea></td>
                        </tr>
                        
                        <tr>
                            <td>Contact</td>
                            <td><input type="text"name="t3"class="form-control"required="required"onblur="chkc(this.value)" /><span id="o3"></span></td>
                        </tr>
                        <tr>
                            <td>Account No</td>
                            <td><input type="text"name="a1"class="form-control"required="required"></td>
                        </tr>
                        <tr>
                            <td>Aadhar No</td>
                            <td><input type="text"name="a2"class="form-control"required="required"onblur="chkd(this.value)" /><span id="p3"></span></td>
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
                            
                             <td colspan="2"align="center"><input type="submit"value="Register"name="b1"class="btn btn-success"></td>
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