<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Échiquier</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- votre code ici -->
    <div class="board">
        <?php for($i=2; $i<10; $i++){ ?>
                <?php for($j=2; $j<10; $j++){ ?>
                    <div class="<?php echo ($i%2 == 0 && $j%2 == 0) || ($i%2 != 0 && $j%2 != 0) ? "black_tile" : "white_tile" ?>"></div>
                <?php } ?>
        <?php } ?>
    </div>
</body>

</html>