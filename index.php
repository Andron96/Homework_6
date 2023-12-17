<?php
declare(strict_types=1);

$ourArray = [];
$minRand = (int) readline("Введіть мінімальне випадкове значення для масива випадкових чисел: ");
$maxRand = (int) readline("Ввіедіть максимальне: ");
$arrayLength = (int) readline("Введіть довжину масива випадкових чисел: ");
//Вихід із скрипта при неправильному вводі кількості елементів масива
if ($arrayLength <= 0) {
    echo "Ви ввели невірну довжину масива. Програма буде завершена.";
    return;
}
//Формування масива із випадкових чисел
for ($i = 0; $i < $arrayLength; $i++) {
    $ourArray[$i] = mt_rand($minRand, $maxRand);
}
//Вивід масива
foreach ($ourArray as $key => $value) {
    if ($key === array_key_last($ourArray)) {
        echo "[$key] = $value. \n";
        break;
    }
    echo "[$key] = $value; ";
}
//Підрахунок
$arrSum = 0;
$arrProd = 1;
$fiveCounter = 0;
$intThreeDevArr = [];
foreach ($ourArray as $key => $value) {
    $arrSum += $value;
    $arrProd *= $value;
    if ($value === 5) {
        $fiveCounter++;
    }
    if (($value % 3) === 0) {
        $intThreeDevArr[$key] = $value;
    }
}
//Вивід результатів підрахування
echo "Сума елементів масива: $arrSum\n";
echo "Добуток елементів масива: $arrProd\n";
if ($fiveCounter > 0) {
    echo "Число \"5\" зустрічається в масиві: $fiveCounter разів/раза\n";
} else {
    echo "Число \"5\" зустрічається в масиві: 0 разів\n";
}
if (!$intThreeDevArr) {
    echo "Елементи масива, що націло діляться на \"3\": такі елементи відсутні\n";
} else {
    echo "Елементи масива, що націло діляться на \"3\": ";
    foreach ($intThreeDevArr as $key => $value) {
        echo "[$key] = $value";
        if ($key === array_key_last($intThreeDevArr)) {
            echo ".\n";
        } else {
            echo "; ";
        }
    }
}