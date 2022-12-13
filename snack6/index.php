<?php
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
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
    <?php
    
        for($i = 0; $i < count($db); $i++){

        $roles = array_keys($db)[$i];
        
        for($j = 0; $j < count(($db)[$roles]); $j++){
        
            $person = ($roles)[$j];
        
            if($roles == 'teachers'){
                
                echo '<span class="gray square">' . $db[$roles][$j]['name'] . ' - ' . $db[$roles][$j]['lastname'] . '</span>';

            } else {

                echo '<span class="green square">' . $db[$roles][$j]['name'] . ' - ' . $db[$roles][$j]['lastname'] . '</span>';

            }
        }
        
        };
    
    ?>
</body>
</html>

<style>
    span{
        display: inline-block;
        margin:5px;
    }

    .gray{
        background-color: gray;
    }

    .green{
        background-color: green;
    }
    
    .square{
        height: 100px;
        width: 100px;
    }

</style>