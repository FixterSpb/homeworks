<?php
use app\src\Editor;

require_once '../vendor/autoload.php';


$editor = new Editor("./text.txt");
echo "Исходный текст: ", $editor->getText(), PHP_EOL, PHP_EOL;


