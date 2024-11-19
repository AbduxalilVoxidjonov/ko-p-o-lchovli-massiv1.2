<?php
// Asl kitoblar massivi
$kitoblar = [
    [
        'nomi' => 'O\'tgan kunlar',
        'janr' => 'tragediya',
        'bet' => 200
    ],
    [
        'nomi' => 'Stiv Jobs',
        'janr' => 'tragediya',
        'bet' => 200
    ],
    [
        'nomi' => 'Hamsa',
        'janr' => 'tragediya',
        'bet' => 580
    ],
    [
        'nomi' => 'Molxona',
        'janr' => 'komediya',
        'bet' => 150
    ],
    [
        'nomi' => 'Daftar hoshiyasidan bitiklar',
        'janr' => 'komediya',
        'bet' => 140
    ]
];

// Kitoblar janrlari bo'yicha guruhlash
$guruhlanganKitoblar = [];

foreach ($kitoblar as $kitob) {
    $janr = $kitob['janr'];
    $guruhlanganKitoblar[$janr][] = [
        'nomi' => $kitob['nomi'],
        'janr' => $kitob['janr'],
        'bet' => $kitob['bet']
    ];
}

// Natijani chiqarish
echo '<pre>';
print_r($guruhlanganKitoblar);
echo '</pre>';
?>
