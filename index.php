<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!-- Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, 
    punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60 -->

<?php
$games = [
    [
        'team1' => 'Olimpia Milano',
        'team2' => 'Cantu',
        'points1' => 55,
        'points2' => 60,
    ],
    [
        'team1' => 'Inter',
        'team2' => 'Forli',
        'points1' => 65,
        'points2' => 20,
    ],
    [
        'team1' => 'Venezia',
        'team2' => 'Cesena',
        'points1' => 70,
        'points2' => 50,
    ],
    [
        'team1' => 'Taranto',
        'team2' => 'Padova',
        'points1' => 5,
        'points2' => 80,
    ],
    [
        'team1' => 'Firenze',
        'team2' => 'Bologna',
        'points1' => 45,
        'points2' => 50,
    ],
];
?>

<body>
    <h1>Snacks B1</h1>

    <h2>Snack 1</h2>
    <p>Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite,
        punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantù | 55-60</p>

    <ul>
        <?php
        for ($i = 0; $i < count($games); $i++) {
            echo '<li>' . $games[$i]['team1'] . ' - ' . $games[$i]['team2'] . ' | ' . $games[$i]['points1'] . ' - ' . $games[$i]['points2'];
        }
        ?>
    </ul>

    <!-- **************************** -->

    <h2>Snack 2</h2>
    <p>Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
        che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
        Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"</p>

    <?php
        $name = $_GET['name'];
        $age = $_GET['age'];
        $mail = $_GET['mail'];

        echo '<h4>Nome: '.$name.'</h4>';
        echo '<h4>Eta: '.$age.'</h4>';
        echo '<h4>Mail: '.$mail.'</h4>';

        if ((strlen($name) > 3) && (is_numeric($age)) && ((strpos($mail, '@') > 0) && (strpos($mail, '.') > 3))){
            echo '<h4>Accesso riuscito</h4>';
        }else{
            echo '<h4>Accesso negato</h4>';
        }
    ?>

</body>

</html>