<?php
//$cookie_id="1";
$cookie_name = "marwa";
$cookie_pass = "123";
$cookie_enter = "go";
setcookie($cookie_name, $cookie_pass,$cookie_id, time() + (86400 * 30), "/");

if(isset($_COOKIE[$cookie_name]))
{
    header("location:login.php");
}
else
{
    if(isset($_POST['go']))
    {
        if($_POST['yourname']==$cookie_name && $_POST['yourpass']==$cookie_pass)
        {
            $_COOKIE[$cookie_name]=$_POST['yourname'];
            $_COOKIE[$cookie_pass]=$_POST['yourpass'];  
            $_COOKIE[$cookie_enter]=$_POST['go']; 
            echo"you are log in";
        }
        else
        {
           header("location:index.html");
    
        }
       
    }
    
}







?>