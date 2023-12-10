<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 11 php 문제 4번</title>
</head>
<body>
    <?php
        $cities = array(
            "Kim" => "Seoul",
            "Lee" => "Pusan, Daegu",
            "Choi" => "Inchon",
            "Park" => "Suwon, Daejon",
            "Jung" => "Kwangju, Chunchon, Wonju"
        );

        
        unset($cities["Choi"]);

        
        foreach ($cities as $name => $city) {
            echo "[".$name . "]".": " . $city . "<br>";
        }
    ?>
</body>
</html>