<?php
$sqlconn=mysqli_connect("localhost","root","","courses");
if(isset($_POST['enter']))
{
    $name=$_POST['name'];
    $course=$_POST['course'];
    $salary=$_POST['salary'];

    $dbinsert="INSERT INTO `student`(`name`,`course`,`salary`)  VALUES('$name','$course','$salary')";
    mysqli_query($sqlconn,$dbinsert);
    if(mysqli_affected_rows($sqlconn)>0)
    {
        echo "insert done ";
    }
    else{
        echo "insert fail";
    }

}

?>