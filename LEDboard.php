<!DOCTYPE html>
<!--Make an LED Board that can display letters and numbers with different colors, all upper case.-->
<!--1) There must be at least three words, each on a different line (20 pts)-->
<!--2) All words must be centered  (20 pts)-->
<!--3) One of the words must have random colors on each letter (20 pts)-->
<!--4) One of the words must have random colors on each "led" (cell) (20 pts)-->
<!--5) There is an external CSS file with at least 10 rules (20 pts)-->
<!--FUTURE TODO-->
<!--- Add a refresh button (click here to refresh)-->
<!--- Finish alphabet and numbers-->
<!--- Allow user input-->
<html>
    <head>
        <title>LED Board</title>
        <meta charset="utf-8">
        <!--GOOGLE FONT CHOICE-->
        <link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">
        <!--FAVICON - led light by Josy Dom Alexis from the Noun Project-->
        <link rel="shortcut icon" href="img/favicon.png">
        <!--LINK TO STYLE.CSS-->
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <div>
                <h1>"IT'S LIT."</h1>
            </div>
            
            
            <?php include 'letters.php';?>
            
            <div class="wordBackground">
            <!--FIRST WORD: ART-->
            <div class="letter">
                <?php
                displaySolidLetter($arrayA);
                ?>
            </div>
            <div class="letter">
                <?php
                displaySolidLetter($arrayR);
                ?>
            </div>
            <div class="letter">
                <?php
                displaySolidLetter($arrayT);
                ?>
            </div>
            </div>
            
            <br><br>
            
            <div class="wordBackground">
            <!--SECOND WORD: TAR-->
            <div class="letter">
                <?php
                displayRainbowLetter($arrayT);
                ?>
            </div>
            <div class="letter">
                <?php
                displayRainbowLetter($arrayA);
                ?>
            </div>
            <div class="letter">
                <?php
                displayRainbowLetter($arrayR);
                ?>
            </div>
            </div>
            
            <br><br>
            
            <div class="wordBackground">
            <!--THIRD WORD: RAT-->
            <div class="letter">
                <?php
                displayBlackLetter($arrayR);
                ?>
            </div>
            <div class="letter">
                <?php
                displayBlackLetter($arrayA);
                ?>
            </div>
            <div class="letter">
                <?php
                displayBlackLetter($arrayT);
                ?>
            </div>    
            </div>
            
            <br><br>
            
            <!--FOOTBAR-->
            <span class="footer">
                <span class="foot-item"><a href="#">Last Updated: 16 Feb 2017</a></span>
        		<span class="foot-item"><a href="https://ilearn.csumb.edu/mod/assign/view.php?id=379381" target="_blank">&copy; 2017 Pseduo LED Board</a></span>		   
        		<span class="foot-item"><a href="https://twitter.com/MaveyMa" target="_blank">@MaveyMa</a></span>
            </span>
            
        </div> <!--END CONTAINER-->
    </body>
</html>