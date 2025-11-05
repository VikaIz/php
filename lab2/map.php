<?php
declare(strict_types=1);

/**
 * Применяет callback-функцию ко всем элементам массива
 * 
 * @param array $array Исходный массив
 * @param callable $callback Функция, применяемая к каждому элементу
 * @return array Новый массив с результатами применения callback-функции
 */
function map(array $array, callable $callback): array
{
    $result = [];
    foreach ($array as $key => $value) {
        $result[$key] = $callback($value, $key);
    }
    return $result;
}

// Пример использования с массивом чисел и стрелочной функцией
$numbers = [1, 2, 3, 4, 5];

// Стрелочная функция, возводящая число в квадрат
$squaredNumbers = map($numbers, fn($num) => $num ** 2);

// Вывод результатов
echo "Исходный массив: " . implode(', ', $numbers) . "<br>";
echo "Квадраты чисел: " . implode(', ', $squaredNumbers) . "<br>";

?>