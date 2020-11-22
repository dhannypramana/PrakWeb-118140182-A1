<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum PHP Dasar</title>
</head>
<body>

    <p>Bilangan Prima: </p>

<?php
    for($i=1; $i<=50; $i++){ 
            $counter = 0;
            for($j=1; $j<=$i ;$j++){
                if($i % $j == 0){
                    $counter++;
                }
            }
            if($counter == 2){
            echo $i.' ';
            }
        }
    ?>
</body>
</html>