<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
        book
        </title>
    </head>
    <body>
  
<?php 
$sentence = "the main of a book";
echo  strtolower($sentence);
echo strtoupper($sentence);
echo strlen($sentence);
echo $sentence[0];

$sentence[0] = "m";
echo $sentence;
echo str_replase("book", "college", $sentence);
?>
  </body>
  </html>