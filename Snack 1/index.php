<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        $matches = [

            [
                "team_1" => "Boston Celtics",
                "team_2" => "Chicago Bulls",
                "score_team_1" => 115,
                "score_team_2" => 140
            ],

            [
                "team_1" => "Brooklyn Nets",
                "team_2" => "Cleveland Cavaliers",
                "score_team_1" => 124,
                "score_team_2" => 138
            ],

            [
                "team_1" => "New York Knicks",
                "team_2" => "Detroit Pistons",
                "score_team_1" => 134,
                "score_team_2" => 158
            ],

            [
                "team_1" => "Philadelphia 76ers",
                "team_2" => "Indiana Pacers",
                "score_team_1" => 111,
                "score_team_2" => 122
            ],

            [
                "team_1" => "Toronto Raptors",
                "team_2" => "Milwaukee Bucks",
                "score_team_1" => 120,
                "score_team_2" => 127
            ],
        ];

        $printed_matches = [];

        for ($i = 0; $i < count($matches); $i++) {

            $printed_matches .= "<h4>" . $matches[$i]["team_1"] . " - " . $matches[$i]["team_2"] . " | " . $matches[$i]["score_team_1"] . " - " . $matches[$i]["score_team_2"] . "</h4>";
        }

    ?>

    <h2>NBA Matches</h2>

    <?php

        echo $printed_matches;

    ?>

</body>
</html>