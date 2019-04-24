<?php

//Функция ищет отрывки из файла.txt, разбивает их в массив и  добавляет их в отдельные файлы в одну дирректорию.

function generationFileContent($fileContent, $expression, $direct, $fileName) // файл контент txt, выражение, дирректория, имя файла
{
$content = file_get_contents($fileContent); // получаю основной контент...
preg_match_all($expression, $content, $arrStr); // с помощью регулярки разбиваю текст в массив.
for($i = 0; $i < count($arrStr[0]); $i++)
{
	file_put_contents($direct . '/' . $fileName . $i, $arrStr[0][$i]); // добавил содержимое элемента в дирректорию
}
}
generationFileContent('tasksBasicsPhp.txt', '#(.*)\*{9}\s.*в\s\d{1,2}:\d{2,2}#Uuis', 'tasksBasicsPhp', 'task-');

// $content = file_get_contents('tasksBasicsPhp.txt');
// preg_match_all('#(.*)\*{9}\s.*в\s\d{1,2}:\d{2,2}#Uuis', $content, $arrStr);
// var_dump($arrStr);

?>





