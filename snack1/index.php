<?php
    $teams=[
        [
            'casa' =>[
                'team'=> 'Milano',
                'punti'=> 55,
            ],
            'ospite'=>[
                'team'=> 'Cantú',
                'punti'=> 60,
            ],
        ],
        [
            'casa' =>[
                'team'=> 'Polistena',
                'punti'=> 70,
            ],
            'ospite'=>[
                'team'=> 'Cinquefrondi',
                'punti'=> 60,
            ],
        ],
        [
            'casa' =>[
                'team'=> 'Juventus',
                'punti'=> 40,
            ],
            'ospite'=>[
                'team'=> 'Napoli',
                'punti'=> 35,
            ],
        ],
    ];

    for( $i = 0; $i < count($teams); $i++ ){
        echo $teams[$i]['casa']['team'].' - '.$teams[$i]['ospite']['team']. ' | '. $teams[$i]['casa']['punti'].' - '.$teams[$i]['ospite']['punti'].'<br>';
    }
?>