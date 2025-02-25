<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hlavny nadpis</h1>
    <?php
    $meno = "Dima";
    echo $meno;
    echo "<br>";
    var_dump($meno);
    echo "<br>";

    $numbers = array("0","1","2");
    echo $numbers[0];
    echo "<br>";

    foreach($numbers as $number){
        echo $number;
        echo "<br>";
    }
    echo "<br>";

    $date =array("Peter" => 25,
                "Jana" => 30,
                "Marek" => 20
            );

    foreach($data as $name => $age){
        echo "$name ma $age rokov <br>";
    }
    ?>
</body>
</html>