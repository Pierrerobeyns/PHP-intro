<html>
    <head>
        <title>Conditions</title>
    </head>
    <body>


 <!--Exercices sur les conditions-->

 <h2>Exercice 1.1</h2>
 <?php
// 1.1 Clean your room Exercise 

$room_is_filthy = true;

if( $room_is_filthy = true ){
	echo "Yuk, Room is dirty : let's clean it up !";
	//cleanup_room();
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}
?>
 
<h2>Exercice 1.2</h2>
<?php
// 1.2 Clean your room Exercise, improved
// Create the array of possible states
$possible_states = array(
    0 => "health hazard",
    1 => "filthy",
    2 => "dirty",
    3 => "clean",
    4 => "immaculate");

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[4]; 

if($room_filthiness == $possible_states[0]){
	echo "Yuk, Room is Disgusting! Let's clean it up !";
} else if($room_filthiness == $possible_states[2] ){
	echo "Yuk, Room is dirty : let's clean it up !";
} else if($room_filthiness == $possible_states[1]) {
    echo "Yuk, Room is filthy : let's clean it up !";
} else if ($room_filthiness == $possible_states[3]) {
    echo "Nice, Room is clean !";
} else {
	echo "Nothing to do, room is neat.";
} 
?>

<h2>Exercice 2</h2>

<!--// 2. "Different greetings according to time" Exercise-->
<?php

date_default_timezone_set('Europe/Brussels');
$now = date("H:i"); 
// How to get the current time in PHP ? Google is your friend 

// Test the value of $now and display the right message according to the specifications.
if($now >= 5 AND $now <= 9){
    echo "Good morning !";
} else if ($now > "09:00" AND $now <= "12:00"){
    echo "Good day !";
} else if ($now > "12:00" AND $now <= "16:00"){
    echo "Good afternoon !";
} else if ($now > "16:00" AND $now <= "21:00"){
    echo "Good evening !";
} else if ($now > "21:00" AND $now < "05:00"){
    echo "Good night !";
}
?>

<h2>Exercice 3</h2>

<!--// 3. "Different greetings according to age" Exercise-->
<?php

$age = $_GET["age"];
$gender = $GET_["gender"];

//if (isset($gender == "male")){
    if (isset($age)){
        if ($age < 12){
            echo "Hello mister kiddo !";
        } else if ($age >= 12 AND $age < 18){
            echo "Hello mister teenager !";
        } else if ($age >= 18 AND $age < 115){
            echo "Hello mister Adult !";
        } else if ($age >= 115){
            echo "Wow! Still alive mister ? Are you a mister robot, like me ? Can I hug you ?";
        }
    }
}

?>
<!--// Form (incomplete)-->

<form method="get" action="">
	<label for="age">Please type your age</label>
	<input type="" name="age">
	<input type="submit" name="submit" value="Greet me now">
    <input type="radio" id="male" name="gender" value="male">Male
    <input type="radio" id="Female" name="gender" value="Female">Female
</form>



    </body>
</html>