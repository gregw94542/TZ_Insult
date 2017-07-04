<?php

function tz_insult($victim)
{
//================================================================== 
// this array contains the list of insults
//  the XX will be replaced by the victim's name
//  make sure the insult in in between quotes   "<insult goes here>"
//  separate each insult with a comma  
//==================================================================   
 $tenz_array = array(
    "XX did your mother dress you?",
    "XX you are ugly",
    "XX is stupid",
    "Your breath smells like day old yogurt",
    "XX's breath smells like my feet",
    "When XX walks into a room full of rocks, the average IQ of the room goes down",
    "XX , you suck at cooking, you totally suck",
    "XX has been the biggest kid in kindergarden for the past 12 years",
    "XX can have a argument with a garbage can... and lose!!",
    "XX's sister is an only child",
    "XX's brother is an only child",
    "XX is a bright as a burnt out lightbulb",
    );

    $len = count($tenz_array);	// calculate the length on the list (array)
    $index = rand(0,$len-1);    // use the random number to pick out which item to pull out

    $insult = $tenz_array[$index] ;  // pick  the insult out of  the list of insults
    $insult = str_replace("XX", "$victim", $insult);   	// replace the "XX" with the victim's name
    echo "<h1>$insult<h1>";								// display the insult to the screen
}


if (isset ($_REQUEST["name"])){
    $victim = $_REQUEST["name"];
}
    tz_insult($victim);
?>
