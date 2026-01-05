<?php


// ARRAY PRACTICE! //

$subject = ["Math", "science", "English"];

echo $subject[0] . "<br>" ;
echo $subject[1] . "<br>" ;
echo $subject[2] . "<br><br><br>" ;

foreach ($subject as $subject) {     // FOREACH LOOP // 
     echo "Subject: $subject <br><br><br> ";
}

$student = [
     "name" => "Joel",
     "age" => 22,
     "course" => "Information System" 
] ;

echo $student ["name"] . "<br>" ;
echo $student ["age"] . "<br>" ;


function greetUser ($name) {
   echo "Hello, $name! Welcome back! <br> ";
}

greetUser("joel");
greetUser("Mr.Smart");

// Challenge 1 name 3 favortie food using foreach loop //

$foodFav = ["leche", "Matcha", "coffewithMilo"  ] ;
$courseSubject = ["MMW", "MathAnal", "Webdev"] ;

echo $foodFav[0] . "<br>" ;
echo $foodFav[1] . "<br>" ;
echo $foodFav[2] . "<br><br>" ;



foreach ($foodFav as $foodFav) {
     echo "myFavFood: $foodFav <br><br> ";
} 
foreach ($courseSubject as $courseSubject) {
     echo "CourseSubject ko: $courseSubject <br><br> ";
}

//Challenge 2 Student in function //

function showStudent($name, $courseSubject) {
     echo "Student: $name | Course: $courseSubject <br>";
}

showStudent("Joel", "MMW" );
showStudent("Mr.Smart", "MathAnal" );
showStudent("Aeriu", "Webdev" );

?>