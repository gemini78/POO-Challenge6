<?php
$pageActive = 'about';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speedometer</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php require('parts/topbar.php')  ?>
    <main>
        <div class="wrapper">
            <div class="about">
                <h1>Speedometer</h1>
                <div class="rules">
                    <div class="content">
                        <p>
                            Créé une classe Speedometer qui comprendra une méthode static <br>
                            qui convertit les KM en MILES et une autre qui convertit les MILES en KM.
                        </p>
                        <p>Critères de validation
                        <ul>
                            <li>Speedometer::convertKmToMiles(10) retournera 6,21</li>
                            <li>Aucun magic number n’est présent dans les méthodes (pense aux constantes !)</li>
                            <li>Le code doit être visible sur un dépot Github</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require('parts/footer.php') ?>
</body>

</html>