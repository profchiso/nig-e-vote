<?php
 function ValidateVin($vin)
{
  if(strlen($vin)==19 && preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $vin) ){
    return true;
  }else{
    return false;
  }
}
?>