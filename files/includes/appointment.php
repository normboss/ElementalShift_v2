<!DOCTYPE html>

<!--/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/-->
<html>
    <head>
        <title>About</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href=<?php echo $_SESSION['root'].'/files/css/appointmentGrid.css' ?> media="screen" rel="stylesheet" type="text/css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>

    </head>
    <body>

        <div class="appointment-wide">
            <div id="quote-id1" class="quote2"> 
                Please contact Kirsten for more information
                or to&nbsp;make&nbsp;an&nbsp;appointment.
            </div>
            <br>
            <div class="appointment-button">
                <a href="/files/php/contact.php" alt="">
                    <img src="../images/contact_button.png">
                </a> 
            </div>
            <div id="quote-id2" class="quote2">
            </div>
        </div>
        
        <div class="appointment-narrow">
            <div id="quote-id1" class="quote2"> 
                Contact&nbsp;Kirsten
            </div>
            <br>
            <div class="appointment-button">
                    <a href="/files/php/contact.php" alt="">
                        <img src="../images/contact_button.png">
                    </a> 
            </div>
        </div>


    </body>
</html>