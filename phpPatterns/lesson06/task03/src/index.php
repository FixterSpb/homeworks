<?php
<<<<<<< Updated upstream


=======
>>>>>>> Stashed changes
namespace app\src;

require_once '../vendor/autoload.php';

use app\src\commands\CopyCommand;
use app\src\commands\CutCommand;
use app\src\commands\PasteCommand;

$COUNT_ACTIONS = 10;
$commandClass = [CopyCommand::class, CutCommand::class, PasteCommand::class];

$editor = new Editor("./text.txt");
<<<<<<< Updated upstream
$outputText = $editor->getText();
echo "ИСХОДНЫЙ ТЕКСТ: ", PHP_EOL, $editor->getText(), PHP_EOL, PHP_EOL;
for($i = 0; $i < $COUNT_ACTIONS; $i++){
    $start = rand(0, mb_strlen($editor->getText()) - 1);
    $end = rand($start, mb_strlen($editor->getText()) - 1);
    $editor->edit(
        new $commandClass[
            rand(0, count($commandClass) - 1)
        ]($start, $end)
    );
}

echo "ОБРАБОТАННЫЙ ТЕКСТ: ", PHP_EOL, $editor->getText(), PHP_EOL, PHP_EOL;

for($i = 0; $i < $COUNT_ACTIONS; $i++){
    $editor->undo();
}
=======
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
>>>>>>> Stashed changes

echo "ОТМЕНА: ", PHP_EOL, $editor->getText(), PHP_EOL, PHP_EOL;

echo "Проверка: ", $editor->getText() === $outputText ?
    "После отмены произведенных операций текст идентичен начальному"
    : "После отмены всех операций текст отличается!";
