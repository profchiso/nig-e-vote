<?php
include 'inc/header2.php';
?>
<section class="engine"><a rel="external" href="#">easy responsive web generator software</a></section><section class="mbr-section mbr-after-navbar" id="form1-0" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 120px;">
    
    <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h5 class="mbr-section-title display-2">THE ELECTION RESULT SO FAR</h5>
            </div>
        </div>
    </div>
    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
        <div class="row">   
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="dec">Presidential Results</h3>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <th>Candidate's Fullname</th>
                            <th>Position</th>
                            <th>Party</th>
                            <th>passport</th>
                            <th>Party-logo</th>
                            <th>Votes</th>
                        </thead>
                        <tbody>
                            <?php
                            $president = mysql_query("SELECT * FROM candidate WHERE post = 'president'");
                                while ($row_president = mysql_fetch_array($president)) {
                            ?>
                            <tr>
                                <td><?php echo $row_president['fullname']?></td>
                                <td><?php echo $row_president['post']?></td>
                                <td><?php echo $row_president['party']?></td>
                                
                                <td>  <img src="admin/uploads/<?php echo $row_president['passport']?>" class="img-responsive img-circle" width="50" height="50"> </td>


                                <td> <img src="admin/party_logos/<?php echo $row_president['party_logo']?>" class="img-responsive img-circle" width = "50" height="50"></td>


                                <?php
                                $fullname = $row_president['fullname'];
                                    $votes = mysql_query("SELECT * FROM votes WHERE president = '$fullname'");
                                    $tot_num_president_votes = mysql_num_rows($votes);
                                ?>
                                <td><?php echo $tot_num_president_votes ?></td>

                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="dec">Senate Results</h3>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <th>Candidate's Fullname</th>
                            <th>Position</th>
                            <th>Party</th>
                            <th>passport</th>
                            <th>Party-logo</th>
                            <th>Votes</th>
                        </thead>
                        <tbody>
                            <?php
                            $senate = mysql_query("SELECT * FROM candidate WHERE post = 'senate'");
                                while ($row_senate = mysql_fetch_array($senate)) {
                            ?>
                            <tr>
                                <td><?php echo $row_senate['fullname']?></td>
                                <td><?php echo $row_senate['post']?></td>
                                <td><?php echo $row_senate['party']?></td>


                                <td>  <img src="admin/uploads/<?php echo $row_senate['passport']?>" class="img-responsive img-circle" width="50" height="50"> </td>


<td> <img src="admin/party_logos/<?php echo $row_senate['party_logo']?>" class="img-responsive img-circle" width = "50" height="50"></td>
                                <?php
                                $fullname = $row_senate['fullname'];
                                    $votes = mysql_query("SELECT * FROM votes WHERE senate = '$fullname'");
                                    $tot_num_senate_votes = mysql_num_rows($votes);
                                ?>
                                <td><?php echo $tot_num_senate_votes ?></td>

                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="dec">House of Rep Results</h3>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <th>Candidate's Fullname</th>
                            <th>Position</th>
                            <th>Party</th>

                            <th>passport</th>
                            <th>Party-logo</th>
                            <th>Votes</th>
                        </thead>
                        <tbody>
                            <?php
                            $HouseOfRep = mysql_query("SELECT * FROM candidate WHERE post = 'HouseOfRep'");
                                while ($row_HouseOfRep = mysql_fetch_array($HouseOfRep)) {
                            ?>
                            <tr>
                                <td><?php echo $row_HouseOfRep['fullname']?></td>
                                <td><?php echo $row_HouseOfRep['post']?></td>
                                <td><?php echo $row_HouseOfRep['party']?></td>

                                <td>  <img src="admin/uploads/<?php echo $row_HouseOfRep['passport']?>" class="img-responsive img-circle" width="50" height="50"> </td>


<td> <img src="admin/party_logos/<?php echo $row_HouseOfRep['party_logo']?>" class="img-responsive img-circle" width = "50" height="50"></td>
                                <?php
                                $fullname = $row_HouseOfRep['fullname'];
                                    $votes = mysql_query("SELECT * FROM votes WHERE HouseOfRep = '$fullname'");
                                    $tot_num_HouseOfRep_votes = mysql_num_rows($votes);
                                ?>
                                <td><?php echo $tot_num_HouseOfRep_votes ?></td>

                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="dec">Governorship Results</h3>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <th>Candidate's Fullname</th>
                            <th>Position</th>
                            <th>Party</th>
                            <th>passport</th>
                            <th>Party-logo</th>
                            <th>Votes</th>
                        </thead>
                        <tbody>
                            <?php
                            $Governors = mysql_query("SELECT * FROM candidate WHERE post = 'Governors'");
                                while ($row_Governors = mysql_fetch_array($Governors)) {
                            ?>
                            <tr>
                                <td><?php echo $row_Governors['fullname']?></td>
                                <td><?php echo $row_Governors['post']?></td>
                                <td><?php echo $row_Governors['party']?></td>

                                <td>  <img src="admin/uploads/<?php echo $row_Governors['passport']?>" class="img-responsive img-circle" width="50" height="50"> </td>


<td> <img src="admin/party_logos/<?php echo $row_Governors['party_logo']?>" class="img-responsive img-circle" width = "50" height="50"></td>

                                <?php
                                $fullname = $row_Governors['fullname'];
                                    $votes = mysql_query("SELECT * FROM votes WHERE governors = '$fullname'");
                                    $tot_num_Governors_votes = mysql_num_rows($votes);
                                ?>
                                <td><?php echo $tot_num_Governors_votes ?></td>

                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="dec">House of Assembly Results</h3>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <th>Candidate's Fullname</th>
                            <th>Position</th>
                            <th>Party</th>

                            <th>passport</th>
                            <th>Party-logo</th>
                            <th>Votes</th>
                        </thead>
                        <tbody>
                            <?php
                            $HouseOfAss = mysql_query("SELECT * FROM candidate WHERE post = 'HouseOfAss'");
                                while ($row_HouseOfAss = mysql_fetch_array($HouseOfAss)) {
                            ?>
                            <tr>
                                <td><?php echo $row_HouseOfAss['fullname']?></td>
                                <td><?php echo $row_HouseOfAss['post']?></td>
                                <td><?php echo $row_HouseOfAss['party']?></td>

                                <td>  <img src="admin/uploads/<?php echo $row_HouseOfAss['passport']?>" class="img-responsive img-circle" width="50" height="50"> </td>


<td> <img src="admin/party_logos/<?php echo $row_HouseOfAss['party_logo']?>" class="img-responsive img-circle" width = "50" height="50"></td>
                                <?php
                                $fullname = $row_HouseOfAss['fullname'];
                                    $votes = mysql_query("SELECT * FROM votes WHERE HouseOfAss = '$fullname'");
                                    $tot_num_HouseOfAss_votes = mysql_num_rows($votes);
                                ?>
                                <td><?php echo $tot_num_HouseOfAss_votes ?></td>

                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    </div>
</section>

<?php
include 'inc/footer.php';
?>