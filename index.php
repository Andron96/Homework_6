<?php
declare(strict_types=1);

$ourArray = [];
$minRand = (int) readline("Введите минимальное случайное значение для массива случайный чисел: ");
$maxRand = (int) readline("Введите максимальное: ");
$arrayLength = (int) readline("Введите длину массива случайных чисел: ");
if ($arrayLength <= 0) {
    return;
}
for ($i = 0; $i < $arrayLength; $i++) {
    $ourArray[$i] = mt_rand($minRand, $maxRand);
}
$arrSum = 0;
foreach ($ourArray as $value) {
    $arrSum += $value;
}
echo "Сумма элементов массива: $arrSum\n";
$arrProd = 0;
foreach ($ourArray as $value) {
    $arrProd *= $value;
}
echo "Произведение элементов массива: $arrProd\n";
$fiveCounter = 0;
foreach ($ourArray as $value) {
    if ($value === 5) {
        $fiveCounter++;
    }
}
echo "Число \"5\" встречается в массиве: $fiveCounter раз/раза\n";