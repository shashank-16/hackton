<?php

require 'connective.php';

if(isset($_POST["submit"]))
{

    $vars=$_POST["submit"];
    
echo($vars);
}
else{

    echo(0);
}




?>