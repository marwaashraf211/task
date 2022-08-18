<?php  
$inf=[
    [
        'name'=>'mohammed',
        'age'=>'16',
        'sub'=>'bio'
    ],
    [
        'name'=>'mostafa',
        'age'=>'13',
        'sub'=>'scien'
    ],
    [
        'name'=>'marwa',
        'age'=>'21',
        'sub'=>'php'
    ]
];
    $arraylen=count($inf);
/*for($i=0;$i<=$arraylen;$i++)
{
    foreach($inf[$i] as $k=>$v)
    {
        echo $k."=>".$v."<br>";
    }


    echo "<hr>";

};*/



foreach($inf as $inf)
{
    foreach($inf as $k=>$v)
    {
        echo $k."=>".$v."<br>";
    }

    echo "<hr>";

};







?>