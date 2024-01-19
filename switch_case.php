<?php
    echo "Welcome to calculator program";
    $result=0;
    $x=readline("Enter first number : ");
    $y=readline("Enter second number : ");
    echo "Press 1 to add";
    echo "Press 2 to subtract";
    echo "Press 3 to divide";
    echo "Press 4 to multiply";
    echo "Press 5 to exit";
    $choice=readline("Enter choice");
        switch($choice)
        {
            case 1:
                $result=$x+$y;
                echo "Addition is : ",$result;
                break;
            case 2:
                $result=$x-$y;
                echo "Subtraction is : ",$result;
                break;
            case 3:
                $result=$x/$y;
                echo "Divsion is : ",$result;
                break;
            case 4:
                $result=$x*$y;
                echo "Multiplication is : ",$result;
                break;
            default:
                echo "Invalid choice";
                break;
        } 
         echo "Thanks for using";   
        
    
    
?>