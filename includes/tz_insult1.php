<?php

function tz_insult($victim)
{

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

    $len = count($tenz_array);
    $index = rand(0,$len-1);

    $insult = $tenz_array[$index] ;
//    error_log("victim: $victim");
    $insult = str_replace("XX", "$victim", $insult);
    echo "<h1>$insult<h1>";
}


if (isset ($_REQUEST["name"])){
    $victim = $_REQUEST["name"];
}
    tz_insult($victim);
?>
