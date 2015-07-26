<?php

$result = [
    [
        'question' => 'Zaokrouhlete na celé desítky výsledek výpočtu 12x3?',
        'correct-answer' => '40',
        'incorrect-answers' => [
            '20',
            '30',
            '50',
        ]
    ],
];

for ($i=1; $i < 10; $i++) {
    $result[$i] = $result[0];
    $result[$i]['question'] .= ' - Verze otázky číslo ' . ($i+1);
}

header("Content-Type: text/javascript");
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
echo json_encode($result);
exit;
