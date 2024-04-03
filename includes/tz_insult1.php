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
	"XX's hair smells like roses.",
	"XX is sure lookin' sharp today!",
    "XX, today, the blue bird of happiness will land on your homework.",
    "Hey XX, your dog will eat your homework.",
    "XX, your lucky number for today are 3.1412, 4732  and egg sandwich.",
	"XX will have good food today.",
 	"XX's name will be changed to Betty tomorrow at 7:32 PM. (no offense if your name is Betty though.)",
	"If XX's nose turns upside down next time that it rains, they will drown.",
	"Congratulations XX! You have gotten the most rare message! Good job!.",
	"XX! これは完全に日本語です！",
	"Hello XX! I am a real person making these texts. HELP.",
	"Hey XX! Did you know that you are named after XX the XV from ancient Germany?",
	"XX, you know those ads that try to be personal by showing your name? Don't you XX?",
	"Wow XX, you have a pretty nice computer!",
	"XX! This is a compliment to your (insert thing that XX has here).",
	"If XX subscribes to TEN RAN 432, that would be pretty neat.",
	"Don't take this personally, XX, but I think your hair is pretty neat.",
	"What if this computer is actually a real person? Would that change your opinion of boredom XX?",
	"Error 404, no content found. Just kidding XX!",
	"Hey XX! You should try making some sayings on your own! That would really help me here.", 
	"Sometimes there are multiple people with the same name! I think that I met somebody named XX before.",
	"XX! Do a barrel roll (Z or R twice)!",
	"XX has died of dysentery... (RIP)",
	"It's dangerous to go alone XX! Take this quote!",
	"A winner is you XX! Congrats.",
	"XX, you have prooved the justice of our culture. Now go and rest our heroes.",
	"Yo XX! Lets play money making game!",
	"A slime draws near! Command, XX?",
	"You must defeat my dragon fist to stand a chance XX.",
	"Do you ever wonder what happens if you type Clarence into the name bar XX?",
	"XX, here is a serious question... Nickelodeon, Disney Channel, or Cartoon Network?",
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
