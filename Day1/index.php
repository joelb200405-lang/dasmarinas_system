<?php
// echo "Hello, world! I'm back-end ready!";

$name = "Joel";  // string
$course = "Information System";     
$school = "Kolehiyo ng Lungsod ng Dasmarinas ";
$age = 21;
$food = "letche plan";
$game = "League of Legends";
$StudyHour = 3;

echo "Hello, I'am $name and my course is $course and from $school<br>";
echo "Hello my name is $name and my age is $age<br>";
echo "Name: $name <br>";
echo "Course: $course <br>";
echo "School: $school <br>";
echo "My age is: $age <br>";
echo "My Favorite Food: $food <br>";
echo "My Favorite Game: $game <br>";
echo "Hello if you want to know me more. I would like you gives some of my dailyhabit and my favorite food! the first is I love to play $game and I would like to eat $food than rice. <br> ";

if($age >= 18) {
     echo "Status: Matanda <br> ";
} else {
    echo "Status: Bata <br> ";
}

if($game == "League of Legends") {
     echo "You Like Faker! <br> ";
} else {
    echo "You don't know Faker at all. :< <br> ";
}
 
if ($StudyHour >= 3) {
    echo "Good job studying! <br> ";
} else {
    echo "You need more to study! <br> ";
}




?>


