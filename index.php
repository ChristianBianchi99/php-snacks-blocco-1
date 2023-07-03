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
];
// SNACK 2
$name = $_GET['name'];
$email = $_GET['email'];
$age = intval($_GET['age']);
if(strlen($name) > 3 && strpos($email, '@') !== false && strpos($email, '.') !== false && is_int($age) === true){
    $response= 'Accesso riuscito';
} else {
    $response= 'Accesso negato';
};
// SNACK 3
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
// SNACK 4
$random_numbers = [];
while(count($random_numbers) < 15){
    $number = rand( 1, 100);
    if(!in_array($number, $random_numbers)){
        $random_numbers[] = $number;
    }
}
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
    <h2>SNACK 1</h2>
    <div class="snack-1">
        <ul>
            <?php foreach($matches as $match) { ?>
                <li>
                    <?php echo $match['home_team'].' - '.$match['visiting_team'].' | '.$match['home_score'].' - '.$match['visiting_score'] ?>
                </li>
            <?php } ?>
        </ul>
    </div>
    <hr>
    <!-- SNACK 2 -->
    <h2>SNACK 2</h2>
    <form action="index.php" method="GET">
        <input type="text" name="name" id="name" placeholder="name">
        <input type="text" name="email" id="email" placeholder="email">
        <input type="number" name="age" id="age" placeholder="age">
        <input type="submit" value="INVIA">
    </form>
    <?php echo $response ?>
    <hr>
    <!-- SNACK 3 -->
    <h2>SNACK 3</h2>
    <?php foreach($posts as $date => $posts_by_date){ ?>
        <h4><?php echo $date ?></h4>
        <ul>
            <?php foreach($posts_by_date as $post){ ?>
                <li>
                    <strong>Title: </strong><?php echo $post['title'] ?>
                </li>
                <li>
                    <strong>Author: </strong><?php echo $post['author'] ?>
                </li>
                <li>
                    <strong>Text: </strong><?php echo $post['text'] ?>
                </li>
                <br>
            <?php } ?>
        </ul>
    <?php } ?>
    <hr>
    <!-- SNACK 4 -->
    <h2>SNACK 4</h2>
    <?php foreach($random_numbers as $number){ ?>
        <?php echo $number ?>
    <?php } ?>
</body>
</html>