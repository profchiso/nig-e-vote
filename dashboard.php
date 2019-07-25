<?php
//include 'inc/session.php';
session_start();
if (!isset($_SESSION['VIN'])) {
  header("Location: index.php");
}
$VIN= $_SESSION['VIN'];
include 'inc/header.php';
?>
<section class="engine"><a rel="external" href="#">easy responsive web generator software</a></section><section class="mbr-section mbr-after-navbar" id="form1-0" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 120px;">
    
    <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h5 class="mbr-section-title display-2">CHOOSE YOUR CANDIDATE</h5>
                    <small class="mbr-section-subtitle">Remember to always choose wisely</small>
                </div>
            </div>
        </div>
    </div>
    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
        <form method="post" action="#">
            <div class="row">
                <h2>PRESIDENT</h2>
                <?php
                    $president_query = mysql_query("SELECT * FROM candidate WHERE post = 'president'");
                    while ($row_president = mysql_fetch_array($president_query)) {
                ?>
                <div class="col-md-3">
                    <img src="admin/party_logos/<?php echo $row_president['party_logo']?>" class="img-responsive img-circle" width = "70" height="70">

                    <img src="admin/uploads/<?php echo $row_president['passport']?>" class="img-responsive img-circle" width="30" height="30">

                
                    <div class="form-group">
                        <input type="radio" name="president" value="<?php echo $row_president['fullname']?>"> <?php echo $row_president['fullname']?>
                    </div>
                </div>
                <?php } ?>
            </div>
             <div class="row">
                <h2>SENATE</h2>
                <?php
                    $senate = mysql_query("SELECT * FROM candidate WHERE post = 'senate'");
                    while ($row_senate = mysql_fetch_array($senate)) {
                ?>
                <div class="col-md-3">
                <img src="admin/party_logos/<?php echo $row_senate['party_logo']?>" class="img-responsive img-circle" width = "70" height="70">

                <img src="admin/uploads/<?php echo $row_senate['passport']?>" class="img-responsive img-circle" width="30" height="30">
                    <div class="form-group">
                        <input type="radio" name="senate" value="<?php echo $row_senate['fullname']?>"> <?php echo $row_senate['fullname']?>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="row">
                <h2>House of Rep</h2>
                <?php
                    $HouseOfRep = mysql_query("SELECT * FROM candidate WHERE post = 'HouseOfRep'");
                    while ($row_HouseOfRep = mysql_fetch_array($HouseOfRep)) {
                ?>
                <div class="col-md-3">
                <img src="admin/party_logos/<?php echo $row_HouseOfRep['party_logo']?>" class="img-responsive img-circle" width = "70" height="70">

                <img src="admin/uploads/<?php echo $row_HouseOfRep['passport']?>" class="img-responsive img-circle" width="30" height="30">
                    <div class="form-group">
                        <input type="radio" name="HouseOfRep" value="<?php echo $row_HouseOfRep['fullname']?>"> <?php echo $row_HouseOfRep['fullname']?>
                    </div>
                </div>
                <?php } ?>
            </div>

            <div class="row">
                <h2>GOVERNOR</h2>
                <?php
                    $Governors = mysql_query("SELECT * FROM candidate WHERE post = 'Governors'");
                    while ($row_Governors = mysql_fetch_array($Governors)) {
                ?>
                <div class="col-md-3">
                <img src="admin/party_logos/<?php echo $row_Governors['party_logo']?>" class="img-responsive img-circle" width = "70" height="70">
                <img src="admin/uploads/<?php echo $row_Governors['passport']?>" class="img-responsive img-circle" width="30" height="30">
                    <div class="form-group">
                        <input type="radio" name="Governors" value="<?php echo $row_Governors['fullname']?>"> <?php echo $row_Governors['fullname']?>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="row">
                <h2> HOUSE OF ASSEMBLY</h2>
                <?php
                    $HouseOfAss = mysql_query("SELECT * FROM candidate WHERE post = 'HouseOfAss'");
                    while ($row_HouseOfAss = mysql_fetch_array($HouseOfAss)) {
                ?>
                <div class="col-md-3">
                <img src="admin/party_logos/<?php echo $row_HouseOfAss['party_logo']?>" class="img-responsive img-circle" width = "70" height="70">

                <img src="admin/uploads/<?php echo $row_HouseOfAss['passport']?>" class="img-responsive img-circle" width="30" height="30">
                    <div class="form-group">
                        <input type="radio" name="HouseOfAss" value="<?php echo $row_HouseOfAss['fullname']?>"> <?php echo $row_HouseOfAss['fullname']?>

                    </div>
                </div>
                <?php } ?>
            </div>
            <center><button name="submit" class="btn btn-lg btn-success">CAST YOUR VOTE</button></center>
        </div>
        </form>
        <?php
            if (isset($_POST['submit']) && isset($_POST['president']) && isset($_POST['senate']) && isset($_POST['HouseOfAss']) && isset($_POST['Governors'])) {
                $president = $_POST['president'];
                $senate = $_POST['senate'];
                $HouseOfRep = $_POST['HouseOfRep'];
                $Governors = $_POST['Governors'];
                $HouseOfAss = $_POST['HouseOfAss'];
                $sql = mysql_query("INSERT INTO votes(president,senate,HouseOfRep,governors,HouseOfAss)VALUES('$president','$senate','$HouseOfRep','$Governors','$HouseOfAss')");
                if ($sql) {
                    $VIN = $_SESSION['VIN'];
                    mysql_query("UPDATE citizens SET voted = '1' WHERE VIN = '$VIN'");
                    echo "<script>alert('Thank you for voting. Click on result to view the latest result update')</script>";
                    session_destroy();
                    echo "<script>window.open('index.php','_self')</script>";
                }else{
                   
                }
            }//else{
               // echo "<script>alert('you are required to vote for all positions');</script>";
            //}
        ?>
    </div>
</section>

<?php
include 'inc/footer.php';
?>