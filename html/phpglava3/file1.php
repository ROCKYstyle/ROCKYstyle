<?php
echo "Хуйман";
echo "<br>"; // Простой вывод сообщения на экран
$username = "Max"; // Присваивание переменной
echo $username; //Вывод переменной
echo "<br>"; // Новый абзац
$huyman = $username; // Присваивание одной переменной к другой
echo $huyman;
echo "<br>"; // Вывод переменной
$team = array('Bill', 'Mary', 'Mike', 'Chris', 'Anne'); // Создание одномерного массива в переменной
echo $team[1];
echo "<br>"; // вывод массива
echo $team[3];
echo "<br>";

$oxo = array(array('x', ' ', 'o'),
    array('o', 'o', 'x'), // создание двухмерного массива
    array('x', 'o', ' '));
echo $oxo[1][2];
echo "<br>"; // Вывод о
echo 2 + 2;
echo "<br>";
$x = "2";
echo 2 * $x;
echo "<br>"; // Вывод умноженной переменной
echo 6 / $x;
echo "<br>"; // Вывод деленной переменной
$x += 5; // Увеличить переменную на 5
echo $x;
echo "<br>";
$y = "0";
if ($y-- == 0) echo $y;
echo "<br>";
$msg = "5";
echo "У вас " . $msg . " cообщений";
echo "<br>";
$bulletin = "ajshdajskdhasjkdhakjsdsh  ";
$prikrep = "1238231d";
$bulletin .= $prikrep; // Объединение строки с числом
echo $bulletin;
echo "<br>";
echo "На этой недели $bulletin  член";
echo "<br>"; // Вывод переменной в тексте
echo 'skill\'s';
echo "<br>"; // Отключение кавычки, превращение кавычки в простой символ
$heading = "Дата\tИмя\tПлатеж"; // t- табуляция
echo $heading;
echo "<br>";
$head = "1Дата 1Имя 1Платеж"; // Пробелы между датой именем платежем
echo $head;
echo "<br>";
$author = "Brian W. Kernighan";
echo <<<_END
Debugging is twice as hard as writing the code in the first place.
Therefore, if you write the code as cleverly as possible, you are,
by definition, not smart enough to debug it.
- $author.
_END;
// Многострочная команда echo с конструкцией <<<_END ... _END;
echo "<br>";
print "Хэллоу";
echo "<br>"; // Функиция с одним аргументом print
$number = 12345 * 67890;
echo substr($number, 6, 1);
echo "<br>"; // Функиция substr возвращает 1 символ на 6 позиции числа 12345*67890=838 102 050
echo "Это строка " . __LINE__ . " в файле " . __FILE__; // Вывод строки (линии __LINE__) в файле (__FILE__)
?>

