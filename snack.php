<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php

$posts = [
    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
?>

<body>
    <h1>Posts</h1>
    <ul>
        <?php
        foreach ($posts as $key => $post) {
            echo '<li>' . $key . '</li>';
            echo '<ul>';
            foreach ($post as $element) {
                echo '<li>' . $element . ': </li>';
            }
            echo '</ul>';
        }
        ?>
    </ul>
    <hr>

    <!-- ********************************************************* -->

    <h1>Party</h1>
    <form action="./snack1.php">
        <input type="text" name="name">
        <input type="submit" value="vai">
    </form>
    <hr>
    <!-- ********************************************************* -->

    <h1>Pomodori</h1>
    <?php
    $pomodori = [
        [
            'type' => 'San Marzano',
            'weight' => rand(1, 10),
            'length' => rand(1, 10),
        ],
        [
            'type' => 'Piennolo del Vesuvio',
            'weight' => rand(1, 10),
            'length' => rand(1, 10),
        ],
        [
            'type' => 'Sannita',
            'weight' => rand(1, 10),
            'length' => rand(1, 10),
        ],
        [
            'type' => 'Datterino',
            'weight' => rand(1, 10),
            'length' => rand(1, 10),
        ],
        [
            'type' => 'Ciliegino',
            'weight' => rand(1, 10),
            'length' => rand(1, 10),
        ],
        [
            'type' => 'Grappolo',
            'weight' => rand(1, 10),
            'length' => rand(1, 10),
        ],
        [
            'type' => 'Costoluto',
            'weight' => rand(1, 10),
            'length' => rand(1, 10),
        ],
        [
            'type' => 'Manduria',
            'weight' => rand(1, 10),
            'length' => rand(1, 10),
        ],
        [
            'type' => 'Pizzo',
            'weight' => rand(1, 10),
            'length' => rand(1, 10),
        ],
        [
            'type' => 'Canestrino',
            'weight' => rand(1, 10),
            'length' => rand(1, 10),
        ],
    ];
    ?>

    <h4><?php
        $sum = 0;
        foreach ($pomodori as $pomodoro) {
            echo '<h3>' . $pomodoro['type'] . ': ' . $pomodoro['weight'] . '</h3>';
            $sum += $pomodoro['weight'];
        }
        echo 'media: ' . $sum / 10;
        ?></h4>
</body>

</html>