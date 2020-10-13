</<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<style>
    body{
        background-color: aquamarine;
    }
</style>
</body>
</html>
<?php
$array = [
    '5b' => [
        rand(1, 100) => [
            'data' => date("Y-m-d"),
            'vardas' => strtoupper('Aidas'),
            'pavarde' => strtoupper('Aidelis'),
            'balai' => [
                'matematika' => rand(1, 10),
                'informatika' => rand(1, 10),
                'anglu k.' => rand(1, 10),
            ]

        ],
        rand(1, 100) => [
            'data' => date("Y-m-d"),
            'vardas' => strtoupper('Mantas'),
            'pavarde' => strtoupper('Mantelis'),
            'balai' => [
                'matematika' => rand(1, 10),
                'informatika' => rand(1, 10),
                'anglu k.' => rand(1, 10),
            ]

        ],
        rand(1, 100) => [
            'data' => date("Y-m-d"),
            'vardas' => strtoupper('Linas'),
            'pavarde' => strtoupper('Linelis'),
            'balai' => [
                'matematika' => rand(1, 10),
                'informatika' => rand(1, 10),
                'anglu k.' => rand(1, 10),
            ]

        ],
        rand(1, 100) => [
            'data' => date("Y-m-d"),
            'vardas' => strtoupper('Titas'),
            'pavarde' => strtoupper('Titauskas'),
            'balai' => [
                'matematika' => rand(1, 10),
                'informatika' => rand(1, 10),
                'anglu k.' => rand(1, 10),
            ]

        ],
        rand(1, 100) => [
            'data' => date("Y-m-d"),
            'vardas' => strtoupper('Kristupas'),
            'pavarde' => strtoupper('Kristupelis'),
            'balai' => [
                'matematika' => rand(1, 10),
                'informatika' => rand(1, 10),
                'anglu k.' => rand(1, 10),
            ]

        ],
    ],
    '5a' => [
        rand(1, 100) => [
            'data' => date("Y-m-d"),
            'vardas' => strtoupper('Ignas'),
            'pavarde' => strtoupper('Ignelis'),
            'balai' => [
                'matematika' => rand(1, 10),
                'informatika' => rand(1, 10),
                'anglu k.' => rand(1, 10),
            ]

        ],
        rand(1, 100) => [
            'data' => date("Y-m-d"),
            'vardas' => strtoupper('Kristina'),
            'pavarde' => strtoupper('Kudirkaite'),
            'balai' => [
                'matematika' => rand(1, 10),
                'informatika' => rand(1, 10),
                'anglu k.' => rand(1, 10),
            ]

        ],
        rand(1, 100) => [
            'data' => date("Y-m-d"),
            'vardas' => strtoupper('Kipras'),
            'pavarde' => strtoupper('Mikalauskas'),
            'balai' => [
                'matematika' => rand(1, 10),
                'informatika' => rand(1, 10),
                'anglu k.' => rand(1, 10),
            ]

        ],
        rand(1, 100) => [
            'data' => date("Y-m-d"),
            'vardas' => strtoupper('Edvinas'),
            'pavarde' => strtoupper('Mikulis'),
            'balai' => [
                'matematika' => rand(1, 10),
                'informatika' => rand(1, 10),
                'anglu k.' => rand(1, 10),
            ]

        ],
        rand(1, 100) => [
            'data' => date("Y-m-d"),
            'vardas' => strtoupper('Sandra'),
            'pavarde' => strtoupper('Rackauskaite'),
            'balai' => [
                'matematika' => rand(1, 10),
                'informatika' => rand(1, 10),
                'anglu k.' => rand(1, 10),
            ]

        ],

    ]
];
?>
<table><tr><th>Klasė</th><th>Kodas</th><th>Vardas</th><th>Pavardė</th><th>Kontrolinių darbų vidurkis</th><th>Duomenų formatavimo data</th></tr>
    <?php
        foreach($array as $klase => $mokiniai):
            foreach($mokiniai as $data => $datainformacija):
                $vidurkis = 0;
             foreach ($datainformacija['balai'] as $kazkas => $baliukas){
                $vidurkis += $baliukas;
            }
            $vidurkis = round($vidurkis / 3,2);
    ?>

            <tr>
                <td><?=$klase;?></td>
                <td><?=$data;?></td>
                <td><?=$datainformacija['vardas'];?></td>
                <td><?=$datainformacija['pavarde'];?></td>
                <td><?=$vidurkis;?></td>
                <td><?=$datainformacija['data'];?></td>
            </tr>
        <?php endforeach; ?>
    <?php endforeach; ?>
</table>

