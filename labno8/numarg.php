<?php
function test()
{
    $numargs = func_num_args();
    echo "Number of arguments: $numargs";
}

echo "(2,4,8,10)" .test(2,4,8,10). "<br>";   
echo "(1,3,5)" .test(1,3,5);
?>