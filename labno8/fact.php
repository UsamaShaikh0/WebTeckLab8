<?php  
function factorial($num)  
{  
    if($num <= 1)   
    {  
        return 1;  
    }  
    else   
    {  
        return $num * factorial($num - 1);  
    }  
}  
  
echo "Factorial of 13 is " .factorial(13);  
?> 