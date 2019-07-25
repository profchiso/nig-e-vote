
<?php
session_start();
$email= $_SESSION['email'];
include 'header.php';
$last;
$fetch = mysql_query("SELECT * FROM citizens WHERE email='$email'");
while ($row = mysql_fetch_array($fetch)){
$last=$row['last_name'];
}

?>

<!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="assets/img/coatofarms.jpg" alt="coat of arms" class="img-circle img-responsive">
                            </div>
                            <div class="user-info">
                                <div><?php echo $last?></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    </li>
                  
                    <li>
                        <a href="user.php"><i class="fa fa-star"></i> my-record<span class="fa arrow"></span></a>
                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->