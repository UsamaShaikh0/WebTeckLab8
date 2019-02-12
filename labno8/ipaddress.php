<?php
if (!empty($_SERVER['HTTP_CLIENT_IP']))   
  {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
  }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
  {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
else
  {
    $ip_address = $_SERVER['REMOTE_ADDR'];
  }
echo "Ip address".$ip_address;

echo "<br>";

if (!empty($_SERVER['HTTPS'])) 
{
  echo "https is enabled";
}
else
{
echo "http is enabled";
}

?>