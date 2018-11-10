
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
if(isset($_GET['mid']))
{
    $upd=mysql_query("update fine_vehicle set st='1' where id='".$_GET['mid']."'");
    //echo mysql_error();
    if($upd>0)
    {
       
}
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
        <style type="text/css">
    
    
    .mail-box {
    border-collapse: collapse;
    border-spacing: 0;
    display: table;
    table-layout: fixed;
    width: 100%;
}
.mail-box aside {
    display: table-cell;
    float: none;
    height: 100%;
    padding: 0;
    vertical-align: top;
}
.mail-box .sm-side {
    background: none repeat scroll 0 0 #e5e8ef;
    border-radius: 4px 0 0 4px;
    width: 25%;
}
.mail-box .lg-side {
    background: none repeat scroll 0 0 #fff;
    border-radius: 0 4px 4px 0;
    width: 75%;
}
.mail-box .sm-side .user-head {
    background: none repeat scroll 0 0 #00a8b3;
    border-radius: 4px 0 0;
    color: #fff;
    min-height: 80px;
    padding: 10px;
}
.user-head .inbox-avatar {
    float: left;
    width: 65px;
}
.user-head .inbox-avatar img {
    border-radius: 4px;
}
.user-head .user-name {
    display: inline-block;
    margin: 0 0 0 10px;
}
.user-head .user-name h5 {
    font-size: 14px;
    font-weight: 300;
    margin-bottom: 0;
    margin-top: 15px;
}
.user-head .user-name h5 a {
    color: #fff;
}
.user-head .user-name span a {
    color: #87e2e7;
    font-size: 12px;
}
a.mail-dropdown {
    background: none repeat scroll 0 0 #80d3d9;
    border-radius: 2px;
    color: #01a7b3;
    font-size: 10px;
    margin-top: 20px;
    padding: 3px 5px;
}
.inbox-body {
    padding: 20px;
}
.btn-compose {
    background: none repeat scroll 0 0 #ff6c60;
    color: #fff;
    padding: 12px 0;
    text-align: center;
    width: 100%;
}
.btn-compose:hover {
    background: none repeat scroll 0 0 #f5675c;
    color: #fff;
}
ul.inbox-nav {
    display: inline-block;
    margin: 0;
    padding: 0;
    width: 100%;
}
.inbox-divider {
    border-bottom: 1px solid #d5d8df;
}
ul.inbox-nav li {
    display: inline-block;
    line-height: 45px;
    width: 100%;
}
ul.inbox-nav li a {
    color: #6a6a6a;
    display: inline-block;
    line-height: 45px;
    padding: 0 20px;
    width: 100%;
}
ul.inbox-nav li a:hover, ul.inbox-nav li.active a, ul.inbox-nav li a:focus {
    background: none repeat scroll 0 0 #d5d7de;
    color: #6a6a6a;
}
ul.inbox-nav li a i {
    color: #6a6a6a;
    font-size: 16px;
    padding-right: 10px;
}
ul.inbox-nav li a span.label {
    margin-top: 13px;
}
ul.labels-info li h4 {
    color: #5c5c5e;
    font-size: 13px;
    padding-left: 15px;
    padding-right: 15px;
    padding-top: 5px;
    text-transform: uppercase;
}
ul.labels-info li {
    margin: 0;
}
ul.labels-info li a {
    border-radius: 0;
    color: #6a6a6a;
}
ul.labels-info li a:hover, ul.labels-info li a:focus {
    background: none repeat scroll 0 0 #d5d7de;
    color: #6a6a6a;
}
ul.labels-info li a i {
    padding-right: 10px;
}
.nav.nav-pills.nav-stacked.labels-info p {
    color: #9d9f9e;
    font-size: 11px;
    margin-bottom: 0;
    padding: 0 22px;
}
.inbox-head {
    background: none repeat scroll 0 0 #41cac0;
    border-radius: 0 4px 0 0;
    color: #fff;
    min-height: 80px;
    padding: 20px;
}
.inbox-head h3 {
    display: inline-block;
    font-weight: 300;
    margin: 0;
    padding-top: 6px;
}
.inbox-head .sr-input {
    border: medium none;
    border-radius: 4px 0 0 4px;
    box-shadow: none;
    color: #8a8a8a;
    float: left;
    height: 40px;
    padding: 0 10px;
}
.inbox-head .sr-btn {
    background: none repeat scroll 0 0 #00a6b2;
    border: medium none;
    border-radius: 0 4px 4px 0;
    color: #fff;
    height: 40px;
    padding: 0 20px;
}
.table-inbox {
    border: 1px solid #d3d3d3;
    margin-bottom: 0;
}
.table-inbox tr td {
    padding: 12px !important;
}
.table-inbox tr td:hover {
    cursor: pointer;
}
.table-inbox tr td .fa-star.inbox-started, .table-inbox tr td .fa-star:hover {
    color: #f78a09;
}
.table-inbox tr td .fa-star {
    color: #d5d5d5;
}
.table-inbox tr.unread td {
    background: none repeat scroll 0 0 #f7f7f7;
    font-weight: 600;
}
ul.inbox-pagination {
    float: right;
}
ul.inbox-pagination li {
    float: left;
}
.mail-option {
    display: inline-block;
    margin-bottom: 10px;
    width: 100%;
}
.mail-option .chk-all, .mail-option .btn-group {
    margin-right: 5px;
}
.mail-option .chk-all, .mail-option .btn-group a.btn {
    background: none repeat scroll 0 0 #fcfcfc;
    border: 1px solid #e7e7e7;
    border-radius: 3px !important;
    color: #afafaf;
    display: inline-block;
    padding: 5px 10px;
}
.inbox-pagination a.np-btn {
    background: none repeat scroll 0 0 #fcfcfc;
    border: 1px solid #e7e7e7;
    border-radius: 3px !important;
    color: #afafaf;
    display: inline-block;
    padding: 5px 15px;
}
.mail-option .chk-all input[type="checkbox"] {
    margin-top: 0;
}
.mail-option .btn-group a.all {
    border: medium none;
    padding: 0;
}
.inbox-pagination a.np-btn {
    margin-left: 5px;
}
.inbox-pagination li span {
    display: inline-block;
    margin-right: 5px;
    margin-top: 7px;
}
.fileinput-button {
    background: none repeat scroll 0 0 #eeeeee;
    border: 1px solid #e6e6e6;
}
.inbox-body .modal .modal-body input, .inbox-body .modal .modal-body textarea {
    border: 1px solid #e6e6e6;
    box-shadow: none;
}
.btn-send, .btn-send:hover {
    background: none repeat scroll 0 0 #00a8b3;
    color: #fff;
}
.btn-send:hover {
    background: none repeat scroll 0 0 #009da7;
}
.modal-header h4.modal-title {
    font-family: "Open Sans",sans-serif;
    font-weight: 300;
}
.modal-body label {
    font-family: "Open Sans",sans-serif;
    font-weight: 400;
}
.heading-inbox h4 {
    border-bottom: 1px solid #ddd;
    color: #444;
    font-size: 18px;
    margin-top: 20px;
    padding-bottom: 10px;
}
.sender-info {
    margin-bottom: 20px;
}
.sender-info img {
    height: 30px;
    width: 30px;
}
.sender-dropdown {
    background: none repeat scroll 0 0 #eaeaea;
    color: #777;
    font-size: 10px;
    padding: 0 3px;
}
.view-mail a {
    color: #ff6c60;
}
.attachment-mail {
    margin-top: 30px;
}
.attachment-mail ul {
    display: inline-block;
    margin-bottom: 30px;
    width: 100%;
}
.attachment-mail ul li {
    float: left;
    margin-bottom: 10px;
    margin-right: 10px;
    width: 150px;
}
.attachment-mail ul li img {
    width: 100%;
}
.attachment-mail ul li span {
    float: right;
}
.attachment-mail .file-name {
    float: left;
}
.attachment-mail .links {
    display: inline-block;
    width: 100%;
}

.fileinput-button {
    float: left;
    margin-right: 4px;
    overflow: hidden;
    position: relative;
}
.fileinput-button input {
    cursor: pointer;
    direction: ltr;
    font-size: 23px;
    margin: 0;
    opacity: 0;
    position: absolute;
    right: 0;
    top: 0;
    transform: translate(-300px, 0px) scale(4);
}
.fileupload-buttonbar .btn, .fileupload-buttonbar .toggle {
    margin-bottom: 5px;
}
.files .progress {
    width: 200px;
}
.fileupload-processing .fileupload-loading {
    display: block;
}
* html .fileinput-button {
    line-height: 24px;
    margin: 1px -3px 0 0;
}
* + html .fileinput-button {
    margin: 1px 0 0;
    padding: 2px 15px;
}
@media (max-width: 767px) {
.files .btn span {
    display: none;
}
.files .preview * {
    width: 40px;
}
.files .name * {
    display: inline-block;
    width: 80px;
    word-wrap: break-word;
}
.files .progress {
    width: 20px;
}
.files .delete {
    width: 60px;
}
}
ul {
    list-style-type: none;
    padding: 0px;
    margin: 0px;
}
 
</style>

		   <!--banner-->
			 	
		</div>
		</div>
                
   <!--//banner-->
   <!--/typography-->
      <div class="typography">
	   <div class="container">
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
 <div class="mail-box">
     <?php
                            
                            
                            $a=mysql_query("select * from staff_reg where username='$a'");
                         
                            if($b=mysql_fetch_row($a))
                            {
                            
                            
                            ?>
                  <aside class="sm-side">
                      <div class="user-head">
                          <a class="inbox-avatar" href="javascript:;">
                              <img  width="64" hieght="60" src="img1/businessman-icon-18603234.jpg">
                          </a>
                          <div class="user-name">
                              <h5><a href="#"><?php echo $b['1']?></a></h5>
                              <span><a href="#"></a></span>
                          </div>
                          <a class="mail-dropdown pull-right" href="javascript:;">
                              <i class="fa fa-chevron-down"></i>
                          </a>
                      </div>
                      <?php
                            }
                            ?>
                      <div class="inbox-body">
                          <a href="#myModal" data-toggle="modal"  title="Compose"    class="btn btn-compose">
                              Message
                          </a>
                          <!-- Modal -->
                          
                          <!-- /.modal -->
                      </div>
                      <ul class="inbox-nav inbox-divider">
                          <li>
                              <a href="msg1.php"><i class="fa fa-inbox"></i> Traffic Fine <span class="label label-danger pull-right">
                                  <?php
                                  $a=$_SESSION['username'];
                                  $vs="select vehicle_id from add_vehicle where driver_id='$a'";
                            $vs1=mysql_query($vs);
                            if(mysql_affected_rows()>0)
                           { 
                            $vs2=mysql_result($vs1,0);
                            
                            
                            $f=mysql_query("select * from fine_vehicle where vehicle_id='$vs2' and st='0'");
                            echo mysql_num_rows($f);
                            
                           
                            ?>
                                      <?php
                           }
                           ?>
                                  </span></a>

                          </li>
                          <li>
                              <a href="msg2.php"><i class="fa fa-inbox"></i> Toll Charge <span class="label label-danger pull-right">
                                  <?php
                            $a=$_SESSION['username'];
                                  $vs="select vehicle_id from add_vehicle where driver_id='$a'";
                            $vs1=mysql_query($vs);
                            if(mysql_affected_rows()>0)
                           { 
                            $vs2=mysql_result($vs1,0);
                            
                            $f=mysql_query("select * from add_toll where vehicle_id='$vs2' and st='0'");
                            echo mysql_num_rows($f);
                            
                           }
                            ?>
                                  </span></a>

                          </li>
                         
                         
                          
                      </ul>
                      <ul class="nav nav-pills nav-stacked labels-info inbox-divider">
                          
                          <li> <a href="#"> <i class=" fa fa-sign-blank text-danger"></i></a> </li>
                          <li> <a href="#"> <i class=" fa fa-sign-blank text-success"></i></a> </li>
                          <li> <a href="#"> <i class=" fa fa-sign-blank text-info "></i></a>
                          </li><li> <a href="#"> <i class=" fa fa-sign-blank text-warning "></i></a>
                          </li><li> <a href="#"> <i class=" fa fa-sign-blank text-primary "></i> </a>
                          </li>
                      </ul>
                      

                      <div class="inbox-body text-center">
                          <div class="btn-group">
                              <a class="btn mini btn-primary" href="javascript:;">
                                  <i class="fa fa-plus"></i>
                              </a>
                          </div>
                          <div class="btn-group">
                              <a class="btn mini btn-success" href="javascript:;">
                                  <i class="fa fa-phone"></i>
                              </a>
                          </div>
                          <div class="btn-group">
                              <a class="btn mini btn-info" href="javascript:;">
                                  <i class="fa fa-cog"></i>
                              </a>
                          </div>
                      </div>

                  </aside>
                  <aside class="lg-side">
                      <div class="inbox-head">
                          <h3>Inbox</h3>
                          <form action="#" class="pull-right position">
                              
                          </form>
                      </div>
                      <div class="inbox-body">
                         
                          <?php
                                        if(isset($_GET['t']))
                                        {
                                          if($_GET['t']==1)
                                          {
                                              $sel_m1=mysql_query("select * from fine_vehicle where id=".$_GET['mid']);
                                              $r_m1=  mysql_fetch_row($sel_m1);                                              
                                              ?>
                          
                          <div class="container">
                              
  <div class="row">
       
    <div class="col-md-10">
      
        <section class="comment-list">
          <!-- First Comment -->
          <article class="row">
            
            <div class="col-md-10 col-sm-10">
              <div class="panel panel-default arrow left">
                <div class="panel-body">
                  <header class="text-left">
                    <div class="comment-user"><i class="fa fa-user"></i> <?php echo $r_m1['1']?></div>
                    <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i><?php echo $r_m1['4']?></time>
                    
                  </header>
                  <div class="comment-post">
                    <p>
                        You have been charged <b style="color: red" ><?php echo $r_m1['3']?> Rs/-</b> for violating traffic rule <b style="color: red" ><?php echo $r_m1['2']?></b>
                    </p>
                    <br>
                    <p>
                        <?php
                    $a=$_SESSION['username'];
                                  $vs="select account_no from staff_reg where username='$a'";
                            $vs1=mysql_query($vs);
                            if(mysql_affected_rows()>0)
                           { 
                            $vs2=mysql_result($vs1,0);
                            
                            $vt="select amount from account_bank where account_no='$vs2'";
                            $vt1=mysql_query($vt);
                            $vt2=mysql_result($vt1,0);
                            ?>
                        Your remaining Account balance is <b style="color: green" ><?php echo $vt2 ?> Rs/-</b>
                   
                    <?php
                           }
                           ?>
                    </p>
                  </div>
                    <p class="text-right"><a href="msg1.php" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> Back</a>
                    
                    <br/>
                    
                    </p>
                    
                </div>
              </div>
            </div>
          </article>
          <!-- Second Comment Reply -->
          
          <!-- Sixth Comment Reply -->
          
        </section>
    </div>
  </div>
</div>
            <?php
                                          }
                                        }
                                        else
                                        {
                                        ?>               
                          
                          <table class="table table-inbox table-hover">
                            <tbody>
                              <?php
                    $a=$_SESSION['username'];
                                  $vs="select vehicle_id from add_vehicle where driver_id='$a'";
                            $vs1=mysql_query($vs);
                            if(mysql_affected_rows()>0)
                           { 
                            $vs2=mysql_result($vs1,0);
                            
                            
                            $ab=mysql_query("select * from fine_vehicle where vehicle_id='$vs2' order by id desc");
                         $i=1;
                            while($ab1=mysql_fetch_row($ab))
                            {
                                
                            if($ab1[5]=="0")
                            {
                            ?>
                                
                            <tr style="background-color: #e7e7e7"class="">
                            <b>
                                <td class="view-message dont-show"><b><?php echo $i ?></b></td>
                                <td class="view-message dont-show"><b>Your transaction for Fine <span style="color: red;font-style: italic"><?php echo $ab1['2']?></span> is complete</b></td>
                                <td class="view-message dont-show"><b><?php echo $ab1['4']?></b></td>
                                
                                  
                                  <td class="view-message text-right"><a href="msg1.php?t=1&mid=<?php echo $ab1[0] ?>"><span class="glyphicon glyphicon-new-window"></span></a></td>
                              
                            </tr>
                          <?php
                            }
 else {
     
 ?>
                            <?php
                            
                           
                    
                            
                            
                            if($ab1[5]=="1")
                            {
                            ?>
                            <tr class="">
                            <b>
                                <td class="view-message dont-show"><b><?php echo $i ?></b></td>
                                <td class="view-message dont-show"><b>Your transaction for Fine <span style="color: red;font-style: italic"><?php echo $ab1['2']?></span> is complete</b></td>
                                <td class="view-message dont-show"><b><?php echo $ab1['4']?></b></td>
                                
                                  
                                  <td class="view-message text-right"><a href="#?t=1&mid=<?php echo $ab1[0] ?>"><span class="glyphicon glyphicon-new-window"></span></a></td>
                              
                            </tr>
                            <?php
                            }
                            }
                            ?>
                              <?php
                               $i++;
                            
                            }
                           }
                            ?>
                              <?php
                                        
                                        }
                                        ?>
                      
                          </tbody>
                          </table>
                          

                      </div>
                  </aside>
              </div>
</div>	
	  </div>
	 <!--//typography-->

		<!--footer-->
			<?php
                        include 'footer.php';
                        ?>