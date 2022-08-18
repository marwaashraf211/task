<?php
if($_POST['degree']>80)
{
    echo 'excelent';
}
elseif
($_POST['degree']<80 and $_POST['degree']>50) {
    echo 'verygood';
} else {
    echo'fail';
}


?>
