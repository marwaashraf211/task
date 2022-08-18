<?php

function degree($degree)
{
    if($_POST['degree']>80)
{
    echo 'excelent    '.$_POST['yourname'];
}
elseif
($_POST['degree']<80 and $_POST['degree']>50) {
    echo 'verygood    '.$_POST['yourname'];
} else {
    echo'fail   '.$_POST['yourname'];
}

};
degree($_POST['degree']);

?>