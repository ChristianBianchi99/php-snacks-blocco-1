<?php
// SNACK 1
$matches=[
    [
        'home_team' => 'NUTRIBULLET TREVISO BASKET',
        'visiting_team' => 'UNAHOTELS REGGIO EMILIA',
        'home_score' => 58, 
        'visiting_score' => 78,
    ],
    [
        'home_team' => 'BERTRAM YACHTS DERTHONA TORTONA',
        'visiting_team' => 'DOLOMITI ENERGIA TRENTINO',
        'home_score' => 76,
        'visiting_score' => 70,
    ],
    [
        'home_team' => 'TEZENIS VERONA',
        'visiting_team' => 'HAPPY CASA BRINDISI',
        'home_score' => 100,
        'visiting_score' => 97,
    ],
    [
        'home_team' => 'EA7 EMPORIO ARMANI MILANO',
        'visiting_team' => 'GERMANI BRESCIA',
        'home_score' => 78,
        'visiting_score' => 77,
    ],
    [
        'home_team' => 'UMANA REYER VENEZIA',
        'visiting_team' => 'GIVOVA SCAFATI',
        'home_score' => 80,
        'visiting_score' => 69,
    ],
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks Blocco 1</title>
</head>
<body>
    <!-- SNACK 1 -->
    <div class="snack-1">
        <ul>
            <?php foreach($matches as $match) { ?>
                <li>
                    <?php echo $match['home_team'].' - '.$match['visiting_team'].' | '.$match['home_score'].' - '.$match['visiting_score'] ?>
                </li>
            <?php } ?>
        </ul>
    </div>
</body>
</html>