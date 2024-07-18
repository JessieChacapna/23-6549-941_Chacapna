<?php
function printProfile() {
    $name = "Jessie James Chacapna";
    $age = 20;
    $hobby = "playing online games";
    $dream = "to become a millionaire";
    $profession = "Software Developer";
    $location = "Baguio, City";
    $bio = "Jessie James Chacapna is a passionate software developer with a keen interest in building innovative and efficient software solutions. With several years of experience in the tech industry, Jessie has worked on various projects ranging from web development to mobile applications.";
    $otherStuff = "Apart from coding and gaming, Jessie enjoys hiking and exploring new technologies.";

    echo "<!DOCTYPE html>";
    echo "<html lang='en'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>Profile of Jessie James Chacapna</title>";
    echo "<style>";
    echo "body { font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 20px; }";
    echo ".profile-container { background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); max-width: 600px; margin: auto; }";
    echo "h1 { color: #333; }";
    echo "p { color: #666; line-height: 1.6; }";
    echo "strong { color: #333; }";
    echo "</style>";
    echo "</head>";
    echo "<body>";
    echo "<div class='profile-container'>";
    echo "<h1>Profile of $name</h1>";
    echo "<p><strong>Age:</strong> $age</p>";
    echo "<p><strong>Hobby:</strong> $hobby</p>";
    echo "<p><strong>Dream:</strong> $dream</p>";
    echo "<p><strong>Profession:</strong> $profession</p>";
    echo "<p><strong>Location:</strong> $location</p>";
    echo "<p><strong>Bio:</strong> $bio</p>";
    echo "<p><strong>Other stuff:</strong> $otherStuff</p>";
    echo "</div>";
    echo "</body>";
    echo "</html>";
}

printProfile();
?><?php
function printPyramid($n) {
    for ($i = 1; $i <= $n; $i++) {
        // Print leading spaces
        for ($j = $i; $j < $n; $j++) {
            echo " ";
        }
        // Print stars
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo "*";
        }
        // Move to the next line
        echo "\n";
    }
}

// Define the height of the pyramid
$height = 5;
printPyramid($height);
?>
