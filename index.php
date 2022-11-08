<?php
require("scholarship.php");
foreach ($students as $key => $students_information) {
    $s = "\n". HEADER ."\n";
    foreach ($students_information as $key1 => $information) {
        if ($key1 == "name") {
            $s .= "Уважаем(ый/ая) $information!";
        }
        if ($key1 == "mark") {
            $students_information["mark"] <= 5 ? $s .= $letter["deduction"] : $s .= $letter["progress"];
        }
        if ($key1 == "olympiad") {
            $students_information["olympiad"] == true ? $s .= $letter["olympiad"] : $s = $s;
        }
    }
    switch ($students_information["mark"]) {
        case $students_information["mark"] <= 2:
            $s .= "Вы не получаете стипендию.";
            break;
        case $students_information["mark"] >= 4 and $students_information["mark"] <= 9:
            $s .= "Ваша стипендия - 1250грн.";
            break;
        case $students_information["mark"] >= 12:
            $s .= "Ваша стипендия - 1700грн.";
            break;
    }
    echo $s;
}
