<?php
declare(strict_types=1);

/*
ЗАДАНИЕ 1
- Опишите функцию getTable()
- Задайте для функции три аргумента: $cols, $rows, $color

ЗАДАНИЕ 2
- Откройте файл table.php
- Скопируйте код, который отрисовывает таблицу умножения
- Вставьте скопированный код в тело функции getTable()
- Измените код таким образом, чтобы таблица отрисовывалась в зависимости от входящих параметров $cols, $rows и $color
- Добавьте в объявлние функции описание типов аргументов

ЗАДАНИЕ 4
- Измените входящие параметры функции getTable() на параметры по умолчанию
- Добавьте описание функции getTable() с помощью стандарта PHPDoc
*/

/**
 * Генерирует HTML таблицу умножения с заданными параметрами
 * 
 * @param int $cols Количество столбцов (по умолчанию 5)
 * @param int $rows Количество строк (по умолчанию 5)
 * @param string $color Цвет фона заголовков (по умолчанию 'yellow')
 * @return int Количество вызовов функции
 */
function getTable(int $cols = 5, int $rows = 5, string $color = 'yellow'): int
{
    static $count = 0;
    $count++;
    
    echo "<h3>Таблица умножения {$cols} × {$rows}</h3>";
    echo "<table>";
    
    // Заголовок таблицы
    echo "<tr>";
    echo "<th style='background-color: {$color};'>×</th>";
    for ($col = 1; $col <= $cols; $col++) {
        echo "<th style='background-color: {$color};'>{$col}</th>";
    }
    echo "</tr>";
    
    // Основные строки таблицы
    for ($row = 1; $row <= $rows; $row++) {
        echo "<tr>";
        echo "<th style='background-color: {$color};'>{$row}</th>";
        
        for ($col = 1; $col <= $cols; $col++) {
            $result = $row * $col;
            echo "<td>{$result}</td>";
        }
        
        echo "</tr>";
    }
    
    echo "</table>";
    echo "<br>";
    
    return $count;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Таблица умножения</title>
	<style>
		table {
			border: 2px solid black;
			border-collapse: collapse;
		}

		th,
		td {
			padding: 10px;
			border: 1px solid black;
			text-align: center;
		}
	</style>
</head>
<body> 
	<h1>Таблица умножения</h1>
	<?php
	/*
	ЗАДАНИЕ 3
	- Отрисуйте таблицу умножения вызывая функцию getTable() с различными параметрами
	- Создайте локальную статическую переменную $count для подсчёта числа вызовов функции getTable()
	- Функция getTable() должна возвращать значение переменной $count
	*/
	
	/*
	ЗАДАНИЕ 5
	- Отрисуйте таблицу умножения вызывая функцию getTable() без параметров
	- Отрисуйте таблицу умножения вызывая функцию getTable() с одним параметром
	- Отрисуйте таблицу умножения вызывая функцию getTable() с двумя параметрами
	- Используя статическую переменную $count выведите общее число вызовов функции getTable()
	*/
	
	// Вызов без параметров (используются значения по умолчанию)
	$callCount1 = getTable();
	
	// Вызов с одним параметром
	$callCount2 = getTable(3);
	
	// Вызов с двумя параметрами
	$callCount3 = getTable(4, 6);
	
	// Вызов с тремя параметрами
	$callCount4 = getTable(7, 8, 'lightblue');
	
	// Вызов с другими параметрами
	$callCount5 = getTable(10, 3, 'lightgreen');
	
	// Вывод общего количества вызовов
	echo "<h2>Общее количество вызовов функции: {$callCount5}</h2>";
	?> 
</body>
</html>