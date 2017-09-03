<?php

$width = null;
if (isset($_REQUEST['width'])) {
    $width = $_REQUEST['width'];
}
$height = null;
if (isset($_REQUEST['height'])) {
    $height = $_REQUEST['height'];
}

// Pressing return or enter will press the most upper left button 
$message = '';
if (isset($_REQUEST['button'])) {
    $message = $_REQUEST['button'] . ' Submit was pressed.';
}
?> 


<html><title>My Window Title</title> 
    <!-- html comment --> 
    <!-- The form tag is needed if you with to send form values to the server  --> 
    <form action="Aquarium_Calculator.php" method="POST">
        
        Width: 
        <input type="text" name="width" value="<? echo($width); ?>" size = 30 maxlength=10 placeholder = "width"/> 
        <br/>
        <br/>
        
        Height:
        <input type="text" name="height" value="<? echo($height); ?>" size = 30 maxlength=10 placeholder = "height"/> 

        <hr size ="1" /> 
        <hr size ="1" /> 
        
        <input type="submit" name="button" value="Submit Form">&nbsp; 

        <?= $message ?> 

        <hr size ="1" /> 
    </form> 
    
</html>