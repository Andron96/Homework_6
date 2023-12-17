<?php
declare(strict_types=1);

$ourArray = [];
$minRand = (int) readline("Введите минимальное случайное значение для массива случайный чисел: ");
$maxRand = (int) readline("Введите максимальное: ");
$arrayLength = (int) readline("Введите длину массива случайных чисел: ");
//Выход из скрипта при неправильном вводе количества элементов массива
if ($arrayLength <= 0) {
    echo "Вы ввели количество элементов массива раное \"0\" или меньше 0, что не верно. Программа прекращается.";
    return;
}
//Формирование массива из случайных чисел
for ($i = 0; $i < $arrayLength; $i++) {
    $ourArray[$i] = mt_rand($minRand, $maxRand);
}
//Вывод массива
foreach ($ourArray as $key => $value) {
    if ($key === array_key_last($ourArray)) {
        echo "[$key] = $value. \n";
        break;
    }
    echo "[$key] = $value; ";
}
//Нахождение суммы элементов массива и вывод этой суммы
$arrSum = 0;
foreach ($ourArray as $value) {
    $arrSum += $value;
}
echo "Сумма элементов массива: $arrSum\n";
//Нахождение произведения элементов массива и вывод этого произведения
$arrProd = 1;
foreach ($ourArray as $value) {
    $arrProd *= $value;
}
echo "Произведение элементов массива: $arrProd\n";
//Подсчет количества элементов массива со значением "5" и вывод этого количества
$fiveCounter = 0;
foreach ($ourArray as $value) {
    if ($value === 5) {
        $fiveCounter++;
    }
}
echo "Число \"5\" встречается в массиве: $fiveCounter раз/раза\n";