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
        <!-- $i=1 because if you start at 0 the modulo for both 0 and 1 equal 0 therefore no checkerboard ): -->
        <?php for($i=1; $i<9; $i++){ ?>
                <?php for($j=1; $j<9; $j++){ ?>
                    <div class="<?php echo (($i + $j)%2 == 0) ? "black_tile" : "white_tile" ?>"></div>
                <?php } ?>
        <?php } ?>
    </div>
</body>

</html>