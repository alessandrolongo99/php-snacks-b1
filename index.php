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
    <hr>

    <!-- **************************** -->

    <h2>Snack 2</h2>
    <p>Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
        che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
        Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"</p>

    <?php
    $name = $_GET['name'];
    $age = $_GET['age'];
    $mail = $_GET['mail'];

    echo '<h4>Nome: ' . $name . '</h4>';
    echo '<h4>Eta: ' . $age . '</h4>';
    echo '<h4>Mail: ' . $mail . '</h4>';

    if ((strlen($name) > 3) && (is_numeric($age)) && ((strpos($mail, '@') > 0) && (strpos($mail, '.') > 3))) {
        echo '<h4>Accesso riuscito</h4>';
    } else {
        echo '<h4>Accesso negato</h4>';
    }
    ?>
    <hr>

    <!-- **************************** -->

    <h2>Snack 3</h2>
    <p>Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta</p>

    <?php
    $numbers = [];
    while (count($numbers) < 15) {
        $randomNumber = rand(1, 15);
        if (!in_array($randomNumber, $numbers)) {
            $numbers[] = $randomNumber;
        }
    }
    var_dump($numbers);
    ?>
    <hr>

    <!-- **************************** -->

    <h2>Snack 4</h2>
    <p>Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi.
        Ogni punto un nuovo paragrafo.</p>

    <?php
    $paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci laboriosam iure dignissimos excepturi quaerat illo earum ipsam ut inventore 
        voluptate porro architecto non sunt rerum, quisquam eius iusto, praesentium quas?';

    $splitted = explode('.', $paragraph);
    ?>

    <h3>Paragrafo originale: </h3>
    <p><?php echo $paragraph ?></p>

    <h3>Paragrafo splittato: </h3>
    <ol>
        <?php for ($i = 0; $i < count($splitted); $i++) { ?>
            <li>
                <?php
                echo $splitted[$i];
                ?>
            </li>
        <?php } ?>
    </ol>
    <hr>

    <!-- **************************** -->

    <h2>Snack 5</h2>
    <p>Creare un array contenente qualche alunno di un'ipotetica classe.
        Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
        Stampare Nome, Cognome e la media dei voti di ogni alunno.</p>

    <?php
    $class = [
        [
            'name' => 'Alessandro',
            'surname' => 'Longo',
            'votes' => [
                'english' => 8,
                'math' => 9,
                'chemistry' => 6
            ]
        ],
        [
            'name' => 'Federico',
            'surname' => 'Corazzari',
            'votes' => [
                'english' => 8,
                'math' => 8,
                'chemistry' => 7
            ]
        ],
        [
            'name' => 'Giovanna',
            'surname' => 'Ottoboni',
            'votes' => [
                'english' => 6,
                'math' => 6,
                'chemistry' => 6
            ]
        ],
    ];
    ?>

    <ul>
        <?php for ($i = 0; $i < count($class); $i++) { ?>
            <li>
                <?php
                    echo $class[$i]['name'] . ' ' . $class[$i]['surname'] . ': ';
                    $studentVotes = array_values($class[$i]['votes']);
                    $average = 0;
                    for ($k = 0; $k < count($studentVotes); $k++) {
                        $average += $studentVotes[$k];
                    }
                    echo round($average / count($studentVotes), 2);
                ?>
            </li>
        <?php } ?>
    </ul>
</body>

</html>