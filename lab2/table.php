<?php
declare(strict_types=1);

/*
ЗАДАНИЕ 1
- Создайте две целочисленные переменные $cols и $rows
- Присвойте созданным переменным произвольные значения в диапазоне от 1 до 10
*/
$cols = 8;
$rows = 6;
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
		}

		th {
			background-color: yellow;
		}
		
		.header-cell {
			background-color: #ffeb3b;
			font-weight: bold;
			text-align: center;
		}
		
		.data-cell {
			background-color: #f5f5f5;
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>Таблица умножения</h1>
	<?php
	/*
	ЗАДАНИЕ 2
	- Используя циклы отрисуйте таблицу умножения в виде HTML-таблицы на следующих условиях
		- Число столбцов должно быть равно значению переменной $cols
		- Число строк должно быть равно значению переменной $rows
		- Ячейки на пересечении столбцов и строк должны содержать значения, являющиеся произведением порядковых номеров столбца и строки
	- Рекомендуется использовать цикл for	
	
	ЗАДАНИЕ 3
	- Значения в ячейках первой строки и первого столбца должны быть отрисованы полужирным шрифтом и выровнены по центру ячейки
	- Фоновый цвет ячеек первой строки и первого столбца должен быть отличным от фонового цвета таблицы
	*/
	

	function generateMultiplicationTable(int $columns, int $rows): string
	{
		$html = '<table>';
		
		// Генерируем заголовок таблицы
		$html .= '<tr>';
		$html .= '<th class="header-cell">×</th>'; // Пустая ячейка в левом верхнем углу
		
		// Заголовки столбцов
		for ($col = 1; $col <= $columns; $col++) {
			$html .= '<th class="header-cell">' . $col . '</th>';
		}
		$html .= '</tr>';
		
		// Генерируем строки таблицы
		for ($row = 1; $row <= $rows; $row++) {
			$html .= '<tr>';
			
			// Заголовок строки
			$html .= '<th class="header-cell">' . $row . '</th>';
			
			// Ячейки с произведениями
			for ($col = 1; $col <= $columns; $col++) {
				$product = $row * $col;
				$html .= '<td class="data-cell">' . $product . '</td>';
			}
			
			$html .= '</tr>';
		}
		
		$html .= '</table>';
		return $html;
	}
	
	// Выводим таблицу умножения
	echo generateMultiplicationTable($cols, $rows);
	?> 
</body>
</html>