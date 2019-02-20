<!DOCTYPE html>
<html>
<head></head>
<body>

  <form method="POST" >
   <input type="text" placeholder="Enter Email" name="email" required>
   <br>
  <input type="submit" value="submit" name="button">
  </form>

 <?php

if(array_key_exists('button',$_POST)){ 
  $email = $_POST['email'];

  if(strlen($email) >= 20){
     echo"<b>No more than 20 character</b>"; }

  else{

  $var1 = explode('@', $email);

  if (sizeof($var1) > 2)
    echo "<b>Email  contain only one @.. <br> Try Again!</b>";
  elseif(sizeof($var1) <= 1 )
    echo "<b>Email must contain @.. <br> Try Again! </b>";

  else{

    if( is_numeric(substr($var1[0], 0, 1)))
      echo "<b>Can not contain number at first place.. <br> try Again!</b>";

    else{
      
      if(preg_match('/\s/', $email))
        echo "<b>Specified Email contains spaces.. <br> Try Again!</b>";

      else{
        
        $var2 = explode(".", $email);
          if(sizeof($var2) <= 1)
          echo "<b>Specified Email contains no domain.. <br> Try Again!</b>";
          elseif(sizeof($var2) == 2){
          if($var2[1] == "com"){
            echo "<b>Email is correct!</b>";
          }
          else
            echo "<b>Specified Email is not correct.. <br> Try Again!</b>";
        }

        elseif(sizeof($var2) == 3){
          if($var2[1] == "edu" && $var2[2] == "pk")
            echo "<b>Email is correct!</b>";
          elseif($var2 == "co" && $var2 == "uk")
            echo "<b>Email is correct!</b>";
          else{
            echo " use .com, .edu.pk, or co.uk instead.";
          }

        }

      }

    }

}

} 
}

?>
</body>
</html>