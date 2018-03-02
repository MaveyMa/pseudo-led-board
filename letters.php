<?php
    // LETTERS ARRAYS {A, R, T}
    $arrayA = array
    (
        array("0", "0", "0", "1", "1", "1", "0", "0", "0", "0"),
        array("0", "0", "1", "1", "1", "1", "1", "0", "0", "0"),
        array("0", "0", "1", "0", "0", "1", "1", "0", "0", "0"),
        array("0", "0", "1", "0", "0", "1", "1", "0", "0", "0"),
        array("0", "0", "1", "1", "1", "1", "1", "0", "0", "0"),
        array("0", "0", "1", "0", "0", "1", "1", "0", "0", "0"),
        array("0", "0", "1", "0", "0", "1", "1", "0", "0", "0")
    );
    
    $arrayR = array
    (
        array("0", "0", "1", "1", "1", "1", "1", "0", "0", "0"),
        array("0", "0", "1", "1", "0", "0", "1", "1", "0", "0"),
        array("0", "0", "1", "1", "0", "0", "1", "1", "0", "0"),
        array("0", "0", "1", "1", "1", "1", "1", "0", "0", "0"),
        array("0", "0", "1", "1", "0", "1", "1", "0", "0", "0"),
        array("0", "0", "1", "1", "0", "0", "1", "1", "0", "0"),
        array("0", "0", "1", "1", "0", "0", "1", "1", "1", "0")
    );
    
    $arrayT = array
    (
        array("0", "0", "1", "1", "1", "1", "1", "1", "0", "0"),
        array("0", "0", "0", "0", "1", "1", "0", "0", "0", "0"),
        array("0", "0", "0", "0", "1", "1", "0", "0", "0", "0"),
        array("0", "0", "0", "0", "1", "1", "0", "0", "0", "0"),
        array("0", "0", "0", "0", "1", "1", "0", "0", "0", "0"),
        array("0", "0", "0", "0", "1", "1", "0", "0", "0", "0"),
        array("0", "0", "0", "0", "1", "1", "0", "0", "0", "0")
    );
    // ==========================
    // PRINTING FUNCTIONS
    function printWhiteSpace()
    {
        echo "_";
    }
    
    function displaySolidLetter($myArray) 
    {   
        $red = rand(0,255); // random number between 0 and 255
        $green = rand(0,255);
        $blue = rand(0,255);
        for ($row = 0; $row < count($myArray); $row++) 
        {
            for ($col = 0; $col < 10; $col++) 
            {
                if ($myArray[$row][$col])
                    echo "<span style = 'color: rgb($red,$green,$blue);'>@</span>";
                else {
                    printWhiteSpace();
                }
            }
            echo "<br>";
        }
    }//END DISPLAY SOLID LETTER
    
    function displayRainbowLetter($myArray) 
    {   
        for ($row = 0; $row < count($myArray); $row++) 
        {
            for ($col = 0; $col < 10; $col++) 
            {
                
                if ($myArray[$row][$col])
                {
                    $red = rand(0,255); // random number between 0 and 255
                    $green = rand(0,255);
                    $blue = rand(0,255);
                    echo "<span style = 'color: rgb($red,$green,$blue);'>@</span>";
                }  
                else {
                    printWhiteSpace();
                }
            }
            echo "<br>";
        }
    }//END DISPLAY RAINBOW LETTER
    
    function displayBlackLetter($myArray) 
    {   
        for ($row = 0; $row < count($myArray); $row++) 
        {
            for ($col = 0; $col < 10; $col++) 
            {
                
                if ($myArray[$row][$col])
                {
                    echo "<span style='color:black;'>@</span>";
                }  
                else {
                    printWhiteSpace();
                }
            }
            echo "<br>";
        }
    }//END DISPLAY RAINBOW LETTER
?>




