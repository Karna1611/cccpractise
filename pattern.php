<?php
    // for($i=1;$i<=10;$i++)
    // {
    //     for($j=$i;$j<=11-$i;$j++)
    //     {
    //         echo $j;
    //     }
    //     echo "<br>";
    // }

    for($i=1;$i<=10;$i++)
    {
        for($j=$i;$j<=11-$i;$j++)
        {
            
            for($k=2;$k<=10;$k++)
            {
                if(($k-1)<$i)
                {
                    $j="_";
                }
                // else
                // {
                //     echo $k;
                // }
            }
            echo $j;
            echo "<br>";
        }
    }

?>