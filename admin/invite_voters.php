<?php
if(isset($_POST['email_invite'])){
include 'inc/header.php';
include 'inc/sidebar.php';
include 'EmailService.php';
$fetch = mysql_query("SELECT * FROM citizens");


while ($row = mysql_fetch_array($fetch)) {
//
/**** SEND invitation to eligible voters  ****/
$yr=date("Y");

$yr_of_birth=$row['year_of_birth'];
if($yr-$yr_of_birth>=18){


            $email_data['message'] = ('
				<div>
					Hello '.(!empty($row['last_name'])?ucwords(strtolower($row['last_name'])):''). (!empty($row['first_name'])?' '.ucwords(strtolower($row['first_name'])):'').',<br />
				     <br />
					 <p>We are pleased to inform you that you are eligible to vote </p><p>click  <a href="localhost/nigeria-e-voting/validate">validate</a> to complete your registration and scan your Qr code to see your voting OTP”</p>.<br/>
                     visit : <a href="http://localhost/nigeria-e-voting/validate" title="visit http://localhost/nigeria-e-voting/validate">validate</a> <br>
                
				  
				      Date: ' . date("d-m-Y H:i:s") .'
				     <br /><br/>
				    
				     Thank You,<br />
				    INEC NG<br />
				     <br />
				</div>
			') ;
            $result_obj = new Email();
            $email_data = array_merge($email_data, array('to' =>$row['email'], 'subject' => 'Update Your Voters Details'));
            $result_obj->notifyAdmin($email_data);
          /**** END *******/

		  //require_once 'smsapi.php';

		  echo'<script>alert("invitations sent")</script>';
		  echo "<script>window.open('voters.php','_self')</script>";
}
}
}
?>