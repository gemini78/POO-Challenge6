<?php 

    require 'src/Speedometer.php';

    const MSG_ERROR = "Merci de renseigner ce champ";

    if (isset($_POST['kmToMiles'])) {
        if(isset($_POST['km']) && !empty($_POST['km'])) {
            $nbKm = $_POST['km'];
            $miles = Speedometer::kmToMiles($nbKm);
        } else {
            $errorKm = MSG_ERROR;
        }
    }
    if (isset($_POST['milesToKm'])) {
        if(isset($_POST['miles']) && !empty($_POST['miles'])) {
            $nbMiles = $_POST['miles'];
            $km = Speedometer::milesToKm($nbMiles);
        } else {
            $errorMiles = MSG_ERROR;
        }
    }
    
    $pageActive = 'home';
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
            <h1>Speedometer</h1>
            <form class="container-cards" method = "POST">
                <div class="card">
                    <div class="card-header">
                        <label for="km">km</label>
                    </div>
                    <div class="card-body">
                        <input type="text" name="km" id="km" placeholder="Entrez le nombre de km, svp">
                        <?php 
                            if(isset($errorKm)) { ?>
                                <span class="errors"><?=$errorKm?></span>
                        <?php }
                        ?>
                    </div>
                    <div class="card-footer">
                        <label for="km">km</label>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <span>km to miles</span>
                    </div>
                    <div class="card-body">
                        <div class="card-body__convert">
                            <input type="submit" name="kmToMiles" value="Km to Miles">
                        </div>
                    </div>
                    <div class="card-footer">
                        <span>km to miles</span>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <span>miles</span>
                    </div>
                    <div class="card-body">
                        <textarea cols="10" rows="2"><?= (isset($miles))?$miles:"" ?></textarea>
                    </div>
                    <div class="card-footer">
                        <span>miles</span>
                    </div>
                </div>
            </form>
            <form class="container-cards" method = "POST">
                <div class="card">
                    <div class="card-header">
                        <label for="miles">miles</label>
                    </div>
                    <div class="card-body">
                        <input type="text" name="miles" id="miles" placeholder="Entrez le nombre de miles, svp">
                        <?php 
                            if(isset($errorMiles)) { ?>
                                <span class="errors"><?=$errorMiles?></span>
                        <?php }
                        ?>
                    </div>
                    <div class="card-footer">
                        <label for="miles">miles</label>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <span>miles to km</span>
                    </div>
                    <div class="card-body">
                        <div class="card-body__convert">
                            <input type="submit" name="milesToKm" value="Miles to Km">
                        </div>
                    </div>
                    <div class="card-footer">
                        <span>miles to km</span>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <span>km</span>
                    </div>
                    <div class="card-body">
                        <textarea cols="10" rows="2"><?= (isset($km))?$km:"" ?></textarea>
                    </div>
                    <div class="card-footer">
                        <span>km</span>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <?php require('parts/footer.php') ?>
</body>

</html>