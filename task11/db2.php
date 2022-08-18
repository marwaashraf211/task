<?php
$sqlconn=mysqli_connect("localhost","root","","courses");
if(isset($_POST['enter']))
{
    $name=$_POST['name'];
    //$course=$_POST['course'];
    //$salary=$_POST['salary'];
    $id=$_POST['id'];

    $dbinsert="UPDATE student set name=`$name`  where id=`$id`";
    mysqli_query($sqlconn,$dbinsert);
    if(mysqli_affected_rows($sqlconn)==1)
    {
        echo "insert done ";
    }
    else{
        echo "insert fail";
    }
}

?>