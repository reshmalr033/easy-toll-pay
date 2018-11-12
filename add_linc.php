
<?php
include 'menu_user.php';
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
				<!-- start-search-->
			<div class="clearfix"> </div>
        </div>

		   <!--banner-->
			 	<div class="banner two">
                   <h2 class="second">Registration</h2>
			   </div>
		</div>
		</div>
   <!--//banner-->
   <!--/typography-->
      <div class="typography">
	   <div class="container">
	       
<div class="col-lg-2"></div>
<div class="col-lg-8">
    <h2 style="color: #00ACED;font: italic">Add License</h2>
    <br/>
		     
                    <table  class="table  table-responsive  table-striped table-bordered ">
                        <?php

if(isset($_POST['b1']))
 {
  $a=$_SESSION['username'];
  $mid=$_GET['mid'];
   
   
                                $b=mysql_query("select max(id) from lin");
$id=mysql_result($b,0);
$id++;
$p=$_FILES['p1']['name'];
$ext=strchr($p,'.');
$pname="$id$ext";
if(move_uploaded_file($_FILES['p1']['tmp_name'],getcwd()."\\img1\\$pname"))
{
   
    
    
    $ins=mysql_query("insert into lin values('','$a','$mid','$pname','0')");
    if($ins>0)
    {
       
                header("location:add_linc.php?mid=$mid&success=1");
            }
 
        }
    

}



 
 
?>
                        <?php
                            if(isset($_GET['del']))
{
                                $mid=$_GET['mid'];
    $del1=mysql_query("delete from lin where id='".$_GET['del']."'");
    //echo mysql_error();
    if($del1>0)
    {
        header("location:add_linc.php?mid=$mid");
}
}
  


?>
                        <tr>
                            <td>Add File</td>
                            <td><input type="file"name="p1"class="form-control"required="required"></td>
                        </tr>
                        
                        
                         <tr>
                            
                             <td colspan="2"align="center"><input type="submit"value="Register"name="b1"class="btn btn-success"></td>
                        </tr>
                    </table>
                    
                   
                   
	      </div>
<div class="col-lg-12">
    
    
    <table class="table table-responsive">
                                   

                                    

                                    <?php
                           $mid=$_GET['mid'];
                            $a1=mysql_query("select * from lin where m_id='$mid' order by id desc");
                            
                            $i=0;
                            while($b1=mysql_fetch_row($a1))
                            {
                            
                            
                            ?>
        <td style="width:20%"><a href="img1/<?php echo $b1['3']?>"</a><img src="img1/<?php echo $b1['3']?>" style="width:100%; height:200px;"class="img img-responsive img-" /></a><br />
                                
        <center>    <a href="add_linc.php?del=<?php echo $b1[0] ?>&mid=<?php echo $mid  ?>"><span class="glyphicon glyphicon-trash" style="color: red;font-size: x-large"></span>      </a></center>
                                       
                                
                                <?php
                                $i++;
                              if($i>3)
                              {
                                  echo"</tr>";
                                  $i=0;
                              }
                                  
                            }    
                            
                            ?>
                                
                                
                                </table>
</div>
		 
		   
		  
	
		
			

	   </div>
	  </div>
	 <!--//typography-->

		<!--footer-->
			<?php
                        include 'footer.php';
                        ?>