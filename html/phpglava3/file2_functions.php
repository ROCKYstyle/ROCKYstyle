<?php
function longdate($timestamp) // Объявление функции
{
    return date("l F jS Y", $timestamp); // Возвращение значения
}

echo longdate(time()); // Вывод фунцкции
?>