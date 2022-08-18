<?php
for($i=0;$i<=10;$i++)
{
    if($i==$_POST['yournum'])
    {
        echo $_POST['yourname']."<br>";
    }
    else{
        echo $i ."<br>";
    }

}
?>