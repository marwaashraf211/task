<?php
/*
for($i=0;$i<=5;$i++)
{
   for($j=1;$j<=$i;$j++) 
   {
     echo "*";
   }
   echo "<br>";

}*/
?>
<table border="1" width="200">
    <?php 
    for($i=1 ;$i<=8;$i++)
    {
        echo "<tr>";
        for($j=1;$j<=8;$j++)
        {
            $total=$j+$i;
            if($total%2==0)
            {
                echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
            }
            else
            {
                echo "<td height=30px width=30px bgcolor=#000000></td>";
    
            }
        }
        echo "</tr>";
    }


    ?>
</table>
