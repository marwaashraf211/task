
<?php


Session_Start();


define("username","marwa");
define("password","123");
define("enter","go");
if(isset($_SESSION['username']))
{
   // header("location:login.php");
}
else
{
    if(isset($_POST['go']))
    {
        if($_POST['yourname']==username && $_POST['yourpass']==password)
        {
            $_SESSION['username']=$_POST['yourname'];
            $_SESSION['password']=$_POST['yourpass'];  
            $_SESSION['enter']=$_POST['go'];
            echo"you are log in";
        }
        else
        {
        header("location:index.html");

        }
    
    }
}
?>