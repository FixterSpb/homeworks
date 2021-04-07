<?php
namespace app\src;

require_once '../vendor/autoload.php';


$editor = new Editor("./text.txt");
echo "ИСХОДНЫЙ ТЕКСТ: ", PHP_EOL, $editor->getText(), PHP_EOL, PHP_EOL;
$editor->edit(new CopyCommand(1, 7));
$editor->edit(new PasteCommand(1, 7));
echo "ОБРАБОТАННЫЙ ТЕКСТ: ", PHP_EOL, $editor->getText(), PHP_EOL, PHP_EOL;

$editor->undo();
//$editor->edit(new CutCommand(1, 7));
//
echo "Отмена: ", PHP_EOL, $editor->getText(), PHP_EOL, PHP_EOL;
//
//echo "БУФЕР: ", PHP_EOL, Clipboard::getInstance()->get(), PHP_EOL, PHP_EOL;
//
//var_dump($editor->history);


