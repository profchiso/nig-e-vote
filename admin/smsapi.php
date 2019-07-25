<?php
if(isset($_POST['sms'])){ 

$conn = mysql_connect('localhost','root','');
$db = mysql_select_db("nimc");
$sql= mysql_query("SELECT phone_number FROM citizens");
$row=mysql_fetch_array($sql);

$voters;
$fetch = mysql_query("SELECT phone_number,year_of_birth FROM citizens");
if(mysql_num_rows($fetch)>0){
while ($rownumber = mysql_fetch_array($fetch)) {

        $yr=date("Y");
        $yr_of_birth=$rownumber['year_of_birth'];
        if($yr-$yr_of_birth>=18){
           
           $voters=$rownumber['phone_number'].",";
          
            $msg="INEC Alert **";
            $msg.="We are pleased to inform you that you are eligible to  visit http://localhost/nigeria-e-voting/validate to complete your registration and scan your Qrcode to see your voting OTP";
                $to=$voters;
                $user="flawless";
                $pass="gawk251coma153";
                $from="INEC NG";
                $url= "https://account.kudisms.net/api/?username=azemobordaniel@gmail.com&password=gbogo251coma153&message=.$msg&sender=INEC&mobiles=.$voters";

               
                 header('Location: '.$url); 
                 
                 
               
		
               
        }        
        
} 

 }  

}

?>