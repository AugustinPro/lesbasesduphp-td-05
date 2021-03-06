<?php
// récupération des données du cvs dans un tableau php;
$csvData = array_map('str_getcsv', file('assets/departments_regions_france_2016.csv'));
// suppression de la ligne d'entête du tableau
$deps_regions = array_slice($csvData, 1);
$k=0;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Département Région de France</title>
    <style>
        .container {
            margin-top: 50vh;
            transform: translateY(-50%);
        }
        body {
            background: url(assets/img/25101.jpg) left center / cover no-repeat;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Formulaire d'inscription</h1>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <!-- Crééz votre formulaire ici -->
                <form>
                    <div class="form-group">
                        <label for="yourName">Nom</label>
                        <input type="text" class="form-control" id="yourName" placeholder="Ex : John Doe">
                    </div>
                    <div class="form-group">
                        <label for="birthday">Date de Naissance</label>
                        <input type="date" class="form-control" id="birthday" placeholder="mm/dd/yyyy">
                    </div>
                    <div class="form-group">
                        <label for="departements">Département</label>
                        <select class="form-control" id="departements">
                            <?php foreach($deps_regions as $show) { ?>
                                <option value="<?php $show[0] ?>"><?php echo "$show[1]" ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="regions">Région</label>
                        <select class="form-control" id="regions">
                            <?php foreach($deps_regions as $show) { ?>
                                <option value="<?php $show[3] ?>"><?php echo "$show[3]" ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div>
                        <!-- <pre>
                            <?php //print_r($deps_regions); ?>
                        </pre> -->
                    </div>
                    <button class="btn btn-primary mx-auto d-block col-4" type="submit">ENVOYER</button>
                </form>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>