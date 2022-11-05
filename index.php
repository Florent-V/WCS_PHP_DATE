<?php 

$presentTime = new DateTime();
$presentTime->format('H') <= 12 ? $amPresent = 'active' : $pmPresent = 'active';

$destinationTime = new DateTime('2022-12-24 23:59:00');
$destinationTime->format('H') <= 12 ? $amDestination = 'active' : $pmDestination = 'active';

$diff = $destinationTime->diff($presentTime);

$noel =  $diff->format('Noël est dans %Y ans, %m mois, %d jours, %H heures, %i minutes');

$noelMinute = $diff->format('%a') * 24 * 60 +  $diff->format('%h') * 60 + $diff->format('%m');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <div class="time destination">
            <div class="screen">
                <div class="field">
                    <p class="title">|MONTH|</p>
                    <p class="content"><?= $destinationTime->format('M') ?></p>
                </div>
                <div class="field">
                    <p class="title">|DAY|</p>
                    <p class="content"><?= $destinationTime->format('j') ?></p>
                </div>
                <div class="field">
                    <p class="title">|YEAR|</p>
                    <p class="content"><?= $destinationTime->format('Y') ?></p>
                </div>
                <div class="ampm">
                    <p class="title">AM</p>
                    <div class="point <?= $amDestination ?? '' ?>"></div>
                    <p class="title">PM</p>
                    <div class="point <?= $pmDestination ?? '' ?>"></div>
                </div>
                <div class="field">
                    <p class="title">|HOUR|</p>
                    <p class="content"><?= $destinationTime->format('H') ?></p>
                </div>
                <div class="sep">
                    <div class="point"></div>
                    <div class="point"></div>
                </div>
                <div class="field">
                    <p class="title">|MIN|</p>
                    <p class="content"><?= $destinationTime->format('i') ?></p>
                </div>
            </div>
            <p class="timeTitle">|Destination||Time|</p>
        </div>
        <div class="time present">
            <div class="screen">
                <div class="field">
                    <p class="title">|MONTH|</p>
                    <p class="content"><?= $presentTime->format('M') ?></p>
                </div>
                <div class="field">
                    <p class="title">|DAY|</p>
                    <p class="content"><?= $presentTime->format('j') ?></p>
                </div>
                <div class="field">
                    <p class="title">|YEAR|</p>
                    <p class="content"><?= $presentTime->format('Y') ?></p>
                </div>
                <div class="ampm">
                    <p class="title">AM</p>
                    <div class="point <?= $amPresent ?? '' ?>"></div>
                    <p class="title">PM</p>
                    <div class="point <?= $pmPresent ?? '' ?>"></div>
                </div>
                <div class="field">
                    <p class="title">|HOUR|</p>
                    <p class="content"><?= $presentTime->format('H') ?></p>
                </div>
                <div class="sep">
                    <div class="point"></div>
                    <div class="point"></div>
                </div>
                <div class="field">
                    <p class="title">|MIN|</p>
                    <p class="content"><?= $presentTime->format('i') ?></p>
                </div>
            </div>
            <p class="timeTitle">|Present||Time|</p>
        </div>        
    </main>
    <p><?= $noel ?></p>
    <p>Soit <?= $noelMinute ?> minutes</p>
    <p>On aura donc besoin de <?= round($noelMinute/10000,2) ?> litres de carburant</p>
    

    
    
</body>
</html>