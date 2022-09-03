<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
$people = [
    'alessandro',
    'margherita',
    'federico',
];

$success = false;
?>

<body>
    <h1>
        <?php
        for ($i = 0; $i < count($people); $i++) {
            if ($_GET['name'] == $people[$i]) {
                $success = true;
            }
        }

        if ($success) { ?>
            <h2>OK</h2>
        <?php } else { ?>
            <h2>KO</h2>
        <?php } ?>
    </h1>
</body>

</html>