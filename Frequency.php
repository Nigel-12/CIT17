<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Frequency</title>
</head>
<body>
    <?php
    $text = file("nums.txt");
    $freq = array_count_values($text);
    arsort($freq);

    foreach ($text as $key => $value) {
        echo "element[".$key."]: ". $value. "<br>";
    }
    echo "<br>";
    foreach ($freq as $key => $value) {
        echo $key." occurs " . $value . " times.<br>";
        
    }    
    ?>
</body>
</html>