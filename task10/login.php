<?php

print_r($_FILES);

   if($_POST['go'])
   {
        $photoname=$_POST['photoname'];
        $name=$_FILES['img']['name'];
        $name=$photoname;
        $tmp_name=$_FILES['img']['tmp_name'];
        move_uploaded_file($tmp_name,'D:/Xamp/htdocs/phptrain/task10/img/'.$name);

   }

?>