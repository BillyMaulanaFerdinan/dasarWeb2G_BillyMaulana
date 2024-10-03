<?php

$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Officiis explicabo nam nobis eveniet. Iste, sint excepturi deleniti 
    commodi assumenda, voluptates numquam neque corrupti repudiandae, 
    ab quas optio facere nulla voluptatum.";

echo "<p>{$loremIpsum}<p/>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "<p/>";
echo "<p>" . strtolower($loremIpsum) . "<p/>";

?>