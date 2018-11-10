
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

<?php
                                             
                          
if(isset($_POST['sub']))
{
$t1=$_POST['stat'];
    $t2=$_POST['dist'];

$log=mysql_query("select * from staff_reg where state='$t1' and district='$t2'and type='staff'");
if(mysql_num_rows($log)>0)
{
    
   
    header("location:s_map.php?t=1&mid=$t2");
    



}
else
{
    echo"invalid username or password";
}
    

}
                                    ?>							<!--script-for-menu-->
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
			 	
		</div>
		</div>
                
   <!--//banner-->
   <!--/typography-->
      <div class="typography">
	   <div class="container">
              
	       
<div class="col-lg-2"> </div>
               <div class="col-lg-8">
                    <table  class="table  table-responsive  table-striped table-bordered ">
                        
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
                            
                             <td colspan="2"align="center"><input type="submit"value="Search"name="sub"class="btn btn-success"></td>
                        </tr>
                    </table>
                   
               </div>
		   
		  
	
		
			

	   </div>
          <?php
                                        if(isset($_GET['t']))
                                        {
                                          if($_GET['t']==1)
                                          {
                                              $mid=$_GET['mid'];
                                              ?>
                                          
          <div class="col-lg-12">
              <iframe style="width: 100%;height: 700px"src="map12.php?mid=<?php echo $mid ?>"></iframe>
              
              
          </div>
          <?php
          
                                          }
                                        }
          ?>
	  </div>
	 <!--//typography-->

		<!--footer-->
			