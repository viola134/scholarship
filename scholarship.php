<?php
define("HEADER", "08.11.2022 Деканат");
$students = [
    "Mihail" => [
        "name" => "Михаил",
        "mark" => 9,
        "olympiad" => false,
    ],
    "Elena" => [
        "name" => "Елена",
        "mark" => 8,
        "olympiad" => true,
    ],
    "Igor" => [
        "name" => "Игорь",
        "mark" => 3,
        "olympiad" => false,
    ],
    "Svitlana" => [
        "name" => "Светлана",
        "mark" => 12,
        "olympiad" => true,
    ],
    "Artem" => [
        "name" => "Артем",
        "mark" => 5,
        "olympiad" => false,
    ]
];
$letter = [
    "progress" => "Благодарим за успехи в учебе!",
    "deduction" => "Мы вынуждены отчислить Вас, из-за недопустимо низкого бала.",
    "olympiad" => "Назначаем премию за участие в олимпиаде!",
];