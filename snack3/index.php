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
            'author' => 'Pango',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Panto',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Pans',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Turi ip',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Marcp',
            'text' => 'Testo post 6'
        ]
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>
        <?php
        for($i = 0; $i < count($posts); $i++ ){
            $date = array_keys($posts)[$i];
            echo '<h1>'.$date.'</h1>';
            echo '<div>';
            for($t = 0; $t < count($posts[$date]); $t++){
                echo '<div>'.'<h5>'.$posts[$date][$t]['title'].'</h5>'.'<h3>'.$posts[$date][$t]['author'].'</h3>'.'<p>'.$posts[$date][$t]['text'].'</p>'.'</div>';
                echo '<br>';
            }
            
        }
        ?>
    </div>

</body>
</html>